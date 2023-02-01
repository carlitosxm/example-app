<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $fillable = ['chirp_id','name','apellido','fecha'];

    public function chirp()
    {
        return $this->belongsto(Chirp::class);
    }


}
