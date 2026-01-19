<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\AdminUserStoreRequest;

class UserController extends Controller
{
    public function user()
    {
        $users = User::orderBy("role")->get();

        return view("content.admin.user.index", [
            "users" => $users
        ]);
    }

    public function create()
    {
        return view("content.admin.user.create");
    }

    public function store(AdminUserStoreRequest $request)
    {
        $data = $request->validated();

        $checkEmail = User::where("email", $request->email)->first();

        if(!$checkEmail) {
            $password = $request->password;
            $data["password"] = bcrypt($password);

            User::create($data);

            return redirect()->route("admin.user.index")->with("success", "Berhasil menambahkan data pengguna!!");
        } else {
            return back()->withErrors(["email" => "Email sudah digunakan"])->withInput();
        }

    }

    public function edit()
    {
        return view("content.admin.user.edit");
    }
    
}
