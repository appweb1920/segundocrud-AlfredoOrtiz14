<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class piezas extends Model
{
    protected $table="piezas";
    protected $fillable = ['nombre', 'descripcion', 'cantidad', 'costo'];
}
