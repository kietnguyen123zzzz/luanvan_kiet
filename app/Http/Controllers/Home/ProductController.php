<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;
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
    public function show()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('.home.product',['categories' => $categories,'products' => $products]);
    }

    /**
     * Hiển thị danh sách tài nguyên.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Product $product)
    {
        $categories = Category::all();
        $category = Category::find($product->category_id);
      
        return view('.home.product_detail',['product' => $product, 'category' => $category,'categories' => $categories]);
    }
}


    

