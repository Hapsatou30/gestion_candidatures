<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
     // Définition des champs pouvant être remplis via l'attribut `fillable`
     protected $fillable = [
        'candidature_id',  // L'identifiant de la candidature associée à la notification
        'contenu',         // Le contenu de la notification
        'objet',           // L'objet de la notification
    ];

    // Définition de la relation many-to-one avec le modèle `Candidature`
    public function candidature()
    {
        return $this->belongsTo(Candidature::class);
    }
}
