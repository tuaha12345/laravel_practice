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

Route::get('/index',[StudentController::class,'index']);
Route::get('/show/{id}',[StudentController::class,'show']);
Route::get('/create',[StudentController::class,'create']);
Route::post('/store',[StudentController::class,'store']);
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::post('/update/{id}',[StudentController::class,'update']);
Route::delete('/destroy/{id}',[StudentController::class,'destroy']);
