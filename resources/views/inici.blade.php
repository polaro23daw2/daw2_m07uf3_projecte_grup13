<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TouristRent</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        a {
            color: black;
        }
    </style>
</head>
<body>
    <!-- Nuevo container para el logo y el botón de login -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <img src="{{asset('TouristRent.jpeg')}}" alt="Logo" width="75px" class="mt-3">
                </div>
                <div class="col-auto">
                    @if (Route::has('login'))
                        @auth
                            <button class="btn btn-info">
                                <i class="fas fa-sign-out-alt"></i><a href="{{ url('/dashboard') }}">Dashboard</a>
                            </button>
                        @else
                            <button class="btn btn-info">
                                <i class="fas fa-sign-in-alt"></i><a href="{{ route('login') }}">Log in</a>
                            </button>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Resto del contenido -->
    <div class="container text-center mt-5">
        <h1 class="display-3">TouristRent</h1>
        <p class="mt-3">TouristRent és una empresa especialitzada en el lloguer d'apartaments turístics, i la seva aplicació ofereix una àmplia gestió de cases. Amb la seva plataforma, els clients poden accedir fàcilment a una gran varietat d'apartaments disponibles per a llogar, mentre que l'equip de l'empresa pot gestionar de manera eficient tot el procés de reserva i lloguer. La interfície de l'aplicació és amigable i intuïtiva, permetent tant als clients com als membres de l'equip gestionar les seves activitats de manera eficaç i sense complicacions.</p>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
