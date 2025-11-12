<?php

namespace App\Repositories\Master\Pegawai;

use App\Http\Resources\Pegawai\PegawaiResource;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;

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
        $query = $this->model::select('id', 'nip', 'nama', 'status_tte')
            ->when($request->search, $this->applySearchFilter($request));
        $result = PegawaiResource::collection($query->latest()->paginate($request->perPage ?? 25))->response()->getData(true);
        return $result['meta'] + ['data' => $result['data']];
    }
    public function store($request)
    {
        try {
            DB::beginTransaction();
            $this->model->create([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'status_tte' => $request->tte,
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    public function update($id, $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->model->findOrFail($id);
            $user->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'status_tte' => $request->tte,
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    public function delete($id)
    {
        return $this->model->find($id)?->delete();
    }
}
