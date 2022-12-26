<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;
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
       
        return view('.home.product_detail');
    }

    
}
