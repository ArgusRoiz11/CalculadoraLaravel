<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\ControladorCalculo;

Route::get('/', HomeController::class);
Route::get('calcular',[CalculadoraController::class,'index']);
Route::get('calcular/create',[CalculadoraController::class,'create']);
Route::get('calcular/{operacion}/{numero1}/{numero2}',[ControladorCalculo::class,'calcular']);
//Route::get('calcular/{operacion}/{numero1}/{numero2}','ControladorCalculo@calcular');
