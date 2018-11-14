<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    protected $table = "orden_de_compra"; 

    protected $fillable = ['archivoOrden', 'observations', 'status', 'client_idclient', 'nombreArchivoOrden']; 

    public $timestamps = false; 

    protected $primaryKey = 'idorden_de_compra';
}
