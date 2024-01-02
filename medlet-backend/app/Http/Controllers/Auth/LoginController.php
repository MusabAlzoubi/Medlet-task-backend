<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (FacadesAuth::attempt($credentials)) {
            return redirect()->intended('/'); 
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Invalid credentials']);
    }
}
