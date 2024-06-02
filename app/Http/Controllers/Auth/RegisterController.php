<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', ['title' => 'Register']);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:dns', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8',],
            'phone' => ['required', 'string', 'max:13', 'min:8'],
        ]);

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'phone'     => $request->phone
        ]);

        if ($user) {
            return redirect()->route('login.index')
                ->with('success', 'Registrasi berhasil! Silahkan Login');
        } else {
            return back()->with('error', 'Registrasi gagal! Silahkan coba lagi');
        }
    }
}
