<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Nieuwe Oefening</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        body {
            font-family: "Roboto", Helvetica, Arial, sans-serif;
            font-weight: 100;
            font-size: 12px;
            line-height: 30px;
            background-color: #F78B14;
        }

        .container {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }

        #nieuweOefening input[type="text"],
        #nieuweOefening input[type="email"],
        #nieuweOefening input[type="tel"],
        #nieuweOefening input[type="url"],
        #nieuweOefening select,
        #nieuweOefening textarea,
        #nieuweOefening button[type="submit"] {
            font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
        }

        #nieuweOefening {
            background: #F9F9F9;
            padding: 25px;
            margin: 150px 0;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        #nieuweOefening h3 {
            display: block;
            font-size: 30px;
            font-weight: 300;
            margin-bottom: 10px;
        }

        #nieuweOefening h4 {
            display: block;
            font-size: 13px;
            font-weight: 400;
        }

        fieldset {
            border: medium none !important;
            margin: 0 0 10px;
            min-width: 100%;
            padding: 0;
            width: 100%;
        }

        #nieuweOefening input[type="text"],
        #nieuweOefening input[type="email"],
        #nieuweOefening input[type="tel"],
        #nieuweOefening input[type="url"],
        #nieuweOefening select,
        #nieuweOefening textarea {
            width: 100%;
            border: 1px solid #ccc;
            background: #FFF;
            margin: 0 0 5px;
            padding: 10px;
        }

        #nieuweOefening input[type="text"]:hover,
        #nieuweOefening input[type="email"]:hover,
        #nieuweOefening input[type="tel"]:hover,
        #nieuweOefening input[type="url"]:hover,
        #nieuweOefening select:hover,
        #nieuweOefening textarea:hover {
            -webkit-transition: border-color 0.3s ease-in-out;
            -moz-transition: border-color 0.3s ease-in-out;
            transition: border-color 0.3s ease-in-out;
            border: 1px solid #aaa;
        }

        #nieuweOefening textarea {
            height: 100px;
            max-width: 100%;
            resize: none;
        }

        #nieuweOefening button[type="submit"] {
            cursor: pointer;
            width: 100%;
            border: none;
            background: #F78B14;
            color: #FFF;
            margin: 0 0 5px;
            padding: 10px;
            font-size: 15px;
        }

        #nieuweOefening button[type="submit"]:hover {
            background: #4CAF50;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }

        #nieuweOefening button[type="submit"]:active {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        #nieuweOefening input:focus,
        #nieuweOefening textarea:focus {
            outline: 0;
            border: 1px solid #aaa;
        }

        ::-webkit-input-placeholder {
            color: #888;
        }

        :-moz-placeholder {
            color: #888;
        }

        ::-moz-placeholder {
            color: #888;
        }

        :-ms-input-placeholder {
            color: #888;
        }
    </style>
</head>
<body>
<div class="container">
    @csrf
    <form id="nieuweOefening" action="/NieuweOefening" method="post">
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
            <h4>Domein: *</h4>
            <select name="domein" required><option>Fysiek</option><option>Techniek</option><option>Tactiek</option><option>Mentaal</option></select>
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
            <h4>Doel: *</h4>
            <textarea id="" cols="50" rows="5" name="doel"></textarea> <p>
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
