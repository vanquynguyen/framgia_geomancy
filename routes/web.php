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
})->name('home');


Route::post('dang-nhap', 'Auth\AuthController@login')->name('login');
Route::get('dang-xuat', 'Auth\AuthController@logout')->name('logout');
Route::post('dang-ky', 'Auth\RegistrationController@store')->name('signup');
