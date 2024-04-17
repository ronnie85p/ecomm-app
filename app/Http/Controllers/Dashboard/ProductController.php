<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{    
    public function data($id)
    {
        return [];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, )
    {
        return $this->response($request, [
            'title' => 'Все товары',
            // 'data' => $this->data()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, )
    {
        return $this->response($request, [
            'title' => 'Новый товар'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        return $this->response($request, [
            'title' => 'Product',
            'data' => $this->data($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        return $this->response($request, [
            'title' => 'Product | Edit',
            'data' => $this->data($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //
    }
}
