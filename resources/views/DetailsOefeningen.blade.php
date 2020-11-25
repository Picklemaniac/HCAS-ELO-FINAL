<!DOCTYPE html>
<html lang="nl">
<title>Details Oefeningen</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    body, html {
        height: 100%;
        background-repeat: no-repeat;
        background-color: #F78B14;
    }
</style>
<body>

<div class="w3-content" style="max-width:1400px">

    <header class="w3-container w3-center w3-padding-32">
        <h1><b>HCAS Details Oefeningen</b></h1>
    </header>
    <div class="w3-row">

        <div class="w3-col l8 s12">
            <div class="w3-card-4 w3-margin w3-white">
                <div class="w3-container">
                    <h3><b>{{$oefening->Titel}}</b></h3>
                    <h5>Door: {{$oefening->Auteur}}</h5>

                    @if($oefening->VideoLink != "")
                    <iframe width="100%" height="400px"
                            src="{{$oefening->VideoLink}}">
                    </iframe>
                    @endif

                    @if($oefening->ImageLink != "")
                        <img src="{{$oefening->ImageLink}}">
                    @endif
                </div>

                <div class="w3-container">
                        <h4>Details</h4>
                        <p>Doelgroep: {{$oefening->Doelgroep}}</p>
                        <p>Domein: {{$oefening->DomeinNummer}}</p>
                        <p>Sector: {{$oefening->SectorNummer}}</p>
                        <p>Subsector: {{$oefening->SubsectorNummer}}</p>
                        <p>Leerfase:  {{$oefening->Leerfase}}</p>
                        <p>Trainingsonderdeel:  {{$oefening->Trainingonderdeel}}</p>
                        <p>Spelfase: {{$oefening->Spelfase}}</p>
                        <p>Werkvorm: {{$oefening->Werkvorm}}</p>
                        <p>Moeilijkheidsgraad: {{$oefening->Moeilijkheidsgraad}}</p>
                        <p>doel: {{$oefening->Doel}}</p>
                        <p>Tijdsduur: {{$oefening->Tijd}}</p>
                        <p>Organisatie: {{$oefening->Organisatie}}</p>
                        <p>Veel voorkomende fouten: {{$oefening->VoorkomendeFouten}}</p>
                        <p>Makkelijker maken: {{$oefening->MakkelijkerMaken}}</p>
                        <p>Moeilijker maken:  {{$oefening->MoeilijkerMaken}}</p>
                        <p>Hulpmiddelen: {{$oefening->Hulpmiddelen}}</p>
                        <p>Tips: {{$oefening->Tips}}</p>
                </div>
            </div>
        </div>

        <div class="w3-col l4">
            <div class="w3-card w3-margin w3-margin-top">
                <div class="w3-container w3-white">
                    <h4><a href="/userDashboard">Terug</a></h4>
                </div>
            </div>
        </div>
    </div><br>
</div>

</body>
</html>
