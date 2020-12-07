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
    .strong {
        font-weight: bolder;
        text-decoration: underline;
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
                    <h5>Door: {{ucfirst($oefening->Auteur)}}</h5>

                    @if($oefening->VideoLink != "")
                    <iframe width="100%" height="400px"
                            src="{{$oefening->VideoLink}}">
                    </iframe>
                    @endif

                    @if($oefening->ImageLink != "")
                        <img width="400" src="{{$oefening->ImageLink}}">
                    @endif
                </div>

                <div class="w3-container">
                        <h4>Details</h4>
                        @if($oefening->Doelgroep != "")<p><span class="strong">Doelgroep:</span> {{$oefening->Doelgroep}}</p>@endif
                        @if($oefening->DomeinNummer != "")<p><span class="strong">Domein:</span> {{$oefening->DomeinNummer}}</p>@endif
                        @if($oefening->SectorNummer != "") <p><span class="strong">Sector:</span> {{$oefening->SectorNummer}}</p>@endif
                        @if($oefening->SubsectorNummer != "") <p><span class="strong">Subsector:</span> {{$oefening->SubsectorNummer}}</p>@endif
                        @if($oefening->Leerfase != "")<p><span class="strong">Leerfase:</span>  {{$oefening->Leerfase}}</p>@endif
                        @if($oefening->Trainingonderdeel != "")<p><span class="strong">Trainingsonderdeel:</span>  {{$oefening->Trainingonderdeel}}</p>@endif
                        @if($oefening->Spelfase != "")<p><span class="strong">Spelfase:</span> {{$oefening->Spelfase}}</p>@endif
                        @if($oefening->Werkvorm != "")<p><span class="strong">Werkvorm:</span> {{$oefening->Werkvorm}}</p>@endif
                        @if($oefening->Moeilijkheidsgraad != "")<p><span class="strong">Moeilijkheidsgraad:</span> {{$oefening->Moeilijkheidsgraad}}</p>@endif
                        @if($oefening->Tijd != "")<p><span class="strong">Tijdsduur:</span> {{$oefening->Tijd}}</p>@endif
                        @if($oefening->Organisatie != "") <p><span class="strong">Organisatie:</span> {{$oefening->Organisatie}}</p>@endif
                        @if($oefening->VoorkomendeFouten != "")<p><span class="strong">Veel voorkomende fouten:</span> {{$oefening->VoorkomendeFouten}}</p>@endif
                        @if($oefening->MakkelijkerMaken != "")<p><span class="strong">Makkelijker maken:</span> {{$oefening->MakkelijkerMaken}}</p>@endif
                        @if($oefening->MoeilijkerMaken != "")<p><span class="strong">Moeilijker maken:</span>  {{$oefening->MoeilijkerMaken}}</p>@endif
                        @if($oefening->Hulpmiddelen != "")<p><span class="strong">Hulpmiddelen:</span> {{$oefening->Hulpmiddelen}}</p>@endif
                        @if($oefening->Tips != "") <p><span class="strong">Tips:</span> {{$oefening->Tips}}</p>@endif
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
