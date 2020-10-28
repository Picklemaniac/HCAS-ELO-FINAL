<!DOCTYPE html>
<html>
<title>Details Trainingen</title>
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
</style>
<body class="w3-light-grey">

<div class="w3-content" style="max-width:1400px">

    <header class="w3-container w3-center w3-padding-32">
        <h1><b>HCAS Trainingen</b></h1>
    </header>

    <div class="w3-row">
        <div class="w3-col l8 s12">
            <div class="w3-card-4 w3-margin w3-white">
                <div class="w3-container">
                    <h3><b>Training 12</b></h3>
                    <h5>10-22-2020</h5>
                </div>

                <div class="w3-container, gray">
                    <h4><a href="/detailsOefeningen">Lopen met de bal met afronden</a></h4>
                    <h6>Fysiek -> Snelheid</h6>
                </div>
                <div class="w3-container, gray">
                    <h4><a href="/detailsOefeningen">High impact interval training</a></h4>
                    <h6>Fysiek -> Snelheid</h6>
                </div>
                <div class="w3-container, gray">
                    <h4><a href="/detailsOefeningen">ISRT interval shuttle training</a></h4>
                    <h6>Fysiek -> Snelheid</h6>
                </div>
                <div class="w3-container, gray">
                    <h4><a href="/detailsOefeningen">Scoren uit de draai</a></h4>
                    <h6>Fysiek -> Snelheid</h6>
                </div>
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
                </div>
            </div>
            <hr>
        </div>
    </div><br>
</div>

</body>
</html>
