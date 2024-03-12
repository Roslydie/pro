<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class listeController extends Controller
{
    public function liste()
    {
      
         return view('liste');
    }
    public function index()
    {
        $utilisateurs = Utilisateur::all(); // Supposant que vous récupérez tous les utilisateurs

        // Passez les utilisateurs à la vue
        return view('liste', ['utilisateurs' => $utilisateurs]);
    }
}
