<?php

use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\ResumeController;
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
})->name('home');

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
Route::get('/dashboard/user-profile', [Dashboard::class, 'user_profile_index'])->name('user_profile')->middleware('auth');
Route::post('/dashboard/user-profile', [Dashboard::class, 'update_user_profile'])->middleware('auth');
Route::post('/dashboard/user-password', [Dashboard::class, 'update_user_profile_password'])->name('user_password')->middleware('auth');
Route::get('/dashboard/resume-cv', [Dashboard::class, 'resume_cv'])->name('resume_cv')->middleware('auth');

// cv create
Route::get('/dashboard/create-cv', [ResumeController::class, 'cv_create_index'])->name('create_cv')->middleware('auth');
Route::post('/dashboard/create-cv', [ResumeController::class, 'cv_create_action'])->middleware('auth');

// cv edit
Route::get('/dashboard/edit-cv/{id}', [ResumeController::class, 'cv_edit_index'])->name('edit_cv')->middleware('auth');
Route::post('/dashboard/edit-cv/{id}', [ResumeController::class, 'cv_edit_action'])->middleware('auth');

// cv template
Route::get('/dashboard/cv-template', [ResumeController::class, 'cv_template_1'])->name('cv_template')->middleware('auth');

