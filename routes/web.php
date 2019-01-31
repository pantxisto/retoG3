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
// Para el login y logout

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Para el registro
Route::get('registro', 'Auth\RegisterController@showRegistrationForm');

Route::post('register', 'Auth\RegisterController@register')->name('register');

// Password Reset Routes...
Route::get('reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

// Los dos siguientes links actuan sobre una misma página pero el primero sirve para que se mande el email a esa direccion
// y el segundo para que al entrar a la direccion le redirija al controlador

Route::get('/Proyectos/retoG3/public/password/reset/{token}')->name('password.reset');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');

Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Ruta de Unai
// Route::get('/index', 'OfertasController@index');


//Rutas y vistas que no hay que modificar

Route::group(['middleware' => 'auth'], function() {
    Route::get('/inicio', 'OfertasController@index')->name('inicio');
    
    Route::get('/ofertas', 'OfertasController@index')->name('ofertas');

    Route::get('/administrar', 'AdministrarController@index')->name('administrar');

    Route::get('/empresas', 'EmpresasController@index')->name('empresas');


/*
    Route::get('/ofertas', function () {
        return view('ofertas');
    })->name('ofertas');*/
    /*
    Route::get('/empresas', function () {
        return view('empresas');
    });*/
    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');
    /*
    Route::get('/administrar', function () {
        return view('administrar');
    })->name('administrar');*/
});

// Route::get('user/{id}', 'UserController@showProfile');

// php artisan make:auth
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

