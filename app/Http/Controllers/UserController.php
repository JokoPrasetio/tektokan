<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function Login(){
        $data = [
            'title' => 'Login | Tektokan'
        ];
        return view('Login.index', $data);
    }

    public function register(){
        $data = [
            'title' => 'Register | Tektokan'
        ];
        return  view('Login.register', $data);
    }

    public function AuthenticateRegister(Request $request){
        try {
            $validate = $request->validate([
                'name' => 'required',
                'username' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ]);
            $validate['username'] = request('username');
            $validate['password'] = Hash::make($validate['password']);
            User::create($validate);
            return redirect('/login')->with(['alertSuccess' => 'Success create user']);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }

    public function AuthenticateLogin(){
        try {
            $validate= request()->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            if(Auth::attempt($validate)){
                request()->session()->regenerate();
                return redirect()->intended('/');
            }
            return back()->with(['alertError' => 'Email or password wrong']);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }

    public function indexUser(){
        $data = [
            'title' => 'User | TektokanYok',
        ];
        return view('Dashboard.user.index', $data);
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }

    public function DatatableUser(){
        return User::all();
    }
}
