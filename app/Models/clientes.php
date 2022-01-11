<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = ['nombre', 'primer_apellido','segundo_apellido','numero_celular','correo_electronico','sexo'];
    use HasFactory;
}
