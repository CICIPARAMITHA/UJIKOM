<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AuthController extends Controller
{
    function login(){
        return view('admin.auth.login');
    }

    function loginAksi(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('admin')->attempt($credentials)) {
        
            return redirect('admin/dashboard')->with('success', 'Selamat datang kembali !');
        }else{
            return back()->with('danger', 'Login gagal coba ulangi kembali !');
        }
    }

    function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/auth/login');
    }
    
}
