<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Personnel;
use Illuminate\Http\Request;

class FormationController extends Controller
{
// Affichage du liste
public function listeDformation()
    {
        $formations = Formation::all();
        return view('formations.listeDformation', compact('formations'));
    }
    public function destroy($id)
   {
       // Suppression de la formation
       $formation = Formation::findOrFail($id);
       $formation->delete();
   
       // Retourne en arriere
       return back()->with('success', 'Formation supprimée avec succès');  
   }
   
    
}  








