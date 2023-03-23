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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);


Route::get('/users', [\App\Http\Controllers\AdminController::class, 'user']);
Route::get('/deleteuser/{id}', [\App\Http\Controllers\AdminController::class, 'deleteuser']);

Route::get('/redirects', [\App\Http\Controllers\HomeController::class, 'redirects']);

Route::get('/foodmenu', [\App\Http\Controllers\AdminController::class, 'foodmenu']);

Route::post('/uploadfood', [\App\Http\Controllers\AdminController::class, 'upload']);

Route::get('/deletemenu/{id}', [\App\Http\Controllers\AdminController::class, 'deletemenu']);
Route::post('/update/{id}', [\App\Http\Controllers\AdminController::class, 'update']);
Route::get('/updatemenu/{id}', [\App\Http\Controllers\AdminController::class, 'updatemenu']);

Route::post('/reservation', [\App\Http\Controllers\AdminController::class, 'reservation']);
Route::get('/admreservation', [\App\Http\Controllers\AdminController::class, 'admreservation']);

Route::get('/admchef', [\App\Http\Controllers\AdminController::class, 'admchef']);
Route::post('/uploadchef', [\App\Http\Controllers\AdminController::class, 'uploadchef']);
Route::get('/updatechef/{id}', [\App\Http\Controllers\AdminController::class, 'updatechef']);
Route::post('/updatefoodchef/{id}', [\App\Http\Controllers\AdminController::class, 'updatefoodchef']);
Route::get('/deletechef/{id}', [\App\Http\Controllers\AdminController::class, 'deletechef']);





