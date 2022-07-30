<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes Controller - Sistem Informasi Penjadwalan
| Name  : Muhammad Risqiwahid 
| NIM   : 18410100227
|--------------------------------------------------------------------------
| Here is where you can register web controllers for your application.
|
*/

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RangeController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\ScheduleController;




Route::get('/laravel', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Web Login Management
|--------------------------------------------------------------------------
*/

// Getting Started Page
Route::get('/', [LoginController::class, 'index'])->name('login');

// Authenticate
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

// Logout
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Web Dashboard Management
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Web Department Management
|--------------------------------------------------------------------------
*/

Route::get('/jurusan', [DepartmentController::class, 'index'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Web Classroom Management
|--------------------------------------------------------------------------
*/

Route::get('/kelas', [ClassroomController::class, 'index'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Web Subject Management
|--------------------------------------------------------------------------
*/

Route::get('/mapel', [SubjectController::class, 'index'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Web Teacher Management
|--------------------------------------------------------------------------
*/

Route::get('/guru', [TeacherController::class, 'index'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Web Range Management
|--------------------------------------------------------------------------
*/

Route::get('/jadwal', [ScheduleController::class, 'index'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Web Special Management
|--------------------------------------------------------------------------
*/

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Web Schedule Management
|--------------------------------------------------------------------------
*/

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
