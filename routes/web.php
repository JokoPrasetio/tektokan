<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::get('/login', [UserController::class, 'Login'])->middleware('guest')->name('login');
Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/register', [UserController::class, 'AuthenticateRegister']);
Route::post('/login', [UserController::class, 'AuthenticateLogin']);

Route::middleware(['auth'])->group(function(){
    Route::get('/', [UserController::class, 'indexUser']);
    Route::get('/datatable-user', [UserController::class, 'DatatableUser']);

    Route::resource('/message', MessageController::class);
    Route::get('/datatable-message', [MessageController::class, 'datatableMessage']);

    Route::post('/logout', [UserController::class, 'logout']);
});
