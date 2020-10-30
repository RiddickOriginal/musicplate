<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{
    public function login(AuthRequest $request){
        $credential = $request->only('email', 'password');

        if(Auth::attempt($credential, true)){
            return redirect()->route('home');
        }
        return redirect()->route('authorization');
    }
}
