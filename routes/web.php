<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controller\HomeController;
use app\Http\Controller\AdminController;


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


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);


Route::get('/users', [\App\Http\Controllers\AdminController::class, 'user']);
Route::get('/deleteuser/{id}', [\App\Http\Controllers\AdminController::class, 'deleteuser']);

Route::get('/redirects', [\App\Http\Controllers\HomeController::class, 'redirects']);

Route::get('/foodmenu', [\App\Http\Controllers\AdminController::class, 'foodmenu']);

Route::post('/uploadfood', [\App\Http\Controllers\AdminController::class, 'upload']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
