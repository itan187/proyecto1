<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = "archivos"; 

    protected $fillable = ['nombre', 'ruta']; 

    public $timestamps = false; 

    protected $primaryKey = 'id_archivo';  
}
