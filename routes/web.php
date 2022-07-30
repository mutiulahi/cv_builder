<?php

use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Route::get('/register', [Register::class, 'index'])->name('register');
Route::post('/register', [Register::class, 'register_action']);

Route::get('/login', [Login::class, 'index'])->name('login');
Route::post('/login', [Login::class, 'login_action']);

//logout
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
});

// Dashboard
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/user_profile', [Dashboard::class, 'user_profile_index'])->name('user_profile')->middleware('auth');
Route::post('/dashboard/user_profile', [Dashboard::class, 'update_user_profile'])->middleware('auth');
Route::post('/dashboard/user_password', [Dashboard::class, 'update_user_profile_password'])->name('user_password')->middleware('auth');

// cv edit
Route::get('/dashboard/cv_edit', [Dashboard::class, 'cv_edit_index'])->name('cv_edit')->middleware('auth');