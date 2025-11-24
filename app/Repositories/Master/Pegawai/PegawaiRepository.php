<?php

namespace App\Repositories\Master\Pegawai;

use App\Http\Resources\Pegawai\PegawaiResource;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiRepository
{
    public function __construct(protected Pegawai $model) {}
    private function applySearchFilter($request)
    {
        return fn($q) => $q->where(function ($query) use ($request) {
            $query->where('nip', 'like', "%{$request->search}%")
                ->orWhere('nama', 'like', "%{$request->search}%");
        });
    }
    public function data($request)
    {
        $query = $this->model::with('user')->select('id', 'nip', 'nama', 'status_tte')
            ->when($request->search, $this->applySearchFilter($request));
        $result = PegawaiResource::collection($query->latest()->paginate($request->perPage ?? 25))->response()->getData(true);
        return $result['meta'] + ['data' => $result['data']];
    }
    public function store($request)
    {
        try {
            DB::beginTransaction();
            $pegawai = $this->model->create([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'status_tte' => $request->tte,
            ]);
            $user = User::create([
                'name' => $request->nama,
                'nid' => $request->nip,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'telp' => $request->telp,
                'accountable_type' => 'App\Models\Pegawai',
                'accountable_id' => $pegawai->id,
            ]);
            $user->assignRole($request->role);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    public function update($pegawai, $request)
    {
        try {
            DB::beginTransaction();
            $pegawai->user->update([
                'name' => $request->nama,
            ]);
            $pegawai->update([
                'nama' => $request->nama,
                'status_tte' => $request->tte,
            ]);
            $pegawai->user->syncRoles($request->role);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    public function delete($pegawai)
    {
        $pegawai->user->delete();
        return $pegawai->delete();
    }
}
