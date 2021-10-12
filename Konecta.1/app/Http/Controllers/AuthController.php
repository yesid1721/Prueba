<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthLoginRequest;

class AuthController extends Controller
{
    //
    public function log()
    {
        return view('user.login');
    }

    public function login(AuthLoginRequest $request)
    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {   
            return redirect()->route('client.index');
        }

        return back()
            ->withErrors(['email' => 'Datos incorrectos']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }
}
