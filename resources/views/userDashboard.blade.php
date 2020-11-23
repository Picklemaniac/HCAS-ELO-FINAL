<!DOCTYPE html>
<html>
<title>User Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    .gray {
        border-radius: 25px;
        background-color: lightgray;
        padding: 1%;
        margin: 2%;
    }
    body, html {
        height: 100%;
        background-repeat: no-repeat;
        background-color: #F78B14;
    }
</style>
<body>

<div class="w3-content" style="max-width:1400px">

    <header class="w3-container w3-center w3-padding-32">
        <h1><b>Welkom  {{ucfirst(Auth::user()->voornaam)}} </b></h1>
    </header>

    <div class="w3-row">
        <div class="w3-col l8 s12">
            <div class="w3-card-4 w3-margin w3-white">

                @foreach ($trainingen as $t)
                <div class="w3-container">
                    <h3><b>{{ $t->TrainingNaam }}</b></h3>
                    <h5>{{ $t->created_at->toDateString() }}</h5>
                </div>

                    @foreach ($t->oefeningen as $o)
                    <div class="w3-container, gray">
                        <h4><a href="/detailsOefeningen{{$o->OefeningNummer}}">{{$o->Titel}}</a></h4>
                    </div>
                    @endforeach
                    <hr>
                @endforeach
                <hr>
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
                    <h4> Groep:
                       <select>
                           <option>H1</option>
                       </select>
                    </h4>
                </div>
            </div>
        </div>
    </div><br>
</div>

</body>
</html>
