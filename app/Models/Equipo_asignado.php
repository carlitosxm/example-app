<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo_asignado extends Model
{
    use HasFactory;

    protected $fillable = ['equipo_id','personal_id','empresa_id','sn','imei','programas','novedades','fecha_entrega'];

    public function orden_trabajo(){
        return $this->HasMany(Orden_trabajo::class);
    }

    public function equipo(){
        return $this->belongsto(Equipo::class);
    }

    public function personal(){
        return $this->belongsto(Personal::class);
    }

    public function empresa(){
        return $this->belongsto(Empresa::class);
    }
}
