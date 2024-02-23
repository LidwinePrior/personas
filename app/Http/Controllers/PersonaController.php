<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all(); // Récupère tous les personas depuis la base de données
        return view('personas.index', compact('personas')); // Affiche la vue index avec les personas
    }
}
