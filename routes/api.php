<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kategori', [KategoriControllerApi::class, 'kategori']);
Route::get('/wilayah', [WilayahControllerApi::class, 'wilayah']);
Route::get('/destinasi', [DestinasiControllerApi::class, 'destinasi']);

Route::get('/destinasi/{destinasi}', [DestinasiControllerApi::class, 'destinasiDetail']);
Route::get('/destinasi/kategori/{kategori}', [DestinasiControllerApi::class, 'destinasiKategori']);