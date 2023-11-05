<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capitulom extends Model
{
    use HasFactory;
    protected $table = 'capituloms';
    protected $fillable = [ 
        'congreso',
        'estado_region',
        'ciudad',
        'revision',
        'pagina_inicio',
        'pagina_fin',
        'isbn',
        'issn',
    ];

}
