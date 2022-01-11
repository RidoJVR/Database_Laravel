<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class automoviles extends Model
{
    protected $fillable = ['placas', 'numero_cilindros','numero_nn','kilometraje','anio'];
    use HasFactory;
}
