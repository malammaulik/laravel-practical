<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function registerProcess(RegisterRequest $request){
        $request->password = Hash::make($request->password);
        User::create($request->all());
        $request->session()->flash('message', "Registration successfully.");
        return redirect()->route('login');
    }

    public function loginProcess(LoginRequest $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->flash('message', "Login successfully.");
            return redirect()->route('dashboard');
        } else {
            $request->session()->flash('error', "Entered email address or password doesn't match with the records.");
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("login");
    }
}