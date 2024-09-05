<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
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


// Route to register a new user 
 // Assuming ClienteController is in the App\Http\Controllers namespace
Route::get('/api/clientes/', [ClienteController::class, 'getData']);
Route::put('/api/clientes/', [ClienteController::class, 'update']);
Route::post('/api/clientes/', [ClienteController::class, 'save']);
Route::delete('/api/clientes/', [ClienteController::class, 'delete']);
