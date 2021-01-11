<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Oefening aanpassen</title>
    <link href="{{ asset('css/authorcss/edit.css') }}" media="all" rel="stylesheet" type="text/css" />


</head>
<body>
<div class="container">
    <form id="oefeningaanpassen" action="/EditOefening{{$oefening->OefeningNummer}}" method="post">
        @csrf
        <h3>Oefening Aanpassen</h3>
        <h4>Overal waar een * staat is verplicht in te vullen</h4><br>
        <fieldset>
            <h4>Titel Oefening: *</h4>
            <input type="text" value="{{$oefening->Titel}}" name="titel" required><p>
        </fieldset>
        <fieldset>
            <h4>Doelgroep: *</h4>
            <select name="doelgroep" required><option>Jongste Jeugd</option><option>Onderbouw</option><option>Bovenbouw / Senioren</option></select>
        </fieldset>
        <fieldset>
            <h4>Domein: *</h4>
            <select name="domein" required><option>Fysiek</option><option>Techniek</option><option>Tactiek</option><option>Mentaal</option></select>
        </fieldset>
        <fieldset>
            <h4>Sector: *</h4>
            <input value="{{$oefening->Sector}}" placeholder="Sector" type="text" name="sector" required>
        </fieldset>
        <fieldset>
            <h4>Subsector: *</h4>
            <input value="{{$oefening->Subsector}}" type="text" placeholder="Subsector" name="subsector">
        </fieldset>
        <fieldset>
            <h4>Training Onderdeel: *</h4>
            <select name="trainingonderdeel"><option>Warming up</option><option>Kern 1</option><option>Kern 2</option><option>Spel</option><option>Afsluiting</option></select>
        </fieldset>
        <fieldset>
            <h4>Werkvorm: *</h4>
            <select name="werkvorm"><option>oefenvorm</option><option>spelvorm</option><option>wedstrijdvorm</option></select>
        </fieldset>
        <fieldset>
            <h4>Leerfase: *</h4>
            <select name="leerfase" required><option>Aanleren</option><option>Oefenen</option><option>Testen</option></select>
        </fieldset>
        <fieldset>
            <h4>Spelfase: *</h4>
            <select name="spelfase"><option>BB Uitverdedigen</option><option>BB Opbouwen</option><option>BB Aanvallen</option><option>BB Scoren</option><option>NBB Storen</option><option>NBB Vertragen</option><option>NBB Voorkomen</option><option>NBB Verijdelen</option></select>
        </fieldset>
        <fieldset>
            <h4>Moeilijkheidsgraad: *</h4>
            <select name="moeilijkheidsgraad" required><option>Makkelijk</option><option>Middelmatig</option><option>Moeilijk</option></select>
        </fieldset>
        <fieldset>
            <h4>Tijdsduur (min): *</h4>
            <input placeholder="1" value="{{$oefening->Tijd}}" type="number" min="1" max="99" name="tijd" required>
        </fieldset>
        <fieldset>
            <h4>Afbeelding Link: </h4>
            <input value="{{$oefening->ImageLink}}" placeholder="Afbeelding Link" type="text" name="imagelink">
        </fieldset>
        <fieldset>
            <h4>Video Link: </h4>
            <input value="{{$oefening->VideoLink}}" placeholder="Video Link" type="text" name="videolink">
        </fieldset>
        <fieldset>
            <h4>Veel Voorkomende Fouten: </h4>
            <textarea id="" cols="50" rows="5" name="voorkomendefouten">{{$oefening->VoorkomendeFouten}}</textarea>
        </fieldset>
        <fieldset>
            <h4>Tips: </h4>
            <textarea id="" cols="50" rows="5" name="tips">{{$oefening->Tips}}</textarea>
        </fieldset>
        <fieldset>
            <h4>Aandachtspunten: </h4>
            <textarea id="" cols="50" rows="5" name="aandachtspunten">{{$oefening->Aandachtspunten}}</textarea>
        </fieldset>
        <fieldset>
            <h4>Hulpmiddelen: </h4>
            <textarea id="" cols="50" rows="5" name="hulpmiddelen">{{$oefening->Hulpmiddelen}}</textarea>
        </fieldset>
        <fieldset>
            <h4>Organisatie: </h4>
            <textarea id="" cols="50" rows="5" name="organisatie">{{$oefening->Organisatie}}</textarea>
        </fieldset>
        <fieldset>
            <h4>Makkelijker Maken: </h4>
            <textarea id="" cols="50" rows="5" name="makkelijkermaken">{{$oefening->MakkelijkerMaken}}</textarea>
        </fieldset>
        <fieldset>
            <h4>Moeilijker Maken: </h4>
            <textarea id="" cols="50" rows="5" name="moeilijkermaken">{{$oefening->MoeilijkerMaken}}</textarea>
        </fieldset>
        <input type="hidden" name="auteur" value="{{Auth::user()->voornaam}}">
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="Bezig met uw verzoek te verwerken">Oefening Aanpassen</button>
        </fieldset>
    </form>
</div>
</body>
</html>
