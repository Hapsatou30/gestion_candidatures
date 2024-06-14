<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CandidatController extends Controller
{
    
    public function profil()
    {
        return view('candidats/profil1');
    }
    public function inscription()
    {
        return view('candidats.inscription');
    }

    public function inscrire(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'telephone' => 'required|string|max:15',
            'adresse' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:candidats',
            'sexe' => 'required|in:M,F',
            'mot_passe' => 'required|string|min:8',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cv' => 'nullable|mimes:pdf|max:10000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $photoPath = $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null;
        $cvPath = $request->file('cv') ? $request->file('cv')->store('cvs', 'public') : null;

        $candidat = Candidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'email' => trim($request->email),
            'sexe' => $request->sexe,
            'mot_passe' => (trim($request->mot_passe)),
            'photo' => $photoPath,
            'cv' => $cvPath,
        ]);


        return redirect()->route('login');
    }

    public function connexion()
    {
        return view('candidats.connexion');
    }

    public function connecter(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'mot_passe' => 'required|min:6',
            ],
            [
                'email.required' => 'L\'email est obligatoire.',
                'email.email' => 'L\'email doit être une adresse valide.',
                'mot_passe.required' => 'Le mot de passe est obligatoire.',
                'mot_passe.min' => 'Le mot de passe doit contenir au moins 8 caractères.',

            ]
        );

        // $credentials = $request->only([
        //     'email' => 'email', 'mot_passe' => 'mot_passe'
        // ]);

        // dd(Auth::attempt($credentials));

        // if (Auth::attempt($credentials)) {

        //     $request->session()->regenerate();

        //     return redirect()->intended('accueil'); // Rediriger vers l'accueil après connexion
        // }

        $email = $request->input('email');
        $password = $request->input('mot_passe');
        $candidat = Candidat::where('email', $email)->first();
        if ($candidat && Hash::check($password, $candidat->mot_passe)) {
         
            // Vous pouvez maintenant gérer la connexion de l'utilisateur manuellement si nécessaire
            Auth::login($candidat);
        
            return redirect()->intended('/'); // Rediriger vers la page d'accueil après connexion réussie
        } else {
            // Le mot de passe ne correspond pas ou l'utilisateur n'existe pas
            return back()->withErrors([
                'email' => 'Les informations d\'identification ne correspondent pas.',
            ])->withInput();
        }
        


// 
        // return back()->withErrors([
        //     'email' => 'Les informations d\'identification ne correspondent pas.',
        // ])->onlyInput('email');
    }

    public function index()
    {
        $formations = Formation::all();
        return view('accueil' , compact('formations'));
    }

    public function deconnexion()
    {
        Auth::logout();
        return redirect('/');
    }
    public function show()
    {
        $candidat = Auth::user();
        return view('candidats/profil1', compact('candidat'));
    }
}
