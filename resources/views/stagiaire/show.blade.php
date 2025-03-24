@extends('layouts.app')

@section('title', 'Détails du Stagiaire')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Détails du Stagiaire</h2>

    <table class="table table-bordered" style="font-size: 14px; width: 80%; margin: 0 auto;">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ $stagiaire->nom }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ $stagiaire->prenom }}</td>
            </tr>
            <tr>
                <th>CIN</th>
                <td>{{ $stagiaire->cin }}</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>{{ $stagiaire->date_naissance }}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{ $stagiaire->telephone }}</td>
            </tr>
            <tr>
                <th>Filière</th>
                <td>{{ $stagiaire->filiere }}</td>
            </tr>
            <tr>
                <th>Année Scolaire</th>
                <td>{{ $stagiaire->annee_scolaire }}</td>
            </tr>
            <tr>
                <th>Date d'Inscription</th>
                <td>{{ $stagiaire->date_inscription }}</td>
            </tr>
            <tr>
                <th>Date de Départ</th>
                <td>{{ $stagiaire->date_depart }}</td>
            </tr>
            <tr>
                <th>Date de Fin</th>
                <td>{{ $stagiaire->date_fin }}</td>
            </tr>
            <tr>
                <th>Note du Diplôme</th>
                <td>{{ $stagiaire->note_deplome ?? 'Non spécifiée' }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{{ ucfirst($stagiaire->statut) }}</td>
            </tr>
        </tbody>
    </table>

    <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-lg">⬅️ Retour</a>

        <a href="{{ route('stagiaire.edit', $stagiaire->id) }}" class="btn btn-warning btn-lg">
            🖊️ Modifier
        </a>

        <form action="{{ route('stagiaire.delete', $stagiaire->id) }}" method="POST"
              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce stagiaire ?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-lg">🗑️ Supprimer</button>
        </form>
    </div>
</div>
@endsection