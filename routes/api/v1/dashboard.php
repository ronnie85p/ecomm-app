<?php

use App\Http\Controllers\Api\V1\Dashboard\CategoryController;
use App\Http\Controllers\Api\V1\Dashboard\VendorController;
use App\Http\Controllers\Api\V1\Dashboard\TrademarkController;
// use App\Http\Controllers\Api\V1\Dashboard\OrdersController;
// use App\Http\Controllers\Api\V1\Dashboard\ProductsController;

Route::prefix('/v1/dashboard/')->name('api.v1.dashboard.')->group(function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('vendors', VendorController::class);
    Route::get('vendors/{id}/trademarks', [VendorController::class, 'getTrademarks']);
    Route::apiResource('trademarks', TrademarkController::class);

    // Route::apiResource('products', CategoriesController::class);
    // Route::apiResource('orders', CategoriesController::class);
});
