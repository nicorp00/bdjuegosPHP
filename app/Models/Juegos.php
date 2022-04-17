<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    use HasFactory;
    
    public $fillable = ['id','nombre','plataformas','anlanzamiento','genero','created_at','updated_at'];
}
