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
    return view('home');
});

<<<<<<< HEAD
Route::get('/page3', function(){
    return view('page3');
=======
Route::get('/projects', function () {
    return view('layouts.projects');
>>>>>>> ad4fc5819634349042e31e3d384d1191c8e05c72
});