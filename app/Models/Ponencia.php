<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ponencia extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'evento',
        'fecha_evento',
        
       
    ];
}
