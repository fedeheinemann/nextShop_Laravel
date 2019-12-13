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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@listHome');

Route::get('/legal', function(){ return view('legal'); });

/*
|--------------------------------------------------------------------------
| Login Register Routes
|--------------------------------------------------------------------------
*/

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

Route::get('/register', 'Auth\RegisterController@showRegistrationForm');

Route::post('/register', 'Auth\RegisterController@register');


/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
*/

Route::get('/products', 'ProductController@list');

Route::get('/products/{id}', 'ProductController@detail');


/*
|--------------------------------------------------------------------------
| Administration Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin', 'ProductController@index')->middleware('is_admin');

Route::get('/admin/edit/{id}', 'ProductController@edit')->middleware('is_admin');

Route::post('/admin/edit/{id}', 'ProductController@update')->middleware('is_admin');

Route::get('/admin/add', 'ProductController@new')->middleware('is_admin');

Route::post('/admin/add', 'ProductController@addProduct')->middleware('is_admin');

Route::get('/admin/category', 'CategoryController@index')->middleware('is_admin');

Route::get('/admin/category/add', 'CategoryController@new')->middleware('is_admin');

Route::post('/admin/category/add', 'CategoryController@add')->middleware('is_admin');

Route::get('/admin/category/{id}', 'CategoryController@edit')->middleware('is_admin');

Route::post('/admin/category/{id}', 'CategoryController@update')->middleware('is_admin');

Route::get('/admin/brand', 'BrandController@index')->middleware('is_admin');

Route::get('/admin/brand/add', 'BrandController@new')->middleware('is_admin');

Route::post('/admin/brand/add', 'BrandController@add')->middleware('is_admin');

Route::get('/admin/brand/{id}', 'BrandController@edit')->middleware('is_admin');

Route::post('/admin/brand/{id}', 'BrandController@update')->middleware('is_admin');

// Route::get('/admin/users', 'UserController@index')->middleware('is_admin');

// Route::get('/admin/users/edit/{id}', 'UserController@edit')->middleware('is_admin');

// Route::post('/admin/users/edit/{id}', 'UserController@update')->middleware('is_admin');

/*
|--------------------------------------------------------------------------
| Cart Routes
|--------------------------------------------------------------------------
*/

// Route::get('/cart', 'CartController@index')->middleware('is_admin');

// Route::bind('product', function($id){ return App\Product::where('id', $id)->first(); });

Route::get('cart/show', 'CartController@show');

Route::post('cart/add/{id}', 'CartController@add');

// Route::get('cart/delete/{id}', 'CartController@delete');

// Route::get('cart/trash', 'CartController@trash');

// Route::get('cart/update/{id}/{quantity}', 'CartController@update');