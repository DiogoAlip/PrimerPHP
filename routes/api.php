<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LectorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\CategoriaController;

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

Route::get('autores',[AutorController::class,'index']);
Route::get('autores/{id}',[AutorController::class,'show']);
Route::post('autores',[AutorController::class,'store']);
Route::patch('autores/{id}',[AutorController::class,'update']);
Route::delete('autores/{id}',[AutorController::class,'destroy']);

Route::get('libros',[LibroController::class,'index']);
Route::get('libros/{id}',[LibroController::class,'show']);
Route::post('libros',[LibroController::class,'store']);
Route::patch('libros/{id}',[LibroController::class,'update']);
Route::delete('libros/{id}',[LibroController::class,'destroy']);

Route::get('lectores',[LectorController::class,'index']);
Route::get('lectores/{id}',[LectorController::class,'show']);
Route::post('lectores',[LectorController::class,'store']);
Route::patch('lectores/{id}',[LectorController::class,'update']);
Route::delete('lectores/{id}',[LectorController::class,'destroy']);

Route::get('categorias',[CategoriaController::class,'index']);
Route::get('categorias/{id}',[CategoriaController::class,'show']);
Route::post('categorias',[CategoriaController::class,'store']);
Route::patch('categorias/{id}',[CategoriaController::class,'update']);
Route::delete('categorias/{id}',[CategoriaController::class,'destroy']);

Route::get('prestamos',[PrestamoController::class,'index']);
Route::get('prestamos/{id}',[PrestamoController::class,'show']);
Route::post('prestamos',[PrestamoController::class,'store']);
Route::patch('prestamos/{id}',[PrestamoController::class,'update']);
Route::delete('prestamos/{id}',[PrestamoController::class,'destroy']);