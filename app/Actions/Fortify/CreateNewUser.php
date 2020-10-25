<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'lidnummer' => ['required', 'integer', Rule::unique(User::class)],
            'teamnummer' => ['required', 'string', 'max:255'],
            'voornaam' => ['required', 'string', 'max:255'],
            'tussenvoegsel' => ['string', 'max:255'],
            'achternaam' => ['required', 'string', 'max:255'],
        ])->validate();

        return User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'lidnummer' => $input['lidnummer'],
            'teamnummer' => $input['teamnummer'],
            'voornaam' => $input['voornaam'],
            'tussenvoegsel' => $input['tussenvoegsel'],
            'achternaam' => $input['achternaam'],
        ]);
    }
}
