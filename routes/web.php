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
    return view('welcome');    
});

Route::get('/minichat', function () {
    $messages = DB::table('minichat')->get();
    return view('minichat' , compact('messages'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/folio', function () {
    return view('folio');
});
