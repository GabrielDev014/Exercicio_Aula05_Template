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

Route::get('/', function(){
    return view('layout_adm.index');
});

Route::get('/area1', function(){
    return view('area1');
});

Route::get('/area2', function(){
    return view('area2');
});

Route::get('/area3', function(){
    return view('area3');
});

Route::get('/area4', function(){
    return view('area4');
});

Route::get('/area5', function(){
    return view('area5');
});