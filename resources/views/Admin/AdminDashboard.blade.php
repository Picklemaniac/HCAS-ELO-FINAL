<!DOCTYPE html>
<html lang="nl">
<title>Admin Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="{{ asset('css/admincss/admin.css') }}" media="all" rel="stylesheet" type="text/css" />

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
                        <tr><td>@sortablelink('achternaam')</td><td>@sortablelink('tussenvoegsel')</td><td>@sortablelink('voornaam')</td><td>Rollen</td></tr>
                    @foreach ($users as $u)
                        <tr><td>{{$u->achternaam}}</td><td>{{$u->tussenvoegsel}} </td><td>{{$u->voornaam}}</td>
                        <td>
                            Admin: @if($u->IsAdmin == 1) <input type="checkbox" onclick="window.location.href='/MakeAdmin{{$u->id}}'" checked/> @else <input type="checkbox" onclick="window.location.href='/MakeAdmin{{$u->id}}'"/> @endif
                            Auteur: @if($u->IsAuthor == 1) <input type="checkbox" onclick="window.location.href='/MakeAuthor{{$u->id}}'" checked/> @else <input type="checkbox" onclick="window.location.href='/MakeAuthor{{$u->id}}'"/> @endif
                            Trainer: @if($u->IsTrainer == 1) <input type="checkbox" onclick="window.location.href='/MakeTrainer{{$u->id}}'" checked /> @else <input type="checkbox" onclick="window.location.href='/MakeTrainer{{$u->id}}'"/> @endif

                        </td>
                        </tr>
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
                    <h4><a href="/registreren">Nieuw Account Registreren</a></h4>
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
