<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subir extends Model
{
    use HasFactory;

    protected $table = 'subir';

    protected $fillable = [
        'nombre_original',
        'nombre'
    ];
}