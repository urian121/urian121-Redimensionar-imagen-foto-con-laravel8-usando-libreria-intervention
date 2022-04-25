<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InmuebleController; 


Route::get('/',  [InmuebleController::class,'index'])->name('inicio');

Route::post('/inmueble',  [InmuebleController::class,'store'])->name('guardar');
