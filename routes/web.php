<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
    return view('welcome');
});


//Route::get('/','FrontendController@index');
//Route::get('/about-us','FrontendController@aboutus');
//Route::get('/about-us','FrontendController@aboutus');
//Route::get('/about-us','FrontendController@aboutus');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middledware' => ['auth' , 'admin']], function(){


    Route::get('/dashboard', function () {
        return view('admin.dashboard');
});



    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

    Route::get('/abouts', 'Admin\AboutusController@index');
    Route::post('/save-abouts', 'Admin\AboutusController@store');
});

