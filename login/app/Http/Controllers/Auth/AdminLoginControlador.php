<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginControlador extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($credentials, $request->remember)){
            return redirect()->intended(route('admin.index'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function index(){
        return view('auth.login-admin');
    }
}
