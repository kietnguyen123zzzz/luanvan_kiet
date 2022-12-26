<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;
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
       
        return view('.home.index');
    }

    
}
