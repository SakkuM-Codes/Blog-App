<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

     public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {       

        $user=new User();
        $user->name=$request->name;
        $user->user_name=$request->user_name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        return redirect()->route('login')
        ->with('success','Registered Your User Details');
    }

}
