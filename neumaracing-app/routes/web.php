<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutomovilController;
use App\Http\Controllers\SuvCrossoverController;
use App\Http\Controllers\CamionetasController;
use App\Http\Controllers\VansController;


Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/automovil', [AutomovilController::class, 'index'])->name('automovil.index');
Route::get('/suvcrossover', [SuvCrossoverController::class, 'index'])->name('suvcrossover.index');
Route::get('/camionetas', [CamionetasController::class, 'index'])->name('camionetas.index');
Route::get('/vans', [VansController::class, 'index'])->name('vans.index');
