<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //usercontroller
    public function login(Request $request) {
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if (Auth::attempt(['username' => $incomingFields['loginname'], 'password' =>$incomingFields['loginpassword'] ])) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors(['login' => 'Invalid login credentials.']);
    }
   

    public function logout() {
     //   auth()->logout();
        return redirect('/login');
    }

    public function register(Request $request) {
        $incomingFields = $request->validate([
            'username' => ['required', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'max:10'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        Auth::login($user);
        return redirect('/');
    }
}
