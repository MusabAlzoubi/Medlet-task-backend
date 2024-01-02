<?php

use Illuminate\Support\Facades\Route;

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
});

// routes/web.php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\AdminUserController;

Route::middleware(['auth', 'role:admin'])->group(function () {
});
Route::resource('adminusers', AdminUserController::class);


Route::middleware(['auth', 'role:instructor'])->group(function () {
    // تحديد الطرق التي يمكن الوصول إليها فقط بواسطة المعلمين
});

Route::middleware(['auth', 'role:student'])->group(function () {
    // تحديد الطرق التي يمكن الوصول إليها فقط بواسطة الطلاب
});

// Resourceful routes for courses
Route::resource('courses', CourseController::class);