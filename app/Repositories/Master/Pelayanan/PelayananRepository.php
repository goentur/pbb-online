<?php

namespace App\Repositories\Master\Pegawai;

use App\Http\Resources\Pegawai\PegawaiResource;
use App\Models\Ref\RefPelayanan;
use Illuminate\Support\Facades\DB;

class PelayananRepository
{
    public function __construct(protected RefPelayanan $model) {}
    private function applySearchFilter($request)
    {
        return fn($q) => $q->where(function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->search}%");
        });
    }
    public function data($request)
    {
        $query = $this->model::select('id', 'nama')
            ->when($request->search, $this->applySearchFilter($request));
        $result = PegawaiResource::collection($query->latest()->paginate($request->perPage ?? 25))->response()->getData(true);
        return $result['meta'] + ['data' => $result['data']];
    }
    public function store($request)
    {
        try {
            DB::beginTransaction();
            $this->model->create([
                'nama' => $request->nama,
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    public function update($refPelayanan, $request)
    {
        try {
            DB::beginTransaction();
            $refPelayanan->update([
                'nama' => $request->nama,
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    public function delete($refPelayanan)
    {
        return $refPelayanan->delete();
    }
}
