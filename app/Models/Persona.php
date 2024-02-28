<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', // Nom du persona
        'age', //age du persona
        'post', //poste du persona
        'description', // Description du persona
        'photo',
    ];

    // Méthode pour récupérer tous les personas
    public static function getAllPersonas()
    {
        return self::all();
    }
}
