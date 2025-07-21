<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect('/');
    }

    public function APIregister(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create($validated);

        $token = $user->createToken($request->name);

        return [
            'user' => $user,
            'token' => $token->plainTextToken
        ];
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string'
        ]);
        
        if (Auth::attempt($validated))
        {
            $request->session()->regenerate();
            return redirect('/');
        }

        throw ValidationException::withMessages([
            'credentials' => 'Mauvais mot de passe bouffon'
        ]);
    }

    public function APIlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string'
        ]);
        
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return [
                'message' => 'The provided credentials are incorrect'
            ];
        }

        $token = $user->createToken($user->name);

        return [
            'user' => $user,
            'token' => $token->plainTextToken
        ];
    }

    public function APIlogout(Request $request)
    {
        $request->user()->tokens()->delete();

        return [
            'message' => 'You are loggged out.'
        ];
    }
}
