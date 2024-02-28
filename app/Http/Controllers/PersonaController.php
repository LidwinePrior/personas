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
        // Récupérer tous les personas à partir du modèle
        $personas = Persona::getAllPersonas();

        // Passer les données récupérées à la vue
        return view('personas.index', compact('personas')); // Affiche la vue index avec les personas
    }


    public function show($id)
    {
        // dd($id); 

        //findOrfail méthode laravel qui renvoit un 404 
        $persona = persona::findOrfail($id);

        //première méthode mais longue pour renvoyer une erreur
        //si pas d'id trouvé return erreur 404
        // if ($persona === null) {
        //     abort(404);
        // };



        return view('personas.persona', [
            'persona' => $persona
        ]);
    }
}
