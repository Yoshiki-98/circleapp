<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::post('hello', 'App\Http\Controllers\HelloController@search'); 

Route::get('hello/show', 'App\Http\Controllers\HelloController@show');

Route::get('board', 'App\Http\Controllers\BoardController@index');

Route::get('board/add', 'App\Http\Controllers\BoardController@add');
Route::post('board/add', 'App\Http\Controllers\BoardController@create');

Route::get('board/edit', 'App\Http\Controllers\BoardController@edit');
Route::post('board/edit', 'App\Http\Controllers\BoardController@update');

Route::get('board/del', 'App\Http\Controllers\BoardController@delete');
Route::post('board/del', 'App\Http\Controllers\BoardController@remove');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');