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



Route::middleware('auth')->prefix('admin')->group( function () {

Route::get('/','Admin\HomeController@index')->name('admin');

Route::get('category','Admin\CategoryController@index')->name('admin_category');
Route::get('category/add','Admin\CategoryController@add')->name('admin_category_add');
Route::post('category/create','Admin\CategoryController@create')->name('admin_category_create');
Route::get('category/edit/{id}','Admin\CategoryController@edit')->name('admin_category_edit');
Route::post('category/update/{id}','Admin\CategoryController@update')->name('admin_category_update');
Route::get('category/delete/{id}','Admin\CategoryController@destroy')->name('admin_category_delete');
Route::get('category/show','Admin\CategoryController@show')->name('admin_category_show');
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
