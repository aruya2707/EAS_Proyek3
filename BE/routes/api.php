<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\TenanController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tenan', [TenanController::class, 'index']);

Route::get('/kasir', [KasirController::class, 'index']);

// Route::get('/barang', [BarangController::class, 'index']);
// Route::post('/barang/insert', [BarangController::class, 'store']);
// Route::get('/barang/{kode_barang}', [BarangController::class, 'show']);
// Route::put('/barang/update/{kode_barang}', [BarangController::class, 'update']);
// Route::delete('/barang/delete/{kode_barang}', [BarangController::class, 'destroy']);