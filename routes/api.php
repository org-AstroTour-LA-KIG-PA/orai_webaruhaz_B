<?php

use App\Http\Controllers\KosarController;
use App\Http\Controllers\TermekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/termek', [TermekController::class, 'termekLista']);
Route::get('/kosar', [KosarController::class, 'kosarLista']);
