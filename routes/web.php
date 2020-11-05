<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::get('/home', 'HomeController@index')->name('home')-> middleware('verified');

Route::get('/redirect/{service}', 'SocialeController@redirect');
Route::get('/callback/{service}', 'SocialeController@callback');

Route::get('/students','StudentsController@getStudents');

Route::group(['prefix' => 'categories'], function () {
    Route::get('/','CategoriesController@index');
    Route::get('create','CategoriesController@create');
    Route::post('store','CategoriesController@store');
});
