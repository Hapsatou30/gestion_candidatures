<?php

use App\Models\Candidat;

return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'candidats',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'candidats',
        ],
    
    ],

    'providers' => [
        'candidats' => [
            'driver' => 'eloquent',
            'model' => App\Models\Candidat::class,
            'hash' => false, // Ne pas utiliser le hachage automatique par Laravel
            'password' => [
                'provider' => 'candidats',
                'column' => 'mot_passe', // Utilisation de 'mot_passe' au lieu de 'password'
                'table' => 'password_resets',
                'expire' => 60,
                'throttle' => 60,
            ],
        ],
    ],

    'password_timeout' => 10800,
];
