<?php

namespace App\Repositories\Master\Pelayanan;

use App\Http\Resources\Pelayanan\PelayananResource;
use App\Models\Ref\RefPelayanan;
use Illuminate\Support\Facades\DB;

class PelayananRepository
{
    public function __construct(protected RefPelayanan $model) {}
    private function applySearchFilter($request)
    {
        return fn($q) => $q->where(function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->search}%")
                ->orWhere('nama', 'like', "%{$request->search}%");
        });
    }
    public function data($request)
    {
        $query = $this->model::with('lampiran')->select('id', 'nama', 'keterangan', 'url', 'status_pelayanan', 'status_tte',)->when($request->search, $this->applySearchFilter($request));
        $result = PelayananResource::collection($query->latest()->paginate($request->perPage ?? 25))->response()->getData(true);
        return $result['meta'] + ['data' => $result['data']];
    }
    public function store($request)
    {
        try {
            DB::beginTransaction();
            $pelayanan = $this->model->create([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'url' => $request->url,
                'status_pelayanan' => $request->status,
                'status_tte' => $request->tte,
            ]);
            $syncData = [];
            foreach ($request->lampiran as $index => $lampiranId) {
                $syncData[$lampiranId] = ['no_urut' => $index + 1];
            }

            $pelayanan->lampiran()->sync($syncData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    public function update($pelayanan, $request)
    {
        try {
            DB::beginTransaction();
            $pelayanan->update([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'url' => $request->url,
                'status_pelayanan' => $request->status,
                'status_tte' => $request->tte,
            ]);
            $syncData = [];
            foreach ($request->lampiran as $index => $lampiranId) {
                $syncData[$lampiranId] = ['no_urut' => $index + 1];
            }
            $pelayanan->lampiran()->sync($syncData);
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
