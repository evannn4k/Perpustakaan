<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Book\AdminBookCreateRequest;
use App\Http\Requests\Admin\Author\AdminAuthorCreateRequest;

class BookController extends Controller
{
    public function book()
    {
        return view("content.admin.book.index");
    }

    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();

        return view("content.admin.book.create", [
            "categories" => $categories,
            "authors" => $authors
        ]);
    }

    public function store(AdminBookCreateRequest $request)
    {
        $data = $request->validated();

        $file = $request->file("cover");
        $filename = time() ."-". $file->getClientOriginalName();

        $path = "images/book/";
        $store = $file->storeAs($path, $filename);

        $book = Book::create($data);

        if($book && $store) {
            return redirect()->route("admin.book.index")->with("success", "Berhasil menambahkan buku!!");
        }

        return $filename;
    }

    public function edit()
    {
        return view("content.admin.book.edit");
    }
}
