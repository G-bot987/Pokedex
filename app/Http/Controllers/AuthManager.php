<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login()
    {
        if (Auth::check()) {
            return redirect(route('pokedex'));
        }
        return view('logInPgs\login');
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('pokedex'));
        }
        return redirect(route('login'))->with("error", "login details are not valid");
    }

    function registration()
    {
        if (Auth::check()) {
            return redirect(route('home'));
        }
        return view('logInPgs\registration');
    }

    function registrationPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);
        if (!$user) {
            return redirect(route('registration'))->with("error", "registration failed");
        }
        return redirect(route('login'))->with("success", "registration successful please login");
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
