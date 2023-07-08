<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\ReceptionistController;
use App\Http\Controllers\Receptionist\EmployeeController;
use App\Http\Controllers\Receptionist\InvestorController;

Route::get('/', function(){
    return view('user.index');
});

Route::get('/room', function(){
    return view('user.room');
});

Route::get('/pesan', function(){
    return view('user.pesan_kamar');
});

Route::get('/cek', [UserController::class, 'cek_ketersediaan']);
Route::get('/cek/{id}', [UserController::class, 'cek_detail']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/landing', [LandingController::class, 'index']);

Route::middleware('login')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::middleware('admin')->group(function () {

        Route::prefix('/admin')->group(function () {
            Route::resource('/receptionist', ReceptionistController::class)->except(['show']);
            Route::resource('/state', StateController::class)->except(['show']);
            Route::get('/state/{id}/image', [StateController::class, 'imagePage']);
            Route::put('/state/{id}/image', [StateController::class, 'image']);
        });
    });

    Route::middleware('receptionist')->group(function () {

        Route::prefix('/receptionist')->group(function () {

            Route::resource('/investor', InvestorController::class)->except(['show']);
            Route::resource('/investor/{investor_id}/employee', EmployeeController::class)->except(['show']);
            Route::get('/investor/{investor_id}/employee/{id}/vaccine', [EmployeeController::class, 'vaccinePage']);
            Route::put('/investor/{investor_id}/employee/{id}/vaccine', [EmployeeController::class, 'vaccine']);
        });
    });
});
