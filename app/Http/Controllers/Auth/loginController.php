<?php

namespace App\Http\Controllers\Auth;
use App\Models\Utilisateur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;


class loginController extends Controller
{
    public function showlogin()
    {
      
         return view('login');
    }
    public function validationlogin(Request $request)
    {
        // $credentials = $request->only('email', 'password');
        $credentials = $request->validate([
          'email' =>['required', 'email'],
          'passord' =>['required'],

        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Authentication successful
            return redirect()->intended('/affichage');
        }else{

        

        // Authentication failed
        return back()->withErrors(['email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.']);
    }
    }

  
}




