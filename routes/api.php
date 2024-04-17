<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

require_once __DIR__ . '/api/v1.php';

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
