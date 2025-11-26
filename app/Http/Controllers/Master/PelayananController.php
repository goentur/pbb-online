<?php

namespace App\Http\Controllers\Master;

use App\Enums\StatusPelayanan;
use App\Http\Controllers\Controller;
use App\Http\Requests\Common\DataRequest;
use App\Http\Requests\Master\Pelayanan\StoreRequest;
use App\Http\Requests\Master\Pelayanan\UpdateRequest;
use App\Models\Ref\RefPelayanan;
use App\Repositories\Master\Pelayanan\PelayananRepository;
use App\Support\Facades\Memo;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PelayananController extends Controller implements HasMiddleware
{
    public function __construct(protected PelayananRepository $repository)
    {
        $this->repository = $repository;
    }
    public static function middleware(): array
    {
        return [
            new Middleware('can:pelayanan-index', only: ['index', 'data']),
            new Middleware('can:pelayanan-create', only: ['store']),
            new Middleware('can:pelayanan-update', only: ['update']),
            new Middleware('can:pelayanan-delete', only: ['destroy'])
        ];
    }
    private function gate(): array
    {
        $user = auth()->user();
        return Memo::forHour('pelayanan-gate-' . $user->getKey(), function () use ($user) {
            return [
                'create' => $user->can('pelayanan-create'),
                'update' => $user->can('pelayanan-update'),
                'delete' => $user->can('pelayanan-delete'),
            ];
        });
    }

    public function index()
    {
        $gate = $this->gate();
        $statusPelayanan = StatusPelayanan::toSelectOptions();
        return inertia('master/pelayanan/index', compact("gate", "statusPelayanan"));
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

    public function update(UpdateRequest $request, RefPelayanan $pelayanan)
    {
        $this->repository->update($pelayanan, $request);
        back()->with('success', 'Data berhasil diubah');
    }

    public function destroy(RefPelayanan $pelayanan)
    {
        $this->repository->delete($pelayanan);
        back()->with('success', 'Data berhasil dihapus');
    }

    public function data(DataRequest $request)
    {
        return response()->json($this->repository->data($request), 200);
    }
}
