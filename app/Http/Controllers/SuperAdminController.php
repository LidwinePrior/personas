<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    public function createSuperAdmin()
    {
        // Créez un nouvel utilisateur avec le rôle de super administrateur
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
        ]);

        // Récupérez l'ID du rôle super administrateur (assurez-vous que cela correspond à l'enregistrement dans votre table 'roles')
        $superAdminRoleId = Role::where('name', 'superAdmin')->value('id');

        // Associez le rôle de super administrateur à l'utilisateur
        $user->roles()->attach($superAdminRoleId);

        return 'Super admin created successfully.';
    }
}
