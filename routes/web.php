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

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/book','BookController@show_all_book');
Route::get('/book/random','BookController@get_random_5_book');
Route::get('/book/create','BookController@create_new_book');
Route::get('/author','AuthorController@show_all_author');
