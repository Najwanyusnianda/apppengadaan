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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/test', 'SinglePageController@index');
Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');

/*
Auth::routes();


Route::get('/admin-login', 'Auth\AdminLoginController@showLoginForm');
Route::post('/admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);


//page
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function(){
    return view('layouts.adminApp');
})->name('home.admin');*/