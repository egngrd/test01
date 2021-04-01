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
Route::redirect('/', 'register')->name('home');

Route::view('/register', 'pages.auth.register')->name('register');
Route::post('/register', 'Auth\\RegisterController@store')->name('register.store');

Route::view('/login', 'pages.auth.login')->name('login');
Route::post('/login', 'Auth\\LoginController@store')->name('login.store');


Route::get('/logout', function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('home');
});



Route::get('/profile', function (){

    return "Helo " . \Illuminate\Support\Facades\Auth::user()->email;

})->middleware('auth')->name('profile');
