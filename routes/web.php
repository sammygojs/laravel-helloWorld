<?php

use app\Http\Controllers\helloWorldController;
use app\Http\Controllers\projectController;
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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/hello_world','helloWorldController@hello_world');

// Route::get('/', [projectController::class, 'getData']);
Route::get('/','projectController@getData');