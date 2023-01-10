<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Category;

class DangnhaphoivienController extends Controller
{
    /**
     * Hiển thị danh sách tài nguyên.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $categories = Category::all();
        return view('.home.dangnhaphoivien',['categories' => $categories]);
    }

    
}
