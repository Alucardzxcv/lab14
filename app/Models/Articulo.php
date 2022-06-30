<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Articulo extends Eloquent
{
    use HasFactory;

    public function categorias()
    {
        return $this -> belongsTo(categoria::class,'categoria_id','_id');
    }
}
