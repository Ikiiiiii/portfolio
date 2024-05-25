<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

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


Route::get('register', function () {
    return view('register');
});

Route::get('login', [UserController::class,'login'])->name('login')->middleware('guest');
Route::post('auth', [UserController::class,'auth']);
Route::get('daftar', [UserController::class,'daftar'])->middleware('guest');
Route::post('daftar/create', [UserController::class,'create']);
Route::get('logout', [UserController::class,'logout']);

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'show'])->middleware('auth');
    Route::get('profile/add', [ProfileController::class, 'add']);
    Route::post('profile/create', [ProfileController::class, 'create']);
    Route::get('profile/edit/{id}', [ProfileController::class,'edit']);
    Route::post('profile/update/{id}', [ProfileController::class,'update']);
    Route::get('admin', function () {
        return view('admin');
    });
    Route::get('project', [ProjectController::class, 'show'])->middleware('auth');
    Route::get('project/add', [ProjectController::class, 'add']);
    Route::post('project/create', [ProjectController::class, 'create']);
    Route::get('project/delete/{id}', [ProjectController::class,'delete']);
    Route::get('project/edit/{id}', [ProjectController::class,'edit']);
    Route::post('project/update/{id}', [ProjectController::class,'update']);
    
    Route::get('contact', [ContactController::class,'show'])->middleware('auth');
    Route::get('contact/delete/{id}', [ContactController::class,'delete']); 
});
Route::post('contact/create', [ContactController::class,'create']);
Route::get('/', [ProfileController::class,'tampil']);
    

