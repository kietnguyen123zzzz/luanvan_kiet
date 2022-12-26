<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Hiển thị danh sách tài nguyên.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }

    /**
     * Hiển thị biểu mẫu để tạo tài nguyên mới.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Lưu trữ một tài nguyên mới được tạo trong bộ lưu trữ.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($request->all());
        return view('admin.category.store');
    }

    /**
     * Hiển thị tài nguyên được chỉ định.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.category.show');
    }

    /**
     * Hiển thị biểu mẫu để chỉnh sửa tài nguyên được chỉ định.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit');
    }

    /**
     * Cập nhật tài nguyên được chỉ định trong bộ lưu trữ.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        return view('admin.category.update');
    }

    /**
     * Xóa tài nguyên đã chỉ định khỏi bộ lưu trữ.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
      
        $category->delete();
      
    }
}
