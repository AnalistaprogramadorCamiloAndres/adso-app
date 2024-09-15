<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoControllers extends Controller
{
    public function getData (Request $request){
        return response()->json([
               'status' => '200',
               'message' => 'data..'
           ]);
              }
       /**    /**
     ** Store a newly created resource in storage.
     */
public function save(Request $request)
{
    $producto = producto::create([
        'ID_PRODUCTO' => $request->ID_PRODUCTO,
        'NOMBRE_PRODUCTO' => $request->NOMBRE_PRODUCTO,
        'DESCRIPCION' => $request->DESCRIPCION,
        'PRECIO' => $request->PRECIO,
        'STOCK_DISPONIBLE' => $request->STOCK_DISPONIBLE
    ]);
    return response()->json([
        'status' => '200',
        'message' => 'Guardado con exito',
        'data' => $producto
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return response() -> json([
            'status' => '200',
           'message' => 'Actualizado con exito',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(request $request)
    {
        return response() -> json([
            'status' => '200',
           'message' => 'Eliminado con exito',
        ]);
    }
}
