<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipomantenimiento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function Orden_trabajo(){
        return $this->HasMany(Orden_trabajo::class);
    }
}
