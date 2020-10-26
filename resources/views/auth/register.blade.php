<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Registreren</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="lidnummer"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Lidnummer') }}</label>

                            <div class="col-md-6">
                                <input id="lidnummer" type="text"
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
                            <label for="teamnummer"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Team') }}</label>

                            <div class="col-md-6">
                                <input id="teamnummer" type="text"
                                       class="form-control @error('teamnummer') is-invalid @enderror" name="teamnummer"
                                       value="{{ old('teamnummer') }}" required>

                                @error('teamnummer')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="voornaam"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Voornaam') }}</label>

                            <div class="col-md-6">
                                <input id="voornaam" type="text"
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
                            <label for="tussenvoegsel"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Tussenvoegsel') }}</label>

                            <div class="col-md-6">
                                <input id="tussenvoegsel" type="text"
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
                            <label for="achternaam"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Achternaam') }}</label>

                            <div class="col-md-6">
                                <input id="achternaam" type="text"
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
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>Emailadress is al in gebruik</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Gebruikersnaam') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text"
                                       class="form-control @error('username') is-invalid @enderror" name="username"
                                       value="{{ old('username') }}">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord Herhalen') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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

