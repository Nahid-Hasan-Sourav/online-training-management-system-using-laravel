<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about-us',[HomeController::class,'about'])->name('about');
Route::get('/training-category',[HomeController::class,'trainingCategory'])->name('training-category');
Route::get('/all-training',[HomeController::class,'allTraining'])->name('all-training');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/login-registration',[HomeController::class,'auth'])->name('login-registration');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/teacher/add',[TeacherController::class,'index'])->name('teacher.add');
    Route::get('/teacher/manage',[TeacherController::class,'manage'])->name('teacher.manage');
    Route::post('/teacher/create',[TeacherController::class,'createTeacher'])->name('teacher.create');
    Route::get('/teacher/edit/{id}',[TeacherController::class,'editTeacher'])->name('teacher.edit');
    Route::post('/teacher/update/{id}',[TeacherController::class,'updateTeacher'])->name('teacher.update');
    Route::get('/teacher/delete/{id}',[TeacherController::class,'delete'])->name('teacher.delete');
});
