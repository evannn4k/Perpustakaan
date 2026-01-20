<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\AdminCategoryCreateRequest;
use App\Http\Requests\Admin\Category\AdminCategoryUpdateRequest;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = Category::all();

        return view("content.admin.category.index", [
            "categories" => $categories
        ]);
    }

    public function create()
    {
        return view("content.admin.category.create");
    }

    public function store(AdminCategoryCreateRequest $request)
    {
        $data = $request->validated();

        $category = Category::create($data);

        if ($category) {
            return redirect()->route("admin.category.index")->with("success", "Berhasil menambahkan kategori!!");
        }
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view("content.admin.category.edit", [
            "category" => $category
        ]);
    }

    public function update(AdminCategoryUpdateRequest $request)
    {
        $data = $request->validated();

        $category = Category::findOrFail($request->id);

        if ($category) {
            $category->update($data);

            return redirect()->route("admin.category.index")->with("success", "Berhasil mengubah kategori!!");
        }
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);

        if ($category) {
            $category->delete();

            return redirect()->route("admin.category.index")->with("success", "Berhasil menghapus kategori!!");
        }
    }
}
