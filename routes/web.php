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

Route::get('/', 'GovernmentController@index');

Route::get('/projects/proposed-mandaue-sports-center', 'GovernmentController@page3');

Route::get('/projects', 'GovernmentController@show');

Route::get('/applybid', 'GovernmentController@bidding');

Route::get('/bid-opportunities', 'GovernmentController@bidOpportunity');

Route::get('/projects/bid-details', 'GovernmentController@bidDetails');
