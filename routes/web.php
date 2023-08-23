<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::get('/',[AdminController::class, 'index']);
Route::post('/',[AdminController::class, 'login']);
Route::post('/logout',[AdminController::class, 'logout']);



Route::get('/dashboard',[AdminController::class, 'dashboard']);

Route::get('/registration',[AdminController::class, 'display']);
Route::post('/registration',[AdminController::class, 'store']);
Route::get('/list',[AdminController::class, 'list']);

// Route::get('edit/{user}',[AdminController::class, 'data']);
// Route::put('{user}',[AdminController::class, 'edit']);

Route::get('/student', [StudentController::class, 'display']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/display', [StudentController::class, 'list']);
Route::get('{student}', [StudentController::class, 'show']);
Route::put('{student}', [StudentController::class, 'edit']);
Route::delete('{student}', [StudentController::class, 'destroy']);






