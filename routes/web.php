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
/*
Route::get('/', function () {
    return view('auth.login');
});*/
Route::get('/', function () {
    return view('index');
});


Route::get('/registro', function () {
    return view('auth.register'); 
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/inicio', function () {
        return view('index');
    })->name('inicio');
    Route::get('/ofertas', function () {
        return view('ofertas');
    })->name('ofertas');
    Route::get('/empresas', function () {
        return view('empresas');
    });
    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');
    Route::get('/administrar', function () {
        return view('administrar');
    })->name('administrar');
    
});

// Route::get('user/{id}', 'UserController@showProfile');

// php artisan make:auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
