<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orden_trabajo extends Model
{
    use HasFactory;

    protected $fillabel = ['tecnico_id','tipmantenimiento_id','equasignado_id','fecha_ingreso','fecha_salida','anomalias','trabajos','estado'];

    public function tecnicos(){
        return $this->belongsto(Tecnico::class);
    }

    public function tipomantenimiento(){
        return $this->belongsto(Tipomantenimiento::class);
    }

    public function equipo_asignado(){
        return$this->belongsto(Equipo_asignado::class);
    }
}
