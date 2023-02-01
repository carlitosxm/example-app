<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['categoria_id','modelo','description','fecha_adquisicion'];

    public function categoria(){
        return $this->belongsto(Categorias::class);
    }

    public function equipo_asignado(){
        return$this->HasMany(Equipo_asignado::class);
    }
}
