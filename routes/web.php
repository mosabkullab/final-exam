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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', function () {
//     return view ('home_pages');
// });

Route::get('Products','ProductController@index');
Route::get('create_Products','ProductController@create');




Route::get('Categories','CategorieController@index');
Route::get('create_Categories','CategorieController@create');



Route::get('create_order','OrderController@create');
Route::get('create_order','OrderController@show');






