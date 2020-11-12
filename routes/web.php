<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\Http\Controllers\ArticlesCaontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::post('/postEditOrder', array('as' => 'post_edit_order','uses' => 'ArticlesCaontroller@store'));

Route::get('/articles', 'App\Http\Controllers\ArticlesCaontroller@index');
Route::get('/articles/create','App\Http\Controllers\ArticlesCaontroller@create');
Route::post('/articles','App\Http\Controllers\ArticlesCaontroller@store');
Route::get('/articles/{articles}','App\Http\Controllers\ArticlesCaontroller@show');
Route::get('/articles/{articles}/edit','App\Http\Controllers\ArticlesCaontroller@edit');
Route::put('/articles/{articles}','App\Http\Controllers\ArticlesCaontroller@update');
Route::delete('/articles/{articles}','App\Http\Controllers\ArticlesCaontroller@destroy');