<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthAgreeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeAgreeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReturnedController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::prefix('agree')->group(function ()  {
    
    Route::get('login', [AuthAgreeController::class, 'login']);
    Route::get('register', [AuthAgreeController::class, 'showFormRegister']);
    Route::post('login', [AuthAgreeController::class, 'credentias']);
    Route::post('register', [AuthAgreeController::class, 'createAccount']);
    Route::middleware(['auth', 'agree'])->group(function () {
        Route::get('logout', [AuthAgreeController::class, 'logout']);
        Route::get('dashboard', [HomeAgreeController::class, 'index']);
        Route::get('approval', [ApprovalController::class, 'index']);
        Route::get('approval/{approval}', [ApprovalController::class, 'approve']);
        Route::get('approval/rejected/{approval}', [ApprovalController::class, 'rejected']);
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix("admin")->middleware(['admin', 'auth'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'show']);
    Route::resource('vehicle', VehicleController::class);
    Route::resource('booking', BookingController::class);
    Route::resource('returned', ReturnedController::class);
    Route::get('find', [APIController::class, 'find']);
});