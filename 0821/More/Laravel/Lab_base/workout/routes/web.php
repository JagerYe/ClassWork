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

use Illuminate\Support\Facades\Route;

Route::get('/', "LabController@index");
Route::get('/lab/show/{id}/{name}', "LabController@show");
Route::get('/lab/param', "LabController@param");
Route::get('/lab/form', "LabController@getForm");
Route::get('/lab/xml', "LabController@xml");
Route::get('/lab/memberOnly', "LabController@memberOnly");

Route::post('/lab/form/{id}', "LabController@postForm");

Route::resource(
    'data',
    'DataController',
    ['only' => ['index', 'destroy','show', 'create', 'update','store']]
);
