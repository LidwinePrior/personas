<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Crée un nouvel utilisateur avec le rôle par défaut "user".
     *
     * @param  array  $userData
     * @return \App\Models\User
     */
    public function createUser(array $userData)
    {
        // Créer un nouvel utilisateur
        $user = User::create($userData);

        // Attribuer le rôle par défaut "user" à l'utilisateur
        $user->assignRole('user');

        return $user;
    }
}
