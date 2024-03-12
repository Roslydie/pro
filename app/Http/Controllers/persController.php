<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;


class persController extends Controller
{
    public function inscriptionForm(){
        return view('perso');
    }
    public function traitement_log(Request $request){
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'email|required|unique:utilisateurs',
            'tel' => 'required|min:8',
            'prof' => 'required',
            'adresse' => 'required',
            'password' => 'required|min:8',
        ]);
        $utilisateurs = new Utilisateur();
        $utilisateurs->nom = $request->nom;
        $utilisateurs->prenom = $request->prenom;
        $utilisateurs->email = $request->email;
        $utilisateurs->tel = $request->tel;
        $utilisateurs->prof = $request->prof;
        $utilisateurs->adresse = $request->adresse;
        $utilisateurs->password = bcrypt($request->password);
        

        $utilisateurs->save();
       
        return redirect()->route('login')->with('success', 'utilisateur enregistré avec succès');
    }

    public function afficher(){
        return view('affichage');
    }
   
        public function show($nom, $prenom, $prof) {
            $utilisateur = Utilisateur::where('nom', $nom)
                               ->where('prenom', $prenom)
                               ->where('prof', $prof)
                               ->first();
            return view('affichage', ['utilisateur' => $utilisateur]);
        }
        

  }