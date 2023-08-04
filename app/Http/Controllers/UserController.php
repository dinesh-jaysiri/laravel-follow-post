<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function showRegisterPage(){
        return view("sign-up");
    }
    public function register(Request $request)
    {

        $incomingField = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:4', 'confirmed']
        ]);

        $incomingField['password'] = bcrypt($incomingField['password']);

        $user = User::create($incomingField);
        auth()->login($user);

        return redirect('/')->with('registersuccess', 'You have successfully registered and logged in.');

    }

    public function login(Request $request)
    {
        $incomingField = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $incomingField['email'] = strip_tags($incomingField['email']);
        $incomingField['password'] = strip_tags($incomingField['password']);

        auth()->attempt(['email' => $incomingField['email'], 'password' => $incomingField['password']]);

        if (auth()->check()) {
            $request->session()->regenerate();

        }

        return redirect('/')->with('loginfailed', 'Invalid login.');
    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('logoutsuccess', 'You are successfully loged out.');
    }
}