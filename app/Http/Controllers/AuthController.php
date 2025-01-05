<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function login(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'email' => 'required|email|max:100',
            'password' => Password::min(4)
                            // ->letters()
                            // ->mixedCase()
                            // ->numbers()
                            // ->symbols()
                            // ->uncompromised(3),
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->is_admin) {
                return redirect('/dashboard');
            } else {
                return redirect('/');
            }
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
