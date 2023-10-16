<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\CadastrosController;


Route::get('/', [LayoutController::class, 'index'])->name('index');
Route::post('/create',[CadastrosController::class, 'create']);
Route::get('/',[CadastrosController::class, 'show']);
Route::delete('/cadastros/{id}',[CadastrosController::class, 'destroy']);
Route::put('/cadastros/{id}',[CadastrosController::class, 'update']);
Route::get('/cadastros/{id}',[CadastrosController::class, 'get']);