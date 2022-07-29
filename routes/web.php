<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\CompanyCRUDController;
    // use App\Http\Controllers\GetCustomerInfo;

     /**
        * storeprocedure Routes
        */
    // Route::get('/call-post-procedure', 'GetAcInfo@customerdetails');
    Route::resource('companies', CompanyCRUDController::class);
    Route::get('/customers/report', 'App\Http\Controllers\ReportController@index')->name('report');

    Route::get('/', function () 
    {
        return redirect(route('customers.index'));
    });
    Route::group(['namespace' => 'App\Http\Controllers'], function()
    {   
           /**
           * Home Routes
           */
           Route::get('api/v1/getcustomerinfo', 'GetCustomerInfoController@index');

            Route::group(['as' => 'customers.', 'prefix' => 'customers'], function () 
        {   
          Route::get('/', 'App\Http\Controllers\CustomerCRUDController@index')->name('index');
          //Route::get('/', 'HomeController@index')->name('customers.index');
          Route::get('/create', 'CustomerCRUDController@create')->name('create');
          Route::delete('/', 'CustomerCRUDController@destroy')->name('delete');
          Route::post('/', 'CustomerCRUDController@store')->name('store');
          Route::get('/edit/{customer}', 'App\Http\Controllers\CustomerCRUDController@edit')->name('edit');
          Route::match(['put','patch'],'/update', 'App\Http\Controllers\CustomerCRUDController@update',)->name('update');
          //Route::post('/updates', 'App\Http\Controllers\CustomerCRUDController@updates',)->name('updates');
          //Route::get('getcustomerdetails', 'GetAcInfo@customerdetails')->name('creates');
        });

          Route::group(['middleware' => ['guest']], function() 
        {
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
          Route::group(['middleware' => ['auth']], function() 
        {
          /**
          * Logout Routes
          */
          Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        });
    });
?>
