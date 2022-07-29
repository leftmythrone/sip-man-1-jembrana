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
Route::get('/', [LoginController::class, 'index']);

// Authenticate
Route::post('/login', [LoginController::class, 'authenticate']);

// Logout
Route::get('/logout', [LoginController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| Web Dashboard Management
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/dashboard', [DashboardController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Web Department Management
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [DashboardController::class, 'index']);


/*
|--------------------------------------------------------------------------
| Web Classroom Management
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Web Subject Management
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Web Teacher Management
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Web Range Management
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Web Special Management
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Web Schedule Management
|--------------------------------------------------------------------------
*/