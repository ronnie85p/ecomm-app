<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    public function response(Request $request, $response = [])
    {
        $viewPath = ltrim(str_replace(
            ['App\\Http\\Controllers', '\\', 'Controller', '@'], 
            ['', '/', '', '/'], 
            $request->route()->action['controller']
        ), '/');

        $viewPath = implode('/', array_map(fn($v) => ucfirst($v), 
            explode('/', $viewPath)));
 
        return inertia($viewPath, $response);
    }
}
