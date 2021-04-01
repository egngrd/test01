<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected $redirect_name = 'profile';

    public function store(RegisterRequest $request)
    {
        $user = new User();
        $user->fill( $request->validated() );
        $user->password = Hash::make($request->password);
        if($user->save())
            Auth::login($user);

        return redirect()->route($this->redirect_name);
    }


}
