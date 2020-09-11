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
date_default_timezone_set('Asia/Taipei');

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeesController@index');

Route::resource('employees', 'EmployeesController');
