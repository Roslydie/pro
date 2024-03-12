<?php

namespace App\Http\Controllers;
use App\Models\Pdf;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf|max:2048',
            'attestation' => 'required|mimes:pdf|max:2048',
        ]);
    
        $cvFileName = $request->file('cv')->getClientOriginalName();
        $attestationFileName = $request->file('attestation')->getClientOriginalName();
    
        $cvPath = $request->file('cv')->storeAs('cv', $cvFileName);
        $attestationPath = $request->file('attestation')->storeAs('attestations', $attestationFileName);
    
        Pdf::create([
            'nom' => $cvFileName,
            'type' => 'CV',
            'fichier' => file_get_contents($cvPath)
        ]);
    
        Pdf::create([
            'nom' => $attestationFileName,
            'type' => 'Attestation',
            'fichier' => file_get_contents($attestationPath)
        ]);
    
        return back()->with('success', 'Fichiers PDF téléversés avec succès.');
    }
}
