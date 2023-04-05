<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class userController extends Controller
{
    // view register
    public function register(Request $request)
    {
        return view('/logreg/register');
    }
    //proses validasi register
    public function doRegister(Request $request){
        $request->validate([
            'name' => ['required','string','max:50'],
            'email' => ['required','string','max:50','email','unique:'.User::class],
            'password' => ['required','confirmed','max:50',Rules\Password::defaults()],
        ]);

        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect('/logreg/login');
    }
    // view login
    public function login(Request $request)
    {
        return view('/logreg/login');
    }
    // proses validasi login
    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'name' =>  ['required','string','max:50'],
            'password' =>  ['required',Rules\Password::defaults()],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->withErrors([
            'name' => 'Username and password combination not found'
        ])->onlyInput('name');
    }
    //  logout
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
