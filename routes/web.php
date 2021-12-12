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

Route::get('/uploadFile', 'UploadfileController@index');
Route::post('/uploadFile', 'UploadfileController@upload');
Route::get('/main', 'MainController@index');
Route::post('/main/checkLogin', 'MainController@checklogin');
Route::get('main/successLogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
