<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
        {
            return view('auth/register');
        }


    public function registerSave(Request $request) 
        {
            Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ])->validate();

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'level' => 'user'
            ]);

            return redirect()->route('login');

        }

        public function login() 
        {
            return view('auth/login');
        }

        public function loginAction(Request $request) 
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        $user = Auth::user();
        if ($user->level == 'admin') {
            return redirect()->route('dashboard'); // Admin ke dashboard
        } elseif ($user->level == 'user') {
            return redirect()->route('view.index'); // Arahkan User ke halaman index
        }

        return redirect('/'); // Default redirect jika tidak ada level
    }


            public function logout(Request $request)
            {
                Auth::guard('web')->logout();

                $request->session()->invalidate();

                return redirect('/');
            }


            public function profile()
            {
                return view('profile');
            }
        }

