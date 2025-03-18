<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ajouter un Stagiaire</title>
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
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Ajouter un Stagiaire</h2>

        <form action="{{ route('stagiaire.store') }}" method="POST">
            @csrf

            <div class="input-group">
                <input type="text" name="nom" placeholder="Nom" class="form-control" required>
                <input type="text" name="prenom" placeholder="Prénom" class="form-control" required>
            </div>

            <div class="input-group">
                <input type="date" name="date_inscription" placeholder="Date d'inscription" class="form-control" required>
                <input type="date" name="date_naissance" placeholder="Date de naissance" class="form-control" required>
            </div>

            <div class="input-group">
                <input type="text" name="cin" placeholder="CIN" class="form-control" required>
                <input type="text" name="telephone" placeholder="Numéro de téléphone" class="form-control" required>
            </div>

            <div class="input-group">
                <select name="filiere" class="form-control" required>
                    <option value="">Sélectionnez la filière</option>
                    <option value="Informatique">Informatique</option>
                    <option value="Gestion">Gestion</option>
                    <option value="Électronique">Électronique</option>
                </select>
            </div>

            <div class="input-group">
                <input type="date" name="date_depart" placeholder="Date de départ" class="form-control" required>
                <input type="date" name="date_fin" placeholder="Date de fin" class="form-control" required>
            </div>

            <div class="input-group">
                <input type="number" name="annee_scolaire" placeholder="Année" class="form-control" required>
                <input type="number" step="0.01" name="note_deplome" placeholder="Note de diplôme" class="form-control">
            </div>

            <div class="radio-group">
                <label for="statut_admis">Admis</label>
                <input type="radio" name="statut" value="admis" id="statut_admis" required>
            
                <label for="statut_non_admis">Non admis</label>
                <input type="radio" name="statut" value="non admis" id="statut_non_admis" required>
            </div>

            <button type="submit" class="btn btn-submit">Ajouter</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Retour</a>
        </form>
    </div>

</body>

</html>