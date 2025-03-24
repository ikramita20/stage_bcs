<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>
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

        .container {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logobcs.jpg') }}" alt="Logo BCS">
        </div>

        <div class="user-info">
            <a href="{{ route('profile') }}">
                <img src="{{ asset('images/profile_icon.png') }}" alt="Profil" style="width: 50px; cursor: pointer;">
            </a>
            <span>admin</span>
            <a href="{{ route('logout') }}" class="logout-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                déconnexion ↩️
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>