<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Modifier Profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        
        }

        .container-box {
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
            background: white;
            padding: 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            border: 1px solid #5E3B76;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            color: purple;
        }

        .btn-valider {
            display: block;
            width: 100%;
            background: yellow;
            color: blue;
            border: none;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container-box">

        <div class="navbar">
            <div class="logo">
                <img src="{{ asset('images/logobcs.jpg') }}" alt="Logo BCS" style="width: 70px;">
            </div>
            <div class="admin-info">
                <span>👤 admin</span>
            </div>
        </div>

        <h3>Modifier vos informations :</h3>
        <form action="{{ route('update.profile') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="nouveau nom..." required>
            <input type="password" name="password" placeholder="nouveau mot de passe..." required>
            <input type="password" name="confirm_password" placeholder="confirmer mot de passe..." required>
        
            <button type="submit" class="btn-valider">valider</button>
        </form>
    </div>

</body>

</html>