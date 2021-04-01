<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirect_name = 'profile';

    # Post Login method
    public function store(LoginRequest $request)
    {
        if( Auth::attempt($request->only(['email', 'password'])) )
            return redirect()->route($this->redirect_name);

        return redirect()
            ->back()
            ->withErrors(['message' => 'Please check your email and password']);
    }
}
