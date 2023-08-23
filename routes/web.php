<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/',[AdminController::class, 'index'])->name('login');
Route::post('/',[AdminController::class, 'login']);
Route::post('/logout',[AdminController::class, 'logout']);

 
Route::group(['middleware' => 'prevent-back-history'],function(){

Route::get('/registration',[AdminController::class, 'display'])->name('add user');;
Route::post('/registration',[AdminController::class, 'store']);
Route::get('/list',[AdminController::class, 'list'])->name('user list');
Route::get('/edit/{user}',[AdminController::class, 'data']);
Route::put('/edit/{user}',[AdminController::class, 'edit']);
Route::delete('/delete/{user}', [AdminController::class, 'destroy']);

Route::controller(StudentController::class)->group(function()
    {
        Route::get('/student', 'display');
        Route::post('/student','store');
        Route::get('/display','list')->name('dashboard');
        Route::get('{student}','show')->name('add student');
        Route::put('{student}','edit');
        Route::delete('{student}','destroy');
    });
});
    // Route::get('/student', [StudentController::class,'display']);
    // Route::post('/student',[StudentController::class,'store']);
    // Route::get('/display',[StudentController::class,'list']);
    // Route::get('{student}',[StudentController::class,'show']);
    // Route::put('{student}',[StudentController::class,'edit']);
    // Route::delete('{student}',[StudentController::class],'destroy');
 







