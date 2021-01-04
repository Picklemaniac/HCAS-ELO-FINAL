<!DOCTYPE html>
<html>
<title>Dashboard Trainers</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="{{ asset('css/trainercss/trainer.css') }}" media="all" rel="stylesheet" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<body>
<div class="fulldiv">

    <div class="contentdiv">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Uitloggen</button>
        </form>
        <h1>Welkom {{ucfirst(Auth::user()->voornaam)}} </h1>
    </div>

        <div class="flex-container">
            <div class="columndiv">
                <h4>Kies Domein</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <div class="domeinen">
                        <p><button id="Fysiek" class="nicebtn domeinbtn">1 Fysiek</button></p>
                        <p><button id="Techniek" class="nicebtn domeinbtn">2. Techniek</button></p>
                        <p><button id="Tactiek" class="nicebtn domeinbtn">3. Tactiek</button></p>
                        <p><button id="Mentaal" class="nicebtn domeinbtn">4. Mentaal</button></p>
                </div>
            </div>
            <div class="columndiv">
                <h4>Selecteer Oefening</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <div class="oefeningen connectedSortable" id="sortable1" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 100%">

                </div>
            </div>

            <div class="columndiv">
                <h4>Geselecteerde Oefeningen</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <div class="geselecteerd connectedSortable" id="sortable2" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 100%">

                </div>
            </div>

            <div class="columndiv">
                <h4>Planning</h4>
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <form class="nieuwetraining" action="/nieuweTraining">
                    <input name="oefeningen" type="hidden" id="selected_oefeningen">
                    <p><span>Team:</span></p>
                    <select name="teamnummer">
                        @foreach($teams as $t)
                          <option>{{$t->TeamNaam}}</option>
                        @endforeach
                    </select>

                    <p><span>Training Naam</span></p>
                    <input type="text" name="trainingnaam" required/>
                    <p><span>Planning:</span></p>
                    <input type="datetime-local" id="start" name="starttijd">
                    <p><input type="submit" class="nicebtn" value="Training Aanmaken"/></p>
                </form>
            </div>
        </div>
    <div class="contentdiv w3-center">
        <h3>Alle Trainingen</h3>
        {!! $trainingen->appends(\Request::except('page'))->render() !!}
        <p></p>
        <table id="trainingen">
            <tr><td>Titel</td><td>Oefeningen</td><td>@sortablelink('created_at', 'Ingepland voor')</td><td>@sortablelink('TeamNummer', 'Team')</td><td>Acties</td></tr>
            @foreach($trainingen as $t)
                <tr>
                    <td>{{$t->TrainingNaam}}</td>
                    <td> ｜ @foreach($t->oefeningen as $o)<a href="/detailsOefeningen{{$o->OefeningNummer}}">{{$o->Titel}}</a> ｜ @endforeach</td>
                    <td>{{$t->startTijd}}</td>
                    <td>{{$t->TeamNummer}}</td>
                    <td><button onclick="window.location.href='/verwijderTraining{{$t->TrainingNummer}}'">Verwijderen</button></td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $( "#sortable1, #sortable2" ).sortable({
            connectWith: ".connectedSortable",
            update: function(event, ui) {
                createoefeningen();
            }
        }).disableSelection();
    });

    function getoefeningen() {

        var domein = $( "button.active" ).attr('id');

        $.ajax({
            url: "/api/oefeningenDomein",
            type: 'GET',
            data: { Domein: domein },
            beforeSend: function() {
                $(".oefeningen").empty();
                $(".oefeningen").append('<div class="loader"><span>Laden...</span></div>');
            },
            success:function (result){
                $(".oefeningen").empty();
                var data = $.parseJSON(JSON.stringify(result));
                $.each(data, function(key, value) {
                    $('.oefeningen').append($('<div style="margin: 20px" class="oefening connectedSortable" draggable="true" ondragstart="drag(event)"> ' +
                        '<input type="hidden" value="'+value.OefeningNummer+'"/>' +
                        '<span> ' + value.Titel + '</span>' +
                        '<br><span> ' + value.Tijd + ' minuten</span>' +
                        '</div>'));
                });

            }});
    }

    function createoefeningen() {
        var selected = $(".geselecteerd").children('.oefening').children('input');
        var vals = [];
        for(var i=0;typeof(selected[i])!='undefined';vals.push(selected[i++].getAttribute('value')));
        $("#selected_oefeningen").val(vals.join());
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
