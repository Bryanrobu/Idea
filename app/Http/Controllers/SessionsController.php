<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request) {
        $attributes = request()->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (!Auth::attempt($attributes)) {
            return back()
                ->withErrors(['password' => 'We were unable to authenticate using the provided credentials'])
                ->withInput();
        }

        $request->session()->regenerate();

        return redirect()->intended('/')->with('success', 'You have successfully logged in.');
    }

    public function destroy() {
        auth()->logout();

        return redirect('/');
    }
}
