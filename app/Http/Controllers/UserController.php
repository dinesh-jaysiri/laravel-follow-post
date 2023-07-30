<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
    public function register(Request $request){

        $incomingField = $request->validate([
            'username'=>['required', 'min:3', 'max:20', Rule::unique('users','username')],
            'email'=> ['required', 'email', Rule::unique('users','email')],
            'password'=> ['required', 'min:4', 'confirmed']
        ]);

        $incomingField['password'] = bcrypt($incomingField['password']);

        User::create($incomingField);

        return "Register success";

    }
}
