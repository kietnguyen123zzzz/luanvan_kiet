<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Hiển thị danh sách tài nguyên.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', ['products' => $products]);
        
    }

    /**
     * Hiển thị biểu mẫu để tạo tài nguyên mới.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',['categories' => $categories]);
    }

    /**
     * Lưu trữ một tài nguyên mới được tạo trong bộ lưu trữ.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect("/admin/products");
    }

    /**
     * Hiển thị tài nguyên được chỉ định.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.show');
    }

    /**
     * Hiển thị biểu mẫu để chỉnh sửa tài nguyên được chỉ định.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        
        return view('admin.product.edit', ['product' => $product,'categories' => $categories]);
    }

    /**
     *Cập nhật tài nguyên được chỉ định trong bộ lưu trữ.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect("/admin/products");
    }

    /**
     * Xóa tài nguyên đã chỉ định khỏi bộ lưu trữ.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        
        $product->delete();
        return redirect("/admin/products");
        return view('admin.product.destroy');
    }
}
