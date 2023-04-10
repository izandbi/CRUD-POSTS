<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','fecha', 'recinto_id', 'descripcion', 'precio', 'aforo','imagen_id'];
}
