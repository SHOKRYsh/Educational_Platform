<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);


Route::get('/accounts',[AdminController::class,'create_account']);
Route::post('/accounts',[AdminController::class,'store_account'])->name('accounts.store');
Route::get('/department',[AdminController::class,'create_dept']);
Route::post('/department',[AdminController::class,'store_dept'])->name('depts.store');

Route::get('/subject',[AdminController::class,'create_subject']);
Route::post('/subject',[AdminController::class,'store_subject'])->name('subjects.store');

Route::get('/abscence',[AdminController::class,'showAbsence']);
Route::get('/abscence/{subject_code}',[AdminController::class,'showAbsenceSubjectCode']);


Route::get('/doctor',[DoctorController::class,'index'])->name('doctor.list');
Route::get('/doctor/lecture/{subject_name}',[DoctorController::class,'store'])->name('lecture');
Route::post('/doctor', [DoctorController::class, 'save']);


Route::get('/student',[StudentController::class,'index'])->name('student.list');
Route::get('/student/{subject_code}', [StudentController::class, 'add']);
Route::get('/student/delete/{subject_code}', [StudentController::class, 'destroy']);

Route::get('/studentt/showUserSubjects', [StudentController::class, 'showUserSubjects']);
Route::get('/studentt/showSubjectLectures/{subject_name}', [StudentController::class, 'showSubjectLectures']);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
