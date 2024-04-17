<?php

namespace App\Http\Controllers\Api\V1\Dashboard;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Dashboard\Category\IndexFormRequest;
use App\Http\Requests\Dashboard\Category\ShowFormRequest;
use App\Http\Requests\Dashboard\Category\StoreFormRequest;
use App\Http\Requests\Dashboard\Category\UpdateFormRequest;
use App\Http\Requests\Dashboard\Category\DestroyFormRequest;
use App\Services\Dashboard\CategoryService;

use Illuminate\Http\Request;

class CategoryController extends ApiController
{
    public function __construct(
        protected CategoryService $service
    ) { }

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
