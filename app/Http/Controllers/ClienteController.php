<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente; // Asegúrate de importar el modelo Cliente
use Illuminate\Http\Request;

class ClienteController extends Controller

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
      
        // Crear un nuevo cliente con los datos del formulario
      $cliente = cliente::create([
          'NOMBRE' => $request->NOMBRE,
          'CORREO_ELECTRONICO' => $request->CORREO_ELECTRONICO,
          'CEDULA_DE_CIUDADANIA' => $request->CEDULA_DE_CIUDADANIA,
          'DIRECCION' => $request->DIRECCION
      ]);

        // Devolver la respuesta en formato JSON
        return response()->json([
           'status' => '200',
           'message' => 'Guardado con éxito',
           'data' => $cliente
        ]);
    }
   
public function update(Request $request)
{
    return response()->json([
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
