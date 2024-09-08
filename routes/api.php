<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Empleado;
use App\Http\Controllers\EnvioDeProductos;
use App\Http\Controllers\Facturacion;
use App\Http\Controllers\IngresoAlSistema;
use App\Http\Controllers\InspeccionDeCalidad;
use App\Http\Controllers\LoteDeProduccion;
use App\Http\Controllers\Producto;

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
Route::get('/api/cliente/', [ClienteController::class, 'getData']);
Route::put('/api/cliente/', [ClienteController::class, 'update']);
Route::post('/api/cliente/', [ClienteController::class, 'save']);
Route::delete('/api/cliente/', [ClienteController::class, 'delete']);

Route::get('/api/empleado/', [Empleado::class, 'getData']);
Route::put('/api/empleado/', [Empleado::class, 'update']);
Route::post('/api/empleado/', [Empleado::class, 'save']);
Route::delete('/api/empleado/', [Empleado::class, 'delete']);

Route::get('/api/enviodeproductos/', [EnvioDeProductos::class, 'getData']);
Route::put('/api/enviodeproductos/', [EnvioDeProductos::class, 'update']);
Route::post('/api/enviodeproductos/', [EnvioDeProductos::class, 'save']);
Route::delete('/api/enviodeproductos/', [EnvioDeProductos::class, 'delete']);

Route::get('/api/facturacion/', [Facturacion::class, 'getData']);
Route::put('/api/facturacion/', [Facturacion::class, 'update']);
Route::post('/api/facturacion/', [Facturacion::class, 'save']);
Route::delete('/api/facturacion/', [Facturacion::class, 'delete']);

Route::get('/api/ingresoalsistema/', [IngresoAlSistema::class, 'getData']);
Route::put('/api/ingresoalsistema/', [IngresoAlSistema::class, 'update']);
Route::post('/api/ingresoalsistema/', [IngresoAlSistema::class, 'save']);
Route::delete('/api/ingresoalsistema/', [IngresoAlSistema::class, 'delete']);

Route::get('/api/inspecciondecalidad/', [InspeccionDeCalidad::class, 'getData']);
Route::put('/api/inspecciondecalidad/', [InspeccionDeCalidad::class, 'update']);
Route::post('/api/inspecciondecalidad/', [InspeccionDeCalidad::class, 'save']);
Route::delete('/api/inspecciondecalidad/', [InspeccionDeCalidad::class, 'delete']);

Route::get('/api/lotedeproduccion/', [LoteDeProduccion::class, 'getData']);
Route::put('/api/lotedeproduccion/', [LoteDeProduccion::class, 'update']);
Route::post('/api/lotedeproduccion/', [LoteDeProduccion::class, 'save']);
Route::delete('/api/lotedeproduccion/', [LoteDeProduccion::class, 'delete']);

Route::get('/api/producto/', [Producto::class, 'getData']);
Route::put('/api/producto/', [Producto::class, 'update']);
Route::post('/api/producto/', [Producto::class, 'save']);
Route::delete('/api/producto/', [Producto::class, 'delete']);