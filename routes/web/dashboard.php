<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('dashboard')->namespace('Dashboard')->group(function () {

    Route::get('/', 'IndexController');

    Route::resources([
        'products' => 'ProductController',
        'orders' => 'OrderController',
        'categories' => 'CategoryController',
        'vendors' => 'VendorController'
    ]);

    Route::prefix('settings')->namespace('Settings')->group(function() {
        Route::get('/', 'IndexController');

        Route::namespace('Delivery')->group(function() {

            Route::resource('deliveries', 'MethodController');
            Route::prefix('delivery')->group(function() {
                Route::resources([
                    'zones' => 'ZoneController',
                    'cars' => 'CarController',
                ]);

                // Route::resource('cars.zones', 'CarZoneController')
                //     ->shallow();

                Route::resource('cars/{id}/zones', 'CarZoneController')
                    ->only(['index', 'create', 'store']);

                Route::resource('carzones', 'CarZoneController')
                    ->only(['show', 'edit', 'update', 'destroy']);
            });
        });
    });
});
