<?php

use App\Http\Controllers\CentroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('centro', [CentroController::class,"inicio"]);
Route::post('centro', [CentroController::class,"store"])->name("centro.store");
Route::get('centro/index', [CentroController::class, 'index'])->name('centro.index');
Route::get('centro/{id}', [CentroController::class, 'show'])->name('centro.show');
Route::put('centro/{id}', [CentroController::class, 'update'])->name('centro.update');
Route::delete('centro/{id}', [CentroController::class, 'destroy'])->name('centro.destroy');
Route::get('centro/{id}/edit', [CentroController::class, 'edit'])->name('centro.edit');
