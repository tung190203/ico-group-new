<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'login'    => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        $login = $request->input('login');
        $password = $request->input('password');

        // Xác định field login
        $field = filter_var($login, FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'username';

        $credentials = [
            $field    => $login,
            'password' => $password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return back()
            ->withErrors([
                'login_error' => 'Email/Username hoặc mật khẩu không đúng',
            ])
            ->withInput($request->only('login'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
