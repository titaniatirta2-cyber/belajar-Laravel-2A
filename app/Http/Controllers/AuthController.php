<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function cek(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Pakai first() agar kalau tidak ketemu tidak langsung 404
        $data = User::where('email', $request->email)->first();

        if ($data && Hash::check($request->password, $data->password)) {
            session([
                'email' => $data->email,
                'nama' => $data->nama,
                'role' => $data->role,
                'logged_in' => true,
            ]);

            return redirect('/dashboard');
        }

        return redirect('/login')->with('error', 'Email atau password salah.');
    }
}