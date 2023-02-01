<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable ['nombre','direccion'];

    public function personal(){
        return $this->HasMany(Personal::class);
    }

    public function equipo_asignado(){
        return $this->HasMany(Equipo_asignado::class);
    }
}
