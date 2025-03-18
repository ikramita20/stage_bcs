<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'cin', 'nom', 'prenom', 'date_inscription',
        'date_naissance', 'telephone', 'filiere',
        'date_depart', 'date_fin', 'annee_scolaire',
        'note_deplome', 'statut'
    ];
}