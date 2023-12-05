<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TenanController;
use App\Http\Controllers\NotaController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


//Route::get('/tenan', [TenanController::class, 'index']);
Route::prefix('tenan')->group(function () {
    Route::get('/', [TenanController::class, 'index'])->name('tenans.index');;
    Route::get('/{id}', [TenanController::class, 'show'])->name('tenans.show');
    Route::post('/', [TenanController::class, 'store']);
    Route::put('/{id}', [TenanController::class, 'update'])->name('tenans.edit');;
    Route::delete('/{id}', [TenanController::class, 'destroy'])->name('tenans.destroy');
});
Route::get('/tenan/create', [TenanController::class, 'create'])->name('tenans.create');

Route::get('/kasir', [KasirController::class, 'index']);

Route::prefix('barang')->group(function () {
    Route::get('/', [BarangController::class, 'index']);
    Route::get('/{id}', [BarangController::class, 'show']);
    Route::post('/', [BarangController::class, 'store']);
    Route::put('/{id}', [BarangController::class, 'update']);
    Route::delete('/{id}', [BarangController::class, 'destroy']);
});

Route::get('/transaksi', [NotaController::class, 'index']);
Route::get('/struk/{kodeNota}', [NotaController::class, 'showStruk']);