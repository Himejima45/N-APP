<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'genero', 'partes_cuerpos_id'];

    public function cuerpo()
    {
        return $this->hasOne(PartesCuerpo::class, 'id', 'partes_cuerpos_id');
    }
}
