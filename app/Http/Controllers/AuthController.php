<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function attemptLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            session([
                'user_id' => auth()->id(),
                'is_logged_in' => true
            ]);

            return response()->json([
                'status' => 'success',
                'redirect' => url('/dashboard')
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
