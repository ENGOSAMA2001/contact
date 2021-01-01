<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ContactController::class, 'index']);
Route::get('contact',[ContactController::class, 'contact']);
Route::post('store',[ContactController::class, 'store']);

Route::get('delete/{contact}', [contactcontroller::class,'delete']);
Route::get('edit/{contact}', [contactcontroller::class,'edit']);
