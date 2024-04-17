<?php

namespace App\Http\Controllers\Dashboard\Settings\Delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MethodController extends Controller
{
    public function data($id = null) 
    {
        $data = include(resource_path() . '/fakes/delivery/methods.php');

        if ($id) {
            $data = array_filter($data, fn($v) => $v['id'] == $id);
            $data = array_pop($data);
        }

        return $data;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, )
    {
        return $this->response($request, [
            'title' => 'Способы доставки',
            'data' => $this->data()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, )
    {
        return $this->response($request, [
            'title' => 'Новая доставка'
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
    public function show(string $id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        return  $this->response($request, [
            'title' => 'Доставка | редактирование' ,
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
