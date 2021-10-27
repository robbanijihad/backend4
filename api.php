<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Method Get
Route::get("/animal", [AnimalController::class, "index"]);
// Method post
Route::post("/animal", [AnimalController::class,"simpan"]);
// Method put
Route::put("/animal/{id}", [AnimalController::class, "ubah"]);
// Method delete
Route::delete("/animal/{id}", [AnimalController::class, "hapus"]);
// Routing untuk student
Route::get("/student", [StudentController::class, 'index']);