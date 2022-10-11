<?php

use Illuminate\Support\Facades\Route;

// Login
Route::view('/login', 'livewire/components/register/login/login-option')->name('login-option');
Route::view('/login/login-password', 'livewire/components/register/login/login-password')->name('login-password');
Route::view('/login/profile-setup', 'livewire/components/register/login/profile-setup')->name('profile-setup');
Route::view('/login/login-forgot-password', 'livewire/components/register/login/login-forgot-password')->name('login-forgot-password');

// Signup
Route::view('/signup', 'livewire/components/register/signup/signup-option')->name('signup-option');
Route::view('/signup/create-account', 'livewire/components/register/signup/signup-new-account')->name('create-account');

// Dashboard
Route::view('/dashboard', 'livewire/components/main/dashboard/dashboard-section1')->name('dashboard-section1');
Route::view('/dashboard/check-in', 'livewire/components/main/dashboard/check-in/check-in')->name('check-in');

// Employe List
Route::view('/manpower/employe-list', 'livewire/components/main/manpower/employe-list/employe-list-section1')->name('employe-list-section1');
Route::view('/manpower/employe-list/add-employee', 'livewire/components/main/manpower/employe-list/add-employee')->name('add-employee');
Route::view('/manpower/employe-list/new-employee', 'livewire/components/main/manpower/employe-list/new-employee-info')->name('new-employee-info');

// Schedules
Route::view('/manpower/schedules', 'livewire/components/main/manpower/schedules/schedules-section1')->name('schedules-section1');
// Route::view('/login-option', 'livewire/components/register/login/login-option')->name('login-option');
// Route::view('/', 'livewire/layouts/registration-base')->name('registration');
