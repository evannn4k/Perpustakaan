<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\AdminUserStoreRequest;
use App\Http\Requests\Admin\User\AdminUserUpdateRequest;

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

        if (!$checkEmail) {
            $data["password"] = bcrypt($request->password);

            User::create($data);

            return redirect()->route("admin.user.index")->with("success", "Berhasil menambahkan data pengguna!!");
        } else {
            return back()->withErrors(["email" => "Email sudah digunakan"]);
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view("content.admin.user.edit", [
            "user" => $user
        ]);
    }

    public function update(AdminUserUpdateRequest $request)
    {
        $data = $request->validated();

        $user = User::findOrFail($request->id);

        if ($user) {
            if ($request->password) {
                $data["password"] = bcrypt($request->password);

                $user->update($data);
            } else {
                $data["password"] = $user->password;

                $user->update($data);
            }
            return redirect()->route("admin.user.index")->with("success", "Berhasil mengubah data pengguna!!");
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user) {
            $user->delete();

            return redirect()->route("admin.user.index")->with("success", "Berhasil menghapus data pengguna!!");
        }
    }
}
