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
    return view('index');
});

Auth::routes();
/*
GET  | login                  | Auth\LoginController@showLoginForm
POST | login                  | Auth\LoginController@login
POST | logout                 | Auth\LoginController@logout
POST | password/email         | Auth\ForgotPasswordController@sendResetLinkEmail
GET  | password/reset         | Auth\ForgotPasswordController@showLinkRequestForm
POST | password/reset         | Auth\ResetPasswordController@reset
GET  | password/reset/{token} | Auth\ResetPasswordController@showResetForm
GET  | register               | Auth\RegisterController@showRegistrationForm
POST | register               | Auth\RegisterController@register
*/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm');

Route::post('/register', 'Auth\RegisterController@register');

Route::get('/products', 'ProductController@list');

Route::get('/products/{id}', 'ProductController@detail');

Route::get('admin/newProduct', 'ProductController@newProduct');

