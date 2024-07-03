<?php

namespace Database\Factories;

use App\Models\Candidat;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidat>
 */
class CandidatFactory extends Factory
{
    protected $model = Candidat::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->nom,
            'prenom' => $this->faker->prenom,
            'telephone' => $this->faker->telephone,
            'date_naissance' => $this->faker->date_naissance,
            'adresse' => $this->faker->adresse,
            'sexe' => $this->faker->sexe,
            'photo' => $this->faker->photo,
            'cv' => $this->faker->cv,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'mot_passe' => Hash::make('password'), // Vous pouvez utiliser Hash::make pour hasher le mot de passe

        ];
    }
}
