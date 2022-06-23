<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/garage.css') }}">
    <title>
        @yield('titrePage')
    </title>
</head>
<body>

    <header>
        <a href="{{ url('/') }}"><img id="main-logo" src="{{ asset('img/logo.png') }}" alt="logo de l'entreprise garage"></a>
        <div class="head-titles">
            <a class="Mya" href="{{ route('vehicules.index') }}">Voir</a>
            <a class="Mya" href="{{ route('vehicules.create') }}">Ajouter</a>
        </div>
        @if (Route::has('login'))
            <div class="head-auth">
                @auth
                <form id='logOutForm' action="{{ route('logout') }}" method="post">
                    @csrf
                </form>
                <p>{{ Auth::user()->name }} (</p>
                <a class="aLog" href="" onclick="event.preventDefault();document.getElementById('logOutForm').submit();">Se déconnecter</a>
                <p>)</p>
                @else
                <a class="aLog" href="{{ url('/login') }}">Se connecter</a>
                @endauth
            </div>
        @endif
    </header>
    <div class="sep"></div>

    <div>
        @yield('contenu')
    </div>

    <div class="sep"></div>

    <footer>
        <div id="line-footer"></div>
        <p class="text-center text-footer">Copyright Garage 2022</p>
    </footer>
</body>
</html>