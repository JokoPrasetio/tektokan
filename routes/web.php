<?php

use App\Events\HelperEvent;
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

    Route::get('/message-out', [MessageController::class, 'messageOut']);
    Route::get('/datatable-message-out', [MessageController::class, 'datatableMessageOut']);
    Route::get('/datatable-message-in', [MessageController::class, 'datatableMessageIn']);

    Route::post('/logout', [UserController::class, 'logout']);
});

Route::get('/send-event', function(){
    $text = "hello joko";
    broadcast(new HelperEvent($text));
});
