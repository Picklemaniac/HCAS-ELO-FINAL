<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Registreren</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="{{ asset('css/logincss/registercss.css') }}" media="all" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-container">
                <div class="card-header center">{{ __('Nieuw Acount Toevoegen') }}</div>
                <div class="card-body">
                    <form method="POST" action="/newUser">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 input">
                                <input id="lidnummer" type="text"
                                       placeholder="Lidnummer"
                                       class="form-control @error('lidnummer') is-invalid @enderror" name="lidnummer"
                                       value="{{ old('lidnummer') }}" required autofocus>

                                @error('lidnummer')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 input">
{{--                                <input id="teamnummer" type="text"--}}
{{--                                       placeholder="Teamnummer"--}}
{{--                                       class="form-control @error('teamnummer') is-invalid @enderror" name="teamnummer"--}}
{{--                                       value="{{ old('teamnummer') }}" required>--}}

                                <select name="teamnummer" id="teamnummer" >
                                    @foreach($teams as $t)
                                        <option>{{$t->TeamNaam}}</option>
                                    @endforeach
                                </select>


                                @error('teamnummer')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 input">
                                <input id="voornaam" type="text"
                                       placeholder="Voornaam"
                                       class="form-control @error('voornaam') is-invalid @enderror" name="voornaam"
                                       value="{{ old('voornaam') }}" required>

                                @error('voornaam')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 input">
                                <input id="tussenvoegsel" type="text"
                                       placeholder="Tussenvoegsel"
                                       class="form-control @error('tussenvoegsel') is-invalid @enderror"
                                       name="tussenvoegsel" value="{{ old('tussenvoegsel') }}">

                                @error('tussenvoegsel')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 input">
                                <input id="achternaam" type="text"
                                       placeholder="Achternaam"
                                       class="form-control @error('achternaam') is-invalid @enderror" name="achternaam"
                                       value="{{ old('achternaam') }}">

                                @error('achternaam')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       placeholder="e-Mail"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>Emailadress is al in gebruik</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Account Aanmaken') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

