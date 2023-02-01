<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = ['departamento_id','empresa_id','nombre','apellido'];

    public function departamento(){
        return $this->belongsto(Departamento::class);
    }

    public function empresa()
    {
        return $this->belongsto(Empresa::class);
    }

    public function equipo_asignado(){
        return $this->HasMany(Equipo_asignado::class);
    }
}
