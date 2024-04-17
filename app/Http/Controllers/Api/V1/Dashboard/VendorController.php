<?php

namespace App\Http\Controllers\Api\V1\Dashboard;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Dashboard\Vendor\IndexFormRequest;
use App\Http\Requests\Dashboard\Vendor\ShowFormRequest;
use App\Http\Requests\Dashboard\Vendor\StoreFormRequest;
use App\Http\Requests\Dashboard\Vendor\UpdateFormRequest;
use App\Http\Requests\Dashboard\Vendor\DestroyFormRequest;
use App\Services\Dashboard\VendorService;

use Illuminate\Http\Request;

class VendorController extends ApiController
{
    public function __construct(
        protected VendorService $service
    ) { }

    public function getTrademarks(IndexFormRequest $request, string $id)
    {
        return $this->response(
            $this->service->getTrademarks(), true);
    }

    public function index(IndexFormRequest $request)
    {
        return $this->response(
            $this->service->search($request->input()),
            true
        );
    }

    public function show(ShowFormRequest $request, string $id)
    {
        return $this->response(
            $this->service->getById($id)
        );
    }

    public function store(StoreFormRequest $request)
    {
        return $this->response(
            $this->service->create($request->input())
        );
    }

    public function update(UpdateFormRequest $request, string $id)
    {
        return $this->response(
            $this->service->update($id, $request->input())
        );
    }

    public function destroy(DestroyFormRequest $request, string $id)
    {
        return $this->response(
            $this->service->delete($id)
        );
    }
}
