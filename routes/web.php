<?php

use App\Http\Controllers\myController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('insertData', [myController::class,'insert']);
Route::get('/', [myController::class,'readData']);
// Route::view('update', 'updateView');
Route::get('updateDelete', [myController::class, 'updateOrDelete']);
Route::get('updateData', [myController::class, 'update']);