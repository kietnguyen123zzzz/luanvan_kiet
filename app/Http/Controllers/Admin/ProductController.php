<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
        return view('admin.product.create');
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
        return view('admin.product.store');
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
        return view('admin.product.edit');
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
        return view('admin.product.update');
    }

    /**
     * Xóa tài nguyên đã chỉ định khỏi bộ lưu trữ.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        return view('admin.product.destroy');
    }
}