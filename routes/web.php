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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/user_blog','App\Http\Controllers\UserBlogController@index');
Route::post('/addimage','App\Http\Controllers\UserBlogController@store')->name('addimage');
Route::get('/userpage','App\Http\Controllers\UserBlogController@display');
Route::get('/viewpage','App\Http\Controllers\UserBlogController@view');
Route::get('/editimage/{id}','App\Http\Controllers\UserBlogController@edit');
Route::put('/updateimage/{id}','App\Http\Controllers\UserBlogController@update');
Route::get('/deleteimage/{id}','App\Http\Controllers\UserBlogController@delete');

//Route::get('/retrievedata/{id}','App\Http\Controllers\UserBlogController@retrieve');