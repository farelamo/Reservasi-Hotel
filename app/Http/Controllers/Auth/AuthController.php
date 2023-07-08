<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(!$user){
            alert()->error('Maaf','Email tidak ditemukan');
            return redirect('/login');
        }

        if(Auth::Attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            alert()->success('Selamat datang 🙏');
            return redirect('/dashboard');
        }

        alert()->error('Maaf','Password Salah');
        return redirect('/login');
    }

    public function logout()
    {
        auth()->logout();
        alert()->success('Success', 'Anda berhasil logout');
        return redirect('/login');
    }
}
