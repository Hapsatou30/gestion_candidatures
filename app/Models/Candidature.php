<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
     // Définition des champs pouvant être remplis via l'attribut `fillable`
     protected $fillable = [
        'candidat_id',  // L'identifiant du candidat
        'formation_id', // L'identifiant de la formation
        'etat',         // L'état de la candidature (ex: en attente, acceptée, rejetée)
        'motivation',   // La motivation du candidat pour cette formation
        'biographie',   // La biographie du candidat
    ];

    // Définition de la relation one-to-many avec le modèle `Notification`
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
   
public function formation()
{
    return $this->belongsTo(Formation::class);
}
public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

}
