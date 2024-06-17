<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('pages.login');
    }

    public function loginProcess(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $request->session()->regenerate();
            if($user->level == 'admin'){
                return redirect('/admin');
            }else if($user->level == 'client'){
                return redirect()->intended('homepage');
            }
            return redirect()->intended('/');
        }

        return back()->withInput()->withErrors(['login_failed' => 'Email atau Password salah']);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(){
        return view('pages.register');
    }

    public function registerProcess(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|string|max:25',
            'email' => 'required|string|email|max:60|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ],
        [
            'username.required' => 'Username wajib diisi!',
            'username.max' => 'Username tidak boleh lebih dari 25 karakter!',
            'email.unique' => 'Email sudah digunakan!',
            'password.min' => 'Password minimal 8 karakter!',
            'password.confirmed' => 'Password tidak sama'
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'client',
        ]);
        
        return redirect('login');
    }
}
