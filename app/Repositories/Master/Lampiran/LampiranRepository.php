<?php

namespace App\Repositories\Master\Lampiran;

use App\Http\Resources\Common\SelectOptionResource;
use App\Http\Resources\Lampiran\LampiranResource;
use App\Models\Ref\RefLampiran;
use Illuminate\Support\Facades\DB;

class LampiranRepository
{
    public function __construct(protected RefLampiran $model) {}
    private function applySearchFilter($request)
    {
        return fn($q) => $q->where(function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->search}%");
        });
    }

    public function data($request)
    {
        $query = $this->model::select('id', 'nama', 'wajib')
            ->when($request->search, $this->applySearchFilter($request));
        $result = LampiranResource::collection($query->latest()->paginate($request->perPage ?? 25))->response()->getData(true);
        return $result['meta'] + ['data' => $result['data']];
    }

    public function store($request)
    {
        try {
            DB::beginTransaction();
            $this->model->create([
                'nama' => $request->nama,
                'wajib' => $request->wajib,
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
                'wajib' => $request->wajib,
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

    public function list()
    {
        return SelectOptionResource::collection($this->model::select('id', 'nama')->get());
    }
}
