<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Author\AdminAuthorCreateRequest;
use App\Http\Requests\Admin\Author\AdminAuthorUpdateRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author()
    {
        $authors = Author::all();

        return view("content.admin.author.index", [
            "authors" => $authors
        ]);
    }

    public function create()
    {
        return view("content.admin.author.create");
    }

    public function store(AdminAuthorCreateRequest $request)
    {
        $data = $request->validated();

        $author = Author::create($data);

        if ($author) {
            return redirect()->route("admin.author.index")->with("success", "Berhasil menambahkan penulis!!");
        }
    }

    public function edit($id)
    {
        $author = Author::findOrFail($id);

        return view("content.admin.author.edit", [
            "author" => $author
        ]);
    }

    public function update(AdminAuthorUpdateRequest $request)
    {
        $data = $request->validated();

        $author = Author::findOrFail($request->id);

        if ($author) {
            $author->update($data);

            return redirect()->route("admin.author.index")->with("success", "Berhasil mengubah penulis!!");
        }
    }

    public function delete($id)
    {
        $author = Author::findOrFail($id);

        if ($author) {
            $author->delete();

            return redirect()->route("admin.author.index")->with("success", "Berhasil menghapus penulis!!");
        }
    }
}
