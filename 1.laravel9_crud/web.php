<?php

use App\Http\Controllers\StudentController;
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
    return view('welcome');
});
Route::get('student-list', [StudentController::class,'index']);
Route::get('addstudent', [StudentController::class,'addstudent']);
Route::post('save_student', [StudentController::class,'savestudent']);
Route::get('edit/{id}', [StudentController::class,'edit']);
Route::post('update_student', [StudentController::class,'update']);
Route::get('delete/{id}', [StudentController::class,'delete']);