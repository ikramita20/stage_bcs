<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page Principale</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background: white;
            border-bottom: 1px solid #ccc;
            box-shadow: 0px 1px 5px black;
        }

        .logo img {
            width: 70px;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .logout-btn {
            background-color: #5E3B76;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            text-decoration: none;
        }

        .search-section {
            margin: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .search-input {
            padding: 8px;
            border: 2px solid #5E3B76;
            border-radius: 5px;
            width: 400px;
        }

        .add-btn {
            background: yellow;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #5E3B76;
            padding: 10px;
            text-align: center;
        }

        .details-btn {
            background: #ccc;
            padding: 8px 12px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
            justify-content: center;
        }
    </style>
</head>

<body>
    
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logobcs.jpg') }}" alt="Logo BCS">
        </div>

        <div class="user-info">
            <div class="admin-info">
                
                <a href="{{ route('profile') }}">
                    <img src="{{ asset('images/profile_icon.png') }}" alt="Profil" style="width: 50px; cursor: pointer;">
                </a>
                <span>admin</span>
            </div>
            <a href="{{ route('logout') }}" class="logout-btn"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                déconnexion ↩️
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

    <div class="search-section">
        <input type="text" placeholder="Chercher par CIN..." class="search-input">
        
        <button type="button" class="add-btn" onclick="window.location.href='{{ route('stagiaire.create') }}'">
            Ajouter Stagiaire
        </button>        
    </div>

    <table>
        <thead>
            <tr>
                <th>CIN</th>
                <th>Nom + Prénom</th>
                <th>Détails</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stagiaires as $stagiaire)
            <tr>
                <td>{{ $stagiaire->cin }}</td>
                <td>{{ $stagiaire->nom }} {{ $stagiaire->prenom }}</td>
                <td>
                    <button class="btn details-btn">
                        détails <span>ℹ️ ⚙️</span>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>