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

Route::get('helloworld','Chinwhou\HelloWorld\HelloWorldController@index');
Route::get('hellow',function(){
    return view('helloworld::welcome');
});
