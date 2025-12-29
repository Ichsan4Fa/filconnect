<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function toHalamanRegister(){
        return view ('halamanRegister');
    }
    public function mendaftarAkun(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:students|max:25',
            'password' => 'required|min:8|max:255',
        ],
            [
                'email.reqired' => "Email harus diisi",
                'email.email' => "Email tidak valid atau belum terdaftar",
                'email.unique' => "Email sudah terdaftar",
                'password.required' => "Password harus diisi",
                'password.min' => "Password terdiri dari minimal 8 karakter",
            ]
        );

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        Student::create($validatedData);

        return redirect('/halamanLogin')->with('success', 'Pendaftaran Akun Berhasil');
    }
}
