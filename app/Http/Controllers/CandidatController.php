<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

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
            'date_naissance' => 'required|date|before:2006-01-01',
            'telephone' => 'required|digits_between:1,15',
            'adresse' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:candidats',
            'sexe' => 'required|in:M,F',
            'mot_passe' => 'required|string|min:8',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cv' => 'nullable|mimes:pdf|max:10000',
        ], [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'date_naissance.required' => 'La date de naissance est obligatoire.',
            'date_naissance.before' => 'La date de naissance doit être avant le 1er janvier 2006.',
            'telephone.required' => 'Le téléphone est obligatoire.',
            'telephone.digits_between' => 'Le téléphone doit comporter entre 1 et 15 chiffres.',
            'adresse.required' => 'L\'adresse est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse email valide.',
            'email.max' => 'L\'email ne peut pas dépasser 255 caractères.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'sexe.required' => 'Le sexe est obligatoire.',
            'sexe.in' => 'Le sexe doit être soit M soit F.',
            'mot_passe.required' => 'Le mot de passe est obligatoire.',
            'mot_passe.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'photo.image' => 'La photo doit être une image.',
            'photo.mimes' => 'La photo doit être de type jpeg, png, jpg, gif, ou svg.',
            'photo.max' => 'La photo ne peut pas dépasser 2048 KB.',
            'cv.mimes' => 'Le CV doit être un fichier PDF.',
            'cv.max' => 'Le CV ne peut pas dépasser 10000 KB.',
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


        $email = $request->input('email');
        $password = $request->input('mot_passe');
        $candidat = Candidat::where('email', $email)->first();
        if ($candidat && Hash::check($password, $candidat->mot_passe)) {
         
            // Vous pouvez maintenant gérer la connexion de l'utilisateur manuellement si nécessaire
            Auth::login($candidat);
        
            return redirect()->intended('/'); // Rediriger vers la page d'accueil après connexion réussie
        } else {
            // Le mot de passe ne correspond pas ou l'utilisateur n'existe pas
            return back();
        }
        
    }

    public function index()
    {
        $formations = Formation::take(4)->get();
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


    // Modifier son profil
    public function ModifierProfil($id)
    {
        $candidats = Candidat::findOrFail($id);
        return view('candidats/modifier_profil', compact('candidats'));
    }
   
// public function ModifierProfilTraitement(Request $request, $id)
// {
//     $request->validate([
//         'nom' => 'required|string|max:255',
//         'prenom' => 'required|string|max:255',
//         'date_naissance' => 'required|date',
//         'telephone' => 'required|string|max:15',
//         'adresse' => 'required|string|max:255',
//         'email' => 'required|string|email|max:255|unique:candidats,email,' . $id,
//         'sexe' => 'required|in:M,F',
//         'mot_passe' => 'nullable|string|min:8',
//         'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         'cv' => 'nullable|mimes:pdf|max:10000',
//     ]);

//     $candidat = Candidat::findOrFail($id);
//     $candidat->nom = $request->nom;
//     $candidat->prenom = $request->prenom;
//     $candidat->date_naissance = $request->date_naissance;
//     $candidat->telephone = $request->telephone;
//     $candidat->adresse = $request->adresse;
//     $candidat->email = $request->email;
//     $candidat->sexe = $request->sexe;

//     if ($request->filled('mot_passe')) {
//         $candidat->mot_passe = bcrypt($request->mot_passe);
//     }

//     if ($request->hasFile('photo')) {
//         // Supprimer l'ancienne photo si elle existe
//         if ($candidat->photo) {
//             Storage::disk('public')->delete($candidat->photo);
//         }
//         $photoPath = $request->file('photo')->store('photos', 'public');
//         $candidat->photo = $photoPath;
//     }

//     if ($request->hasFile('cv')) {
//         // Supprimer l'ancien CV s'il existe
//         if ($candidat->cv) {
//             Storage::disk('public')->delete($candidat->cv);
//         }
//         $cvPath = $request->file('cv')->store('cvs', 'public');
//         $candidat->cv = $cvPath;
//     }

//     $candidat->save();

//     return redirect()->route('profil.show')->with('success', 'Profil mis à jour avec succès');
// }
public function ModifierProfilTraitement(Request $request, $id)
{
    // $request->validate([
    //     'nom' => 'required|string|max:255',
    //     'prenom' => 'required|string|max:255',
    //     'date_naissance' => 'required|date',
    //     'telephone' => 'required|string|max:15',
    //     'adresse' => 'required|string|max:255',
    //     'email' => 'required|string|email|max:255|unique:candidats,email,' . $id,
    //     'sexe' => 'required|in:M,F',
    //     'mot_passe' => 'nullable|string|min:8',
    //     'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     'cv' => 'nullable|mimes:pdf|max:10000',
    // ]);

    $candidat = Candidat::findOrFail($id);
    $candidat->nom = $request->nom;
    $candidat->prenom = $request->prenom;
    $candidat->date_naissance = $request->date_naissance;
    $candidat->telephone = $request->telephone;
    $candidat->adresse = $request->adresse;
    $candidat->email = $request->email;
    $candidat->sexe = $request->sexe;

    if ($request->filled('mot_passe')) {
        $candidat->mot_passe = bcrypt($request->mot_passe);
    }

    if ($request->hasFile('photo')) {
        // Supprimer l'ancienne photo si elle existe
        if ($candidat->photo) {
            Storage::disk('public')->delete($candidat->photo);
        }
        $photoPath = $request->file('photo')->store('photos', 'public');
        $candidat->photo = $photoPath;
    }

    if ($request->hasFile('cv')) {
        // Supprimer l'ancien CV s'il existe
        if ($candidat->cv) {
            Storage::disk('public')->delete($candidat->cv);
        }
        $cvPath = $request->file('cv')->store('cvs', 'public');
        $candidat->cv = $cvPath;
    }

    $candidat->save();

    return redirect()->route('profil.show')->with('success', 'Profil mis à jour avec succès');
}

}
