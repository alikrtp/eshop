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
Route::get('/home','HomeController@index');
Route::get('/home/{id}/{name}','HomeController@test');
Route::get('/about','HomeController@about');
Route::get('/', function () {
    return view('welcome');
});

//***********************************************************************
//ADMIN routes

Route::get('/admin','Admin\HomeController@index')->name('admin');



//-----------------------------------------------------------------------------
//***********************************************************************
//LOGIN routes

Route::get('/admin/login','HomeController@login')->name('admin_login');
Route::post('/admin/login','HomeController@logincheck')->name('admin_logincheck');
Route::get('/admin/login','HomeController@logout')->name('admin_logout');

//-----------------------------------------------------------------------------
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
