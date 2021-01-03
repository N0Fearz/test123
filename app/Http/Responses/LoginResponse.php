<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        
        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade

        $redirectTo = Auth::user()->role == 1 ? config('fortify.dashboard') : config('fortify.home');
        if(Auth::user()->role == 1){
            $home = config('fortify.dashboard');
        }
        elseif(Auth::user()->role == 2){
            $home = config('fortify.home');
        }
        else{
            $home = config('fortify.home');
        }

        return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->intended($redirectTo);
    }

}