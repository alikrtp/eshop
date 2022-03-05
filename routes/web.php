<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('/home', [HomeController::class,'index']);
//Route::get('/home','HomeController@index');
Route::get('/home','HomeController@index')->name('home');
Route::get('/home/{id}/{name}','HomeController@test');
Route::get('/about','HomeController@about');
Route::get('/', function () {
    return view('welcome');
});

//***********************************************************************
//ADMIN routes


//Category routes
Route::middleware('auth')->prefix('admin')->group( function () {

Route::get('/','Admin\HomeController@index')->name('admin');

Route::get('category','Admin\CategoryController@index')->name('admin_category');
Route::get('category/add','Admin\CategoryController@add')->name('admin_category_add');
Route::post('category/create','Admin\CategoryController@create')->name('admin_category_create');
Route::get('category/edit/{id}','Admin\CategoryController@edit')->name('admin_category_edit');
Route::post('category/update/{id}','Admin\CategoryController@update')->name('admin_category_update');
Route::get('category/delete/{id}','Admin\CategoryController@destroy')->name('admin_category_delete');
Route::get('category/show','Admin\CategoryController@show')->name('admin_category_show');

Route::prefix('product')->group( function () {

    Route::get('/','Admin\ProductController@index')->name('admin_product');
    Route::get('create','Admin\ProductController@create')->name('admin_product_add');
    Route::post('store','Admin\ProductController@store')->name('admin_product_store');
    Route::get('edit/{id}','Admin\ProductController@edit')->name('admin_product_edit');
    Route::post('update/{id}','Admin\ProductController@update')->name('admin_product_update');
    Route::get('delete/{id}','Admin\ProductController@destroy')->name('admin_product_delete');
    Route::get('show','Admin\ProductController@show')->name('admin_product_show');
    });
    Route::prefix('image')->group( function () {


        Route::get('create/{product_id}','Admin\imageController@create')->name('admin_image_add');

        Route::post('store/{product_id}','Admin\imageController@store')->name('admin_image_store');
        Route::get('delete/{id}/{product_id}','Admin\imageController@destroy')->name('admin_image_delete');
        Route::get('show','Admin\imageController@show')->name('admin_image_show');
        });



});




//-----------------------------------------------------------------------------
//***********************************************************************
//LOGIN routes

Route::get('/admin/login','HomeController@login')->name('admin_login');
Route::post('/admin/logincheck','HomeController@logincheck')->name('admin_logincheck');
Route::get('/admin/logout','HomeController@logout')->name('admin_logout');

//-----------------------------------------------------------------------------
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
