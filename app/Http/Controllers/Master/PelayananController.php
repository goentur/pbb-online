<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Common\DataRequest;
use App\Http\Requests\Master\Layanan\StoreRequest;
use App\Http\Requests\Master\Layanan\UpdateRequest;
use App\Models\Ref\RefPelayanan;
use App\Repositories\Master\Layanan\LayananRepository;
use App\Support\Facades\Memo;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PelayananController extends Controller implements HasMiddleware
{
    public function __construct(protected LayananRepository $repository)
    {
        $this->repository = $repository;
    }
    public static function middleware(): array
    {
        return [
            new Middleware('can:layanan-index', only: ['index', 'data']),
            new Middleware('can:layanan-create', only: ['store']),
            new Middleware('can:layanan-update', only: ['update']),
            new Middleware('can:layanan-delete', only: ['destroy'])
        ];
    }
    private function gate(): array
    {
        $user = auth()->user();
        return Memo::forHour('layanan-gate-' . $user->getKey(), function () use ($user) {
            return [
                'create' => $user->can('layanan-create'),
                'update' => $user->can('layanan-update'),
                'delete' => $user->can('layanan-delete'),
            ];
        });
    }

    public function index()
    {
        $gate = $this->gate();
        return inertia('master/layanan/index', compact("gate"));
    }

    public function create()
    {
        abort(404);
    }

    public function store(StoreRequest $request)
    {
        $this->repository->store($request);
        back()->with('success', 'Data berhasil ditambahkan');
    }

    public function show(string $id)
    {
        abort(404);
    }

    public function edit(string $id)
    {
        abort(404);
    }

    public function update(UpdateRequest $request, RefPelayanan $Layanan)
    {
        $this->repository->update($Layanan, $request);
        back()->with('success', 'Data berhasil diubah');
    }

    public function destroy(RefPelayanan $Layanan)
    {
        $this->repository->delete($Layanan);
        back()->with('success', 'Data berhasil dihapus');
    }

    public function data(DataRequest $request)
    {
        return response()->json($this->repository->data($request), 200);
    }
}
