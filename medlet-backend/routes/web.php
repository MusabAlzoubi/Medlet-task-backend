<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\AdminUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'create'])->name('register');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


// Auth
Route::middleware(['auth'])->group(function () {
    // Show user profile
    Route::get('/user/profile', [UserController::class, 'showProfile'])->name('user.profile');
    // Update user profile
    Route::put('/user/update-profile', [UserController::class, 'updateProfile'])->name('user.update-profile');
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

});




// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('courses', CourseController::class);
    Route::resource('adminusers', AdminUserController::class);

});

// Instructor
Route::middleware(['auth', 'role:instructor'])->group(function () {

    Route::resource('courses', CourseController::class);

});



