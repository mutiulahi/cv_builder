<?php

use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\Dashboard;
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
    return view('index');
});

Route::get('/register', [Register::class, 'index'])->name('register');
Route::post('/register', [Register::class, 'register_action']);

Route::get('/login', [Login::class, 'index'])->name('login');
Route::post('/login', [Login::class, 'login_action']);


// Dashboard
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
Route::get('/dashboard/user_profile', [Dashboard::class, 'user_profile_index'])->name('user_profile');