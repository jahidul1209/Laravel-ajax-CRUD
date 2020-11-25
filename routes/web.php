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

Route::get('/', function () {
    return view('post');
});
Route::resource('post' ,'PostController');
Route::get('/allpost', 'PostController@AllPost')->name('allposts');
Route::get('/email',  function () {
    return view('mail');
    });