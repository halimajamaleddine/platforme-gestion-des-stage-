<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link href="{{ url('css\formulaireStagiaire.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="{{ url('css\inscription.css') }}" rel="stylesheet" />


    <title>Document</title>
</head>
<body>
    <form id="form">
        <p>Inscrivez-vous une fois pour un stagiaire.</p>

        <div class="form-group">
            <label for="name">Nom</label>
            <br />
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i> </div>
                <input type="text" id="name" placeholder="Entre Votre Nom" />
            </div>
        </div>

        <div class="form-group">
            <label for="email"> Email</label>
            <br />
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"> </i></div>
                <input type="email" id="email" placeholder="Entre Votre Email" />
            </div>
        </div>
        </div>

        <div class="form-group">
            <label for="username">Telephone</label>
            <br />
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i> </div>
                <input type="tel" id="username" placeholder="Entre Votre Telephone" />
            </div>
        </div>
        </div>

        <div class="form-group">
            <label for="password">Ville</label>
            <br />
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i> </div>
                <input type="password" id="password" placeholder="Enter Your Password" />
            </div>
        </div>
        </div>

        <div class="form-group">
            <label for="password-confirm"> Your Password</label>
            <br />
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i> </div>
                <input type="password" id="password-confirm" placeholder="Your Password" />
            </div>
        </div>
        </div>

        <button type="button" class="btn btn-outline-secondary">S'inscrire</button>
    </form>

</body>
</html>