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
    return view('welcome');
});

Route::get('/bible-study-requests', 'App\Http\Controllers\BsController@tablelists');
Route::get('/bible-study-request-form', 'App\Http\Controllers\BsController@reqformsessions');
Route::post('/bible-study-create-form', 'App\Http\Controllers\BsController@createform');
Route::get('/thank-you', 'App\Http\Controllers\BsController@thankyou');


