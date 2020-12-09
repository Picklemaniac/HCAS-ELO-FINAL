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
    #gebruikers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    #gebruikers td, #gebruikers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #gebruikers tr:nth-child(even){background-color: #f2f2f2;}

    #gebruikers tr:hover {background-color: #ddd;}

    #gebruikers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #F78B14;
        color: white;
    }

</style>
<body class="">

<div class="w3-content" style="max-width:1400px">

    <header class="w3-container w3-center w3-padding-32">
        <h1><b>Admin Paneel</b></h1>
    </header>

    <div class="w3-row">

        <div class="w3-col l8 s12">
            <div class="w3-card-4 w3-margin w3-white w3-center">
                <div class="w3-container">
                    <h3><b>Bestaande Accounts</b></h3>
                </div>

                <div class="w3-container">
                    <table id="gebruikers">
                        <tr><td>@sortablelink('achternaam')</td><td>@sortablelink('tussenvoegsel')</td><td>@sortablelink('voornaam')</td></tr>
                    @foreach ($users as $u)
                        <tr><td>{{$u->achternaam}}</td><td>{{$u->tussenvoegsel}} </td><td>{{$u->voornaam}}</td></tr>
                    @endforeach
                    </table>
                    <p></p>
                    {!! $users->appends(\Request::except('page'))->render() !!}
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
