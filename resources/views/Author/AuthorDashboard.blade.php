<!DOCTYPE html>
<html lang="nl">
<title>Auteur Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="{{ asset('css/authorcss/author.css') }}" media="all" rel="stylesheet" type="text/css" />
<body class="">

<div class="w3-content" style="max-width:1400px">
    <header class="w3-container w3-center w3-padding-32">
        <h1><b>Auteur Paneel</b></h1>
    </header>

    <div class="w3-row">

        <div class="w3-col l8 s12">
            <div class="w3-card-4 w3-margin w3-white">
                <div class="w3-container">
                    <h3><b>Bestaande oefeningen</b></h3>
                </div>

                <div class="w3-container">
                    <table id="oefeningen">
                        <tr><td>Oefening</td><td>Acties</td></tr>
                    @foreach ($oefeningen as $o)
                        <tr><td><a href="/detailsOefeningen{{$o->OefeningNummer}}">{{$o->Titel}}</a></td>
                            <td> <button onclick="window.location.href='/EditOefening{{$o->OefeningNummer}}'">Aanpassen</button> <button onclick="window.location.href='/VerwijderOefening{{$o->OefeningNummer}}'">Verwijderen</button> </td>
                        </tr>
                    @endforeach
                    </table>
                    <p></p>
                    {!! $oefeningen->appends(\Request::except('page'))->render() !!}
                </div>
            </div>
        </div>

        <div class="w3-col l4">
            <div class="w3-card w3-margin w3-margin-top">
                <div class="w3-container w3-white">
                    <h4><a href="/NieuweOefening">Nieuwe Oefening Toevoegen</a></h4>
                </div>
            </div>
        </div>

        <div class="w3-col l4">
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
