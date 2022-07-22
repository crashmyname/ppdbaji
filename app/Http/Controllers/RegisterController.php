<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(request $request)
    {
        // $data = $request->all();
        // dd($data);
       $validatedData = $request->validate([
           'name' => 'required|max:255|unique:user',
           'email' => 'required|email|unique:user',
           'password' => 'required|max:255',
        //    'level' => 'default:user',
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);
       User::create($validatedData);
       $request->session()->flash('sukses', 'Registrasi Berhasil!!');
       return redirect('/login');
    }
}
