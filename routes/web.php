<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\Admin;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/create',[ReportController::class,'create'])->name('reports.create');
    Route::get('/store',[ReportController::class,'store'])->name('reports.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/',[ReportController::class,'index'])->middleware(['auth','verified'])->name('dashboard');

Route::get('array',   [MainController::class,   'showArray'])->name('array');

Route::get('/reports', [ReportController::class, 'index']);


Route::get('/main', [MainController::class, 'main']);
Route::delete('/reports/{report}',[ReportController::class,'destroy'])->name('reports.destroy');
Route::post('/reports',[ReportController::class,'store'])->name('reports.store');
Route::get('/reports/{report}', [ReportController::class, 'show'])->name('reports.show');
Route::put('/reports/{report}',[ReportController::class,'update'])->name('reports.update');

Route::middleware((Admin::class))->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index'); // Изменение
    Route::patch('/update',[ReportController::class,'update'])->name('report.update');
});