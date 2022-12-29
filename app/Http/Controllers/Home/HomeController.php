<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Hiển thị danh sách tài nguyên.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
       
        $sanphamcua = Product::where('category_id', 1);
        $sanphamtom = Product::where('category_id', 2);
        $sanphamca = Product::where('category_id', 7);
        return view('.home.index',['categories' => $categories,'sanphamcua' => $sanphamcua,'sanphamtom' => $sanphamtom,'sanphamca' => $sanphamca]);
    }

    
}
