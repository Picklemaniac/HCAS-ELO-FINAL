<!DOCTYPE html>
<html>
<title>Dashboard Trainers</title>
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
    h1, h2, h4 {
        text-align: center;
    }

    h6 {
        margin-left: 20px;
        margin-bottom: 10px;
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
    .contentdiv{
        background-color: #F2F2F2;
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
    .columndiv {
        width: 23%;
        padding: 20px;
        margin: 5px;
        background-color: #F2F2F2;
        alignment: left;
        /* Shaduw en ronde borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }
    .columndiv2 {
        width: 23%;
        padding: 20px;
        margin: 5px;
        background-color: #F2F2F2;
        alignment: left;
        /* Shaduw en ronde borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .flex-container {
        display: flex;
        background-color: #F2F2F2;
        padding: 20px;
        margin: 50px;
        flex-wrap: wrap;
    }

    .flex-container > div {
        width: 24%;
        padding: 20px;
        margin: 5px;
        background-color: #F2F2F2;
        alignment: left;
        /* Shaduw en ronde borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }

    @media screen and (max-width: 992px) {
        .columndiv {
            flex: 50%;
        }
    }

    /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .flex-container {
            flex-direction: column;
        }
    }

    .nicebtn {
        background-color: orange; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        display: inline-block;
        font-size: 14px;
        width: 100%;
        text-decoration: none;
    }

    .nicebtn:hover {
        background-color: #fff199;
        color: white;
    }

    .oefening {
        background-color: #ffc04c;
        color: white;
        border-radius: 25px;
        border: 2px solid #ffc04c;
        text-align: center;
    }
</style>

<script>

</script>

<body>
<div class="fulldiv">

    <div class="contentdiv">
        <h1>Welkom {{ucfirst(Auth::user()->voornaam)}} </h1>
    </div>

        <div class="flex-container">
            <div class="columndiv">
                <h4>Kies Domein</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <div id="fysiek">
                   <p><a href="/trainerDashboard?domein=Fysiek" class="nicebtn">1 Fysiek</a></p>
                </div>
                <div id="techniek">
                   <p><a href="/trainerDashboard?domein=Techniek" class="nicebtn" onclick="">2. Techniek</a></p>
                </div>
                <div id="tactiek">
                   <p><a href="/trainerDashboard?domein=Tactiek" class="nicebtn">3. Tactiek</a></p>
                </div>
            </div>
            <div class="columndiv">
                <h4>Selecteer Oefening</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                @foreach($oefeningen as $o)
                    <div class="oefening">
                        <span>{{$o->Titel}}</span> <br>
                        <span>{{$o->Tijd}} minuten</span> <br>
                    </div>
                @endforeach

            </div>

            <div class="columndiv">
                <h4>Geselecteerde Oefeningen</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">

            </div>

            <div class="columndiv">
                <h4>Planning</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <form action="/nieuweTraining">
                    <p><span>Training Naam</span></p>
                    <input type="text"/>
                    <p><span>Planning:</span></p>
                    <input type="date" id="start" name="trip-start">
                    <p><button class="nicebtn">Training Aanmaken</button></p>
                </form>
            </div>
        </div>
    <div class="contentdiv">
        <h2>[Agenda]</h2>
    </div>
    </div>
</body>
</html>
