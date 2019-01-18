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

// Route::get('/', ['middleware' => 'auth', function () {
//     return view('index');
// }]);

Route::get('/', function () {
    return view('administrar');
});

Route::get('/inicio', function () {
    return view('index');
});

Route::get('/registro', function () {
    return view('registro');   $table->string('email');
            $table->string('password');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/ofertas', function () {
    return view('ofertas');
});

Route::get('/empresas', function () {
    return view('empresas');
});

Route::get('user/{id}', 'UserController@showProfile');

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/administrar', function () {
    return view('administrar');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');