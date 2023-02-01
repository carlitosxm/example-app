<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address'];

    public function empleados()
    {

        return $this->HasMany(Empleados::class);
    }
}
