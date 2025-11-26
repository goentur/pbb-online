<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Common\DataRequest;
use App\Http\Requests\Master\Lampiran\StoreRequest;
use App\Http\Requests\Master\Lampiran\UpdateRequest;
use App\Models\Ref\RefLampiran;
use App\Repositories\Master\Lampiran\LampiranRepository;
use App\Support\Facades\Memo;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class LampiranController extends Controller implements HasMiddleware
{
    public function __construct(protected LampiranRepository $repository)
    {
        $this->repository = $repository;
    }
    public static function middleware(): array
    {
        return [
            new Middleware('can:lampiran-index', only: ['index', 'data']),
            new Middleware('can:lampiran-create', only: ['store']),
            new Middleware('can:lampiran-update', only: ['update']),
            new Middleware('can:lampiran-delete', only: ['destroy'])
        ];
    }
    private function gate(): array
    {
        $user = auth()->user();
        return Memo::forHour('lampiran-gate-' . $user->getKey(), function () use ($user) {
            return [
                'create' => $user->can('lampiran-create'),
                'update' => $user->can('lampiran-update'),
                'delete' => $user->can('lampiran-delete'),
            ];
        });
    }

    public function index()
    {
        $gate = $this->gate();
        return inertia('master/lampiran/index', compact("gate"));
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

    public function update(UpdateRequest $request, RefLampiran $lampiran)
    {
        $this->repository->update($lampiran, $request);
        back()->with('success', 'Data berhasil diubah');
    }

    public function destroy(RefLampiran $lampiran)
    {
        $this->repository->delete($lampiran);
        back()->with('success', 'Data berhasil dihapus');
    }

    public function data(DataRequest $request)
    {
        return response()->json($this->repository->data($request), 200);
    }

    public function list()
    {
        return response()->json($this->repository->list(), 200);
    }
}
