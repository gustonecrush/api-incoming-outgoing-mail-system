<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\PeminjamanArsipController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('surat-masuk', SuratMasukController::class);
Route::resource('surat-keluar', SuratKeluarController::class);
Route::resource('peminjaman-arsip', PeminjamanArsipController::class, [
    'except' => ['create'],
]);

Route::post('peminjaman-arsip/{peminjaman_arsip:id}', [PeminjamanArsipController::class, "updateById"]);
Route::post('surat-masuk/{surat_masuk:id}', [SuratMasukController::class, 'updateById']);
Route::post('surat-keluar/{surat_keluar:id}', [SuratKeluarController::class, 'updateById']);

Route::get('surat-masuk/download/{surat_masuk:id}', [SuratMasukController::class, 'download']);
Route::get('surat-keluar/download/{surat_keluar:id}', [SuratKeluarController::class, 'download']);