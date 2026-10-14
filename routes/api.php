<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BukuController as ApiPemesananController;


Route::apiResource('buku', ApiBukuController::class)->names('api.menus');
Route::get('/rekap/peminjaman-per-menu', [ApiBukuController::class, 'rekapPemesananPerMenu']);
