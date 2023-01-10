<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
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
        
        return view('auth.login');
       
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

    public function adminLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->where('password', $password)->first();
        if($user)
        {
            return redirect('/admin/products');
        }else{
            return redirect()->back();
        }
        
    }

}