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

Route::get('/', function () {
    return view('welcome');
});


Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('github-login');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback')->name('github-login-callback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
