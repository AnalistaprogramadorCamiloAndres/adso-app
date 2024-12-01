<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoControllers extends Controller

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
$empleados = Empleado::create([
        'NOMBRES' => $request->NOMBRES,
        'APELLIDOS' => $request->APELLIDOS,
        'CARGO' => $request->CARGO,
        'TELEFONO' => $request->TELEFONO,
        'CORREO_ELECTRONICO' => $request->CORREO_ELECTRONICO,
        'DIRECCION' => $request->DIRECCION,
        'CEDULA_DE_CIUDADANIA' => $request->CEDULA_DE_CIUDADANIA,
        'ID_USUARIO_FK' => $request->ID_USUARIO_FK


    ]);
    return response()->json([
        'status' => '200',
        'message' => 'Guardado con exito',
        'data' => $empleados,
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
