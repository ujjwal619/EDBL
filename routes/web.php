<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;

// Route::get('/', function () {
//       return view('welcome');
//   });

Route::resource('companies', CompanyCRUDController::class);


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
?>
 