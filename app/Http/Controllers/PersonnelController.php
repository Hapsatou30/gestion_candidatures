<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\Personnel;

class PersonnelController extends Controller
{
    public function connexion(Request $request)
    {
        // // Vérifie si un personnel est déjà connecté
        // if ($request->session()->get('personnel')) {
        //     // Redirige vers l'espace personnel avec un message
        //     return redirect('/espacePersonnel')->with('status', 'Vous devez vous déconnecter avant de vous reconnecter.');
        // }
        return view('personnels/connexion');
    }
    public function verification(Request $request)
    {
        // Récupérer le personnel par son adresse email
        $personnel = Personnel::where('email', $request->input('email'))->first();
    
        if ($personnel) {
            // Vérifie si le mot de passe MD5 est correct
            if ($personnel->mot_passe === md5($request->input('mot_passe'))) {
                // Mettre les informations du personnel dans la session
                $request->session()->put('personnel', $personnel);
                // Rediriger vers l'espace personnel
                return redirect('/espacePersonnel');
            } else {
                // Rediriger avec un message d'erreur pour mot de passe incorrect
                return back()->with('status', 'Mot de passe incorrect.');
            }
        } else {
            // Rediriger avec un message d'erreur pour email non trouvé
            return back()->with('status', 'Désolé, vous n\'avez pas de compte avec cet email.');
        }
    }
    
// persodetails
    public function voirEspace()
    {
        // Récupérer toutes les entrées de la table personnels
        $personnels = Personnel::all();

        // Passer les données à la vue
        return view('personnels.espacePerso', compact('personnels'));
    }

    public function show($id)
    {
        // Récupérer une seule entrée de la table personnels par ID
        $personnel = Personnel::findOrFail($id);

        // Passer les données à la vue des détails
        return view('personnelDetails', compact('personnel'));
    }


    //
    // public function index()
    // {
    //     $personnels = Personnel::all();
    //     return view('personnels.index', compact('personnels'));
    // }

   
}
