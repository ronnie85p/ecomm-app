<?php

namespace App\Http\Controllers\Profile\Settings\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function data()
    {
        return [
            [
                'ip' => '192.168.1.2',
                'device' => 'pc',
                'active' => 1,
                'current' => 1,
                'location' => 'г. Новокузнецк',
                'timestamp' => '22.10.22 15:00'
            ],
            [
                'ip' => '192.168.1.2',
                'device' => 'mobile',
                'active' => 1,
                'location' => 'г. Новокузнецк',
                'timestamp' => '22.10.22 15:00'
            ],
            [
                'ip' => '192.168.1.2',
                'device' => 'mobile',
                'active' => 0,
                'location' => 'г. Новокузнецк',
                'timestamp' => '22.10.22 15:00'
            ],
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->response($request, [
            'data' => $this->data() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
