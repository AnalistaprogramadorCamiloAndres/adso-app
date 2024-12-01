<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    use HasFactory;

    protected $table = 'facturacion';

    protected $fillable = [    
       
        'ID_FACTURA',
        'FACTURA_FECHA',
        'TOTAL_DE_LA_FACTURA',
        'METODO_DE_PAGO',
        'ID_PRODUCTO',
        'ID_CLIENTE'
    
    ];
    public $timestamps = false;
}
