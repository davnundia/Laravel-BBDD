<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastel_model extends Model
{
    use HasFactory;

    protected $table = [
        'nombre',
        'sabor',
        'imagen'
    ];
}
