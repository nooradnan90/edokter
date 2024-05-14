<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
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
Route::post('register', [LoginController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::get('tampilPasien', [PasienController::class, 'tampilPasien'])->middleware(['auth:sanctum']);
Route::get('tampilObat', [PasienController::class, 'tampilObat']);
Route::get('tampilAturanPakai', [PasienController::class, 'tampilAturanPakai']);
Route::post('tambahObat', [PasienController::class, 'tambahObat'])->middleware(['auth:sanctum']);;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
