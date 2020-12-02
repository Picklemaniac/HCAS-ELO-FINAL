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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<body>
<div class="fulldiv">

    <div class="contentdiv">
        <h1>Welkom {{ucfirst(Auth::user()->voornaam)}} </h1>
    </div>

        <div class="flex-container">
            <div class="columndiv">
                <h4>Kies Domein</h4>
                <hr>
                <div class="domeinen">
                        <p><button id="Fysiek" class="nicebtn domeinbtn">1 Fysiek</button></p>
                        <p><button id="Techniek" class="nicebtn domeinbtn">2. Techniek</button></p>
                        <p><button id="Tactiek" class="nicebtn domeinbtn">3. Tactiek</button></p>
                </div>
            </div>
            <div class="columndiv">
                <h4>Selecteer Oefening</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                <div class="oefeningen">

                </div>
            </div>

            <div class="columndiv">
                <h4>Geselecteerde Oefeningen</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <div class="geselecteerd">

                </div>
            </div>

            <div class="columndiv">
                <h4>Planning</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <form action="/nieuweTraining">

                    <p><span>Team:</span></p>
                    <select name="teamnummer">
                        <option>H1</option>
                        <option>H2</option>
                        <option>H3</option>
                    </select>

                    <p><span>Training Naam</span></p>
                    <input type="text" name="TrainingNaam"/>
                    <p><span>Planning:</span></p>
                    <input type="date" id="start" name="starttijd">
                    <p><button class="nicebtn">Training Aanmaken</button></p>
                </form>
            </div>
        </div>
    <div class="contentdiv">
        <h2>[Agenda]</h2>
    </div>
    </div>
</body>
<script>
    function getoefeningen() {

        var domein = $( "button.active" ).attr('id');

        $.ajax({
            url: "/api/oefeningenDomein",
            type: 'GET',
            data: { Domein: domein },
            beforeSend: function() {
                //verwijder alle oefeningen
                $(".oefeningen").empty();
                //laat het laad icoontje zien
                $(".oefeningen").append('<div class="loader"><span>Laden...</span></div>');
            },
            success:function (result){
                $(".oefeningen").empty();
                var data = $.parseJSON(JSON.stringify(result));
                $.each(data, function(key, value) {
                    $('.oefeningen').append($('<p><div class="oefening" id="oefening"><span> ' + value.Titel + '</span><br><span> ' + value.Tijd + ' minuten</span></div></p>'));
                });

            }});
    }
    $(document).ready(function() {
        $(".domeinbtn").click(function(event) {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
            else {
                $('.domeinbtn').removeClass("active");
                $(this).toggleClass("active");
                getoefeningen();
            }
        });
    })
</script>
</html>
