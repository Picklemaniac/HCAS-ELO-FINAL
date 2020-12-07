<!DOCTYPE html>
<html lang="nl">
<title>Auteur Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    body, html {
        height: 100%;
        background-repeat: repeat;
        background-color: #F78B14;
    }
</style>
<body class="">

<div class="w3-content" style="max-width:1400px">

    <header class="w3-container w3-center w3-padding-32">
        <h1><b>Admin Paneel</b></h1>
    </header>

    <div class="w3-row">

        <div class="w3-col l8 s12">
            <div class="w3-card-4 w3-margin w3-white">
                <div class="w3-container">
                    <h3><b>Bestaande Accounts</b></h3>
                </div>

                <div class="w3-container">
                    @foreach ($users as $u)
                        <p>{{$u->achternaam}} {{$u->tussenvoegsel}} {{$u->voornaam}}</p>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="w3-col l4">
            <div class="w3-card w3-margin w3-margin-top">
                <div class="w3-container w3-white">
                    <h4><a href="//noggeenroutenaarregisterpagina">Nieuw Account Registreren</a></h4>
                </div>
            </div>
            <div class="w3-card w3-margin w3-margin-top">
                <div class="w3-container w3-white">
                    <h4><a href="AuteurDashboard">Auteur Omgeving</a></h4>
                </div>
            </div>
            <div class="w3-card w3-margin w3-margin-top">
                <div class="w3-container w3-white">
                    <h4><a href="trainerDashboard">Training Omgeving</a></h4>
                </div>
            </div>
            <div class="w3-card w3-margin w3-margin-top">
                <div class="w3-container w3-white">
                    <h4>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Uitloggen</button>
                        </form>
                    </h4>
                </div>
            </div>
        </div>
    </div><br>
</div>

</body>
</html>
