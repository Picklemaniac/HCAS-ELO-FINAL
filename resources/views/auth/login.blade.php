<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Inloggen</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="{{ asset('css/logincss/login.css') }}" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <div class="card hockeyimage">
        <h1 class="banner">Hockeyclub Asten-someren</h1>
    <div class="card card-container">

        <div class="col-md-8">
            <div class="card-header input">
                <img style="width: 250px;" src="https://lh3.googleusercontent.com/-2wRKG2ArTPY-TDH57fOrJeU_KVsm368dyJEyp2uddqaHU9bA-1t04wUsFns7JR6aHgZbQ=s170"/> Inloggen
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6 input">
                            <input placeholder="Gebruikersnaam" id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus>

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 input">
                            <input id="password" placeholder="Wachtwoord" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-8 offset-md-4 center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>
