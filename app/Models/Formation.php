<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;


    // Définition des champs pouvant être remplis via l'attribut `fillable`
    protected $fillable = [
        'nom',            // Le nom de la formation
        'description',    // La description de la formation
        'competences',    // Les compétences acquises par la formation
        'debouches',      // Les débouchés après la formation
        'date_debut',     // La date de début de la formation
        'date_fin',       // La date de fin de la formation
        'date_limite',    // La date limite pour candidater à la formation
        'image',          // L'image associée à la formation
        'cohorte',        // La cohorte de la formation
        'statut',         // Le statut de la formation (ouverte/fermée)
        'personnel_id',   // L'identifiant du personnel qui a ajouté la formation
    ];

    // Définition de la relation many-to-one avec le modèle `Personnel`
    public function personnel()
    {
        return $this->belongsTo(Personnel::class);
    }

    // Définition de la relation many-to-many avec le modèle `Candidat` via la table pivot `candidatures`
    public function candidats()
    {
        return $this->belongsToMany(Candidat::class, 'candidatures')
                    ->withPivot('etat', 'motivation', 'biographie') // Champs supplémentaires de la table pivot
                    ->withTimestamps(); // Ajout des timestamps pour les enregistrements de la table pivot
    }
}
