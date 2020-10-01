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

Auth::routes();

Route::get('/hello', function () {
    return view('hello', ['name' => 'Yoga']);
});

Route::get('/', 'HomeController');
Route::get('/article/{id}', 'ArticleController@article');

Route::get('/about', 'AboutController@about')->name('about');
Route::get('/child', 'child@child')->name('child');

Route::get('/master', 'master@master')->name('master');
Route::post('/article/{id}', 'ArticleController@insertData')->name('insertData');

