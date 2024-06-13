<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Authenticatable
{
    use HasFactory, Notifiable;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

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

    


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'mot_passe',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
      * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'mot_passe' => 'hashed', // Utilisation de 'mot_passe'
    ];

}
