<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[FileController::class,"index"])->name("homepage");
Route::post("/insert",[FileController::class,"store"])->name("insert");
