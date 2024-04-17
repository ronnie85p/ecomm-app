<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Dashboard\IndexController;

Route::namespace('App\Http\Controllers')->group(function() {
    require_once __DIR__ . '/web/dashboard.php';

    Route::get('/', function() {
         return inertia('Index', [
             // params
         ]);
    });

    Route::resource('cart', 'Orders\CartController');

    Route::get('checkout/delivery', 'Orders\CheckoutController@showDelivery');
    Route::get('checkout/ordering', 'Orders\CheckoutController@showOrdering');
    Route::resource('checkout', 'Orders\CheckoutController');

    Route::get('auth/signup', 'Auth\SignUpController@index');
    Route::get('auth/signin', 'Auth\SignInController@index');



    Route::prefix('profile')->group(function () {
        Route::resource('/', 'ProfileController');

        Route::namespace('Profile')->group(function() {
            Route::resource('edit', 'EditController');

            Route::resource('addresses', 'AddressController');
            Route::resource('favorites', 'FavoritesController');
            Route::resource('orders', 'OrderController');
            Route::resource('contacts/phones', 'Contacts\PhonesController');
            Route::resource('contacts/email', 'Contacts\EmailController');
            Route::resource('contacts', 'ContactsController');

            Route::resource('settings/notifications', 'Settings\NotificationController');
            Route::resource('settings/security/login', 'Settings\Security\LoginController');
            Route::resource('settings/security/sessions', 'Settings\Security\SessionController');
            Route::resource('settings/security/password', 'Settings\Security\PasswordController');
            Route::resource('settings', 'SettingsController');
        });
    });

    Route::get('categories', 'CategoryController@index');
    Route::get('categories/{id}', 'CategoryController@getProducts');
    Route::get('categories/{id?}/{product?}', 'CategoryController@showProduct');
});
