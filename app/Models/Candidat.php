<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;


    // Définition des champs pouvant être remplis via l'attribut `fillable`
    protected $fillable = [
        'nom',              // Le nom du candidat
        'prenom',           // Le prénom du candidat
        'date_naissance',   // La date de naissance du candidat
        'telephone',        // Le numéro de téléphone du candidat
        'adresse',          // L'adresse du candidat
        'email',            // L'email du candidat
        'sexe',             // Le sexe du candidat
        'mot_passe',        // Le mot de passe du candidat
        'photo',            // La photo du candidat (peut être null)
        'cv',               // Le curriculum vitae du candidat (peut être null)
    ];

    // Définition de la relation many-to-many avec le modèle `Formation` via la table pivot `candidatures`
    public function formations()
    {
        return $this->belongsToMany(Formation::class, 'candidatures')
                    ->withPivot('etat', 'motivation', 'biographie') // Champs supplémentaires de la table pivot
                    ->withTimestamps(); // Ajout des timestamps pour les enregistrements de la table pivot
    }
}
