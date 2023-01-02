<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function check(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            
        ];

        if (Auth::attempt($data)) {
            $data = [
                'username' => $request->username,
                'password' => $request->password,
                'level' => 1,
            ];
        } else {
            Auth::logout();
        }
        if (Auth::check()) {
            // Đã đăng nhập.
        } else {
            //chưa đăng nhập.
        }
        Auth::user()->name;
        Auth::id();
    }
}