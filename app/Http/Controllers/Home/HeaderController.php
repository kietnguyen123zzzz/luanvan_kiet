<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;

use App\Models\Category;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Hiển thị danh sách tài nguyên.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $categories = Category::all();
        
        return view('.header',['categories' => $categories]);
    }

    
}


    

