<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Nieuwe Oefening</title>
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
<h1 class="center">Oefening toevoegen:</h1>
    <form action="/" method="post" >
        <div class="contentdiv center">
            Naam oefening: <input type="text"><p>
                Doelgroep: <select><option>Doelgroep 1</option><option>Doelgroep 2</option></select> <p>
                Domein: <select><option>Domein 1</option><option>Domein 2</option></select> <p>
                Sector: <select><option>Sector 1</option><option>Sector 2</option></select> <p>
                Subsector: <select><option>Subsector 1</option><option>Subsector 2</option></select> <p>
                Leerfase: <select><option>Aanleren</option><option>Oefenen</option><option>Testen</option></select> <p>
                Moeilijkheidsgraad: <select><option>Makkelijk</option><option>Middelmatig</option><option>Moeilijk</option></select> <p>
                Doel:  <br> <textarea id="" cols="50" rows="5"></textarea> <p>
                Tijdsduur (Min): <input type="text"> <p>
                Afbeelding link: <input type="text"> <p>
                Video link: <input type="text"> <p>
                Organisatie:  <br> <textarea id="" cols="50" rows="5"></textarea> <p>
                Veel voorkomende fouten:  <br> <textarea id="" cols="50" rows="5"></textarea> <p>
                Makkelijker maken:  <br> <textarea id="" cols="50" rows="5"></textarea> <p>
                Moeilijker maken:  <br> <textarea id="" cols="50" rows="5"></textarea> <p>
                Hulpmiddelen:  <br> <textarea id="" cols="50" rows="5"></textarea> <p>
                Tips:  <br> <textarea id="" cols="50" rows="5"></textarea>
        </div>
            <div class="contentdiv center">
        <input type="submit" value="Opslaan" name="" id="">
            </div>
    </form>
</div>
</body>
</html>
