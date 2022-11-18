<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;

Route::get('/', [ImcController::class, 'renderForm']);
Route::post('/calcular', [ImcController::class, 'calcular']);
