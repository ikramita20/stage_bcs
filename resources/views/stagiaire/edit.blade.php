<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Modifier un Stagiaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            background-color: #f8f9fa;
        }

        .form-container {
            max-width: 800px;
            width: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            border-radius: 12px;
            background-color: white;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 25px;
        }

        .btn-submit {
            background-color: #5E3B76;
            color: white;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            cursor: pointer;
            border: 2px solid #5E3B76;
            background-color: white;
            color: #5E3B76;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .btn-secondary {
            width: 100%;
        }

        label {
            margin-top: 10px;
            margin-bottom: 5px;
            margin-left: 15px;
            margin-right: 15px;
        }

        .form-row {
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }

        .form-row .form-control {
            flex: 1;
        }

        .form-row .input-group label {
            margin-bottom: 10px;
        }

        .form-row .form-control {
            width: 48%; /* Ensure inputs share space evenly */
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Modifier un Stagiaire</h2>

        <form action="{{ route('stagiaire.update', $stagiaire->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="input-group">
                <input type="text" name="nom" value="{{ $stagiaire->nom }}" placeholder="Nom" class="form-control" required>
                <input type="text" name="prenom" value="{{ $stagiaire->prenom }}" placeholder="Prénom" class="form-control" required>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="dt_insc">Date d'inscription</label>
                    <input type="date" name="date_inscription" value="{{ $stagiaire->date_inscription }}" class="form-control" required>
                </div>

                <div class="input-group">
                    <label for="dt_nai">Date de naissance</label>
                    <input type="date" name="date_naissance" value="{{ $stagiaire->date_naissance }}" class="form-control" required>
                </div>
            </div>

            <div class="input-group">
                <input type="text" name="cin" value="{{ $stagiaire->cin }}" placeholder="CIN" class="form-control" required>
                <input type="text" name="telephone" value="{{ $stagiaire->telephone }}" placeholder="Numéro de téléphone" class="form-control" required>
            </div>

            <div class="input-group">
                <select name="filiere" class="form-control" required>
                    <option value="">Sélectionnez la filière</option>
                    <option value="Développement Informatique" {{ $stagiaire->filiere == 'Développement Informatique' ? 'selected' : '' }}>Développement Informatique</option>
                    <option value="Gestion des Entreprises" {{ $stagiaire->filiere == 'Gestion des Entreprises' ? 'selected' : '' }}>Gestion des Entreprises</option>
                    <option value="Commerce International" {{ $stagiaire->filiere == 'Commerce International' ? 'selected' : '' }}>Commerce International</option>
                </select>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="dt_de">Date de départ</label>
                    <input type="date" name="date_depart" value="{{ $stagiaire->date_depart }}" class="form-control" required>
                </div>

                <div class="input-group">
                    <label for="dt_fin">Date de fin</label>
                    <input type="date" name="date_fin" value="{{ $stagiaire->date_fin }}" class="form-control" required>
                </div>
            </div>

            <div class="input-group">
                <input type="number" name="annee_scolaire" value="{{ $stagiaire->annee_scolaire }}" placeholder="Année" class="form-control" required>
                <input type="number" step="0.01" name="note_deplome" value="{{ $stagiaire->note_deplome }}" placeholder="Note de diplôme" class="form-control">
            </div>

            <div class="radio-group">
                <label for="statut_admis">Admis</label>
                <input type="radio" name="statut" value="admis" id="statut_admis" {{ $stagiaire->statut == 'admis' ? 'checked' : '' }} required>

                <label for="statut_non_admis">Non admis</label>
                <input type="radio" name="statut" value="non admis" id="statut_non_admis" {{ $stagiaire->statut == 'non admis' ? 'checked' : '' }} required>
            </div>

            <button type="submit" class="btn btn-submit">Mettre à jour</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Retour</a>
        </form>
    </div>

</body>

</html>