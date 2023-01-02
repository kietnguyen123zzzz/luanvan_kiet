<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Hiển thị danh sách tài nguyên.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('.admin.login.index');
       
    }
    /**
     * Hiển thị biểu mẫu để tạo tài nguyên mới.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.login.create');
    }

    public function username()
{
    return 'username';
}

}