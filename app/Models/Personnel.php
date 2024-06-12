<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    // Définition des champs pouvant être remplis via l'attribut `fillable`
    protected $fillable = [
        'nom',        // Le nom du membre du personnel
        'prenom',     // Le prénom du membre du personnel
        'telephone',  // Le numéro de téléphone du membre du personnel
        'email',      // L'email du membre du personnel
        'mot_passe',  // Le mot de passe du membre du personnel
    ];

    // Définition de la relation one-to-many avec le modèle `Formation`
    public function formations()
    {
        return $this->hasMany(Formation::class);
    }
}
