<?php

use Illuminate\Support\Facades\Route;

Route::view('/login', 'livewire/components/register/login/login-option')->name('login-option');
Route::view('/login/login-password', 'livewire/components/register/login/login-password')->name('login-password');
Route::view('/login/login-forgot-password', 'livewire/components/register/login/login-forgot-password')->name('login-forgot-password');
Route::view('/signup', 'livewire/components/register/signup/signup-option')->name('signup-option');
// Route::view('/login-option', 'livewire/components/register/login/login-option')->name('login-option');
// Route::view('/', 'livewire/layouts/registration-base')->name('registration');

// Route::get('/', function () {
//     return view('welcome');
// });
