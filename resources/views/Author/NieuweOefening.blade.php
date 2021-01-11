<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Nieuwe Oefening</title>
    <link href="{{ asset('css/authorcss/new.css') }}" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <form id="nieuweOefening" action="/NieuweOefening" method="post">
        @csrf
        <h3>Oefening Toevoegen</h3>
        <h4>Overal waar een * staat is verplicht in te vullen</h4><br>
        <fieldset>
            <input type="text" placeholder="Naam van de oefening *" name="titel" required><p>
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
            <input placeholder="Sector" type="text" name="sector" required>
        </fieldset>
        <fieldset>
            <input type="text" placeholder="Subsector" name="subsector">
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
            <input placeholder="1" type="number" min="1" max="99" name="tijd" required>
        </fieldset>
        <fieldset>
            <input placeholder="Afbeelding Link" type="text" name="imagelink">
        </fieldset>
        <fieldset>
            <input placeholder="Video Link" type="text" name="videolink">
        </fieldset>
        <fieldset>
            <h4>Veel Voorkomende Fouten: </h4>
            <textarea id="" cols="50" rows="5" name="voorkomendefouten"></textarea>
        </fieldset>
        <fieldset>
            <h4>Tips: </h4>
            <textarea id="" cols="50" rows="5" name="tips"></textarea>
        </fieldset>
        <fieldset>
            <h4>Aandachtspunten: </h4>
            <textarea id="" cols="50" rows="5" name="aandachtspunten"></textarea>
        </fieldset>
        <fieldset>
            <h4>Hulpmiddelen: </h4>
            <textarea id="" cols="50" rows="5" name="hulpmiddelen"></textarea>
        </fieldset>
        <fieldset>
            <h4>Organisatie: </h4>
            <textarea id="" cols="50" rows="5" name="organisatie"></textarea>
        </fieldset>
        <fieldset>
            <h4>Makkelijker Maken: </h4>
            <textarea id="" cols="50" rows="5" name="makkelijkermaken"></textarea>
        </fieldset>
        <fieldset>
            <h4>Moeilijker Maken: </h4>
            <textarea id="" cols="50" rows="5" name="moeilijkermaken"></textarea>
        </fieldset>
        <input type="hidden" name="auteur" value="{{Auth::user()->voornaam}}">
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="Bezig met uw verzoek te verwerken">Oefening Aanmaken</button>
        </fieldset>
    </form>
</div>
</body>
</html>
