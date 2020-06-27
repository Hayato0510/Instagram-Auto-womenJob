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

// Instagram Auto集客 - 女性求人訴求
Route::get('job', function () {
    return view('instagram.jobs');
});

// Instagram Auto集客 - 女性求人訴求 - OS識別x遷移
Route::get('os', 'AdController@os');
