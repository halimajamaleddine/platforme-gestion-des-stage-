<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="{{ url('css\acceuil.css') }}" rel="stylesheet" />
    <title>Document</title>
</head>

<body>

    <div class="navbar">
        <img class="image" src="logomen.png" />
        <ul>
            <link>
            <li>a propos </li>
            <li>devnir stagiaire</li>
            <li>etablissement</li>
            <li>Contact </li>
        </ul>

        <button class="button-28 btn btn-outline-secondary" role="button">Se connecter</button>
        <button onclick="window.location.href='inscription'" class="button-28 btn btn-outline-secondary" role="button">S'inscrire</button>

    </div>

    <!--footer  -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>

            <a href="/"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav row-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-3 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>
