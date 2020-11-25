<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Oefening aanpassen</title>
    <style>
        body, html {
            height: 100%;
            background-repeat: no-repeat;
            background-color: #F78B14;
        }
        .fulldiv {
            background-color: #F7F7F7;

            /* just in case there no content*/
            padding: 20px;
            margin: 50px;

            /* Shaduw en ronde borders */
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .center {
            text-align: center;
        }
        .contentdiv{
            background-color: #F2F2F2;
            padding: 10px;
            margin: 25px;

            /* Shaduw en ronde borders */
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
<div class="fulldiv">
    <h1 class="center">Oefening aanpassen:</h1>
    <form action="/EditOefening" method="put">
        @csrf
        <div class="contentdiv center">
                Naam oefening: <input type="text" name="titel" value="{{$oefening->Titel}}" required> * Verplicht<p>
                Doelgroep: <select name="doelgroep" required ><option>Jongste Jeugd</option><option value="Onderbouw">Onderbouw</option><option value="Bovenbouw / Senioren">Bovenbouw / Senioren</option></select> * Verplicht<p>
                Domein: <select name="domein" required><option>Fysiek</option><option>Techniek</option><option>Tactiek</option><option>Mentaal</option></select> * Verplicht<p>
                Sector: <select name="sector" required><option>Sector 1</option><option>Sector 2</option></select> * Verplicht<p>
                Subsector: <select name="subsector" ><option>Subsector 1</option><option>Subsector 2</option></select> <p>
                Leerfase: <select name="leerfase" required><option>Aanleren</option><option>Oefenen</option><option>Testen</option></select> * Verplicht<p>
                Trainingsonderdeeld: <select name="trainingonderdeel"><option>Warming up</option><option>Kern 1</option><option>Kern 2</option><option>Spel</option><option>Afsluiting</option></select> <p>
                Spelfase: <select name="spelfase"><option>BB Uitverdedigen</option><option>BB Opbouwen</option><option>BB Aanvallen</option><option>BB Scoren</option><option>NBB Storen</option><option>NBB Vertragen</option><option>NBB Voorkomen</option><option>NBB Verijdelen</option></select> <p>
                Werkvorm: <select name="werkvorm"><option>oefenvorm</option><option>spelvorm</option><option>wedstrijdvorm</option></select><p>
                Moeilijkheidsgraad: <select name="moeilijkheidsgraad" required><option>Makkelijk</option><option>Middelmatig</option><option>Moeilijk</option></select> * Verplicht<p>
                Doel:  <br> <textarea id="" cols="50" rows="5" name="doel">{{$oefening->Doel}}</textarea> <p>
                Tijdsduur (Min):   <input type="number" min="1" max="99" name="tijd" required value="{{$oefening->Tijd}}"> * Verplicht<p>
                Afbeelding link: <input type="text" name="imagelink" value="{{$oefening->ImageLink}}"> <p>
                Video link: <input type="text" name="videolink" value="{{$oefening->VideoLink}}"> <p>
                Organisatie:  <br> <textarea id="" cols="50" rows="5" name="organisatie">{{$oefening->Organisatie}}</textarea> <p>
                Veel voorkomende fouten:  <br> <textarea id="" cols="50" rows="5" name="voorkomendefouten">{{$oefening->VoorkomendeFouten}}</textarea> <p>
                Aandachtspunten:  <br> <textarea id="" cols="50" rows="5" name="aandachtspunten">{{$oefening->Aandachtspunten}}</textarea> <p>
                Makkelijker maken:  <br> <textarea id="" cols="50" rows="5" name="makkelijkermaken">{{$oefening->MakkelijkerMaken}}</textarea> <p>
                Moeilijker maken:  <br> <textarea id="" cols="50" rows="5" name="moeilijkermaken" >{{$oefening->MoeilijkerMaken}}</textarea> <p>
                Hulpmiddelen:  <br> <textarea id="" cols="50" rows="5" name="hulpmiddelen">{{$oefening->Hulpmiddelen}}</textarea> <p>
                Tips:  <br> <textarea id="" cols="50" rows="5" name="tips">{{$oefening->Tips}}</textarea>
                <input type="hidden" name="auteur" value="{{Auth::user()->voornaam}}"> <p>
        </div>
        <div class="contentdiv center">
            <input type="submit" value="Opslaan" name="" id="">
        </div>
    </form>
</div>
</body>
</html>
