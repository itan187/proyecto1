<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "client"; 

    protected $fillable = ['nameClient', 'abreviation', 'direction', 'tel', 'email', 'cotizacion']; 

    public $timestamps = false;

    protected $primaryKey = 'idclient';  

}
