<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = "factura"; 

    protected $fillable = ['archivofact']; 

    public $timestamps = false; 

    protected $primaryKey = 'idfactura';  
}
