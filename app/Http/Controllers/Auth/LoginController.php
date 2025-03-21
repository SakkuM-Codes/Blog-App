<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
   public function login(Request $request)
    {
        
        $email=$request->email; 
        $password=$request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $request->session()->regenerate();
            return redirect('/home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        return redirect('/register');
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    } 

    function profile()
    {

    }
}
