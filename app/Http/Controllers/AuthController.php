<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthVerifyRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function verify(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::guard("admin")->attempt(["email" => $request->email, "password" => $request->password, "role" => "admin"])) {
            $request->session()->regenerate();
            return redirect()->intended("/admin/dashboard");
        } else if (Auth::guard("user")->attempt(["email" => $request->email, "password" => $request->password, "role" => "user"])) {
            $request->session()->regenerate();
            return redirect()->intended("/user/dashboard");
        } else {
            return redirect()->route("login")->with("error", "Wrong email or password");
        }
    }

    public function logout()
    {
        if (Auth::guard("admin")->check()) {
            Auth::guard("admin")->logout();
        } else if (Auth::guard("user")->check()) {
            Auth::guard("user")->logout();
        }

        return redirect(route("index"));
    }
}
