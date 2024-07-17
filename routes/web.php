<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/export-pdf', [App\Http\Controllers\HomeController::class, 'exportPdf'])->name('admin.export');
Route::get('/admin/form/{id?}', [App\Http\Controllers\HomeController::class, 'showForm'])->name('admin.form');
Route::post('/admin/store', [App\Http\Controllers\HomeController::class, 'store'])->name('admin.store');
Route::put('/admin/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('admin.update');
Route::delete('/admin/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('admin.destroy');
