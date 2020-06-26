<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function index(){
        return view('font_end.index');
    }
    // Đăng nhập
    public function login(){
        return \view('font_end.login');
    }
    public function post_login(){
        return \view('font_end.login');
    }
    // Đăng ký
    public function register(){
        return \view('font_end.register');
    }
    public function post_register(){
        return \view('font_end.register');
    }
    // Đổi mật khẩu
    public function changepass(){
        return \view('font_end.changepass');
    }
    public function post_changepass(){
        return \view('font_end.login');
    }

    // Quên mật khẩu
    public function getpass(){
        return \view('font_end.forgetPassword');
    }
    public function post_getpass(){
        return \view('font_end.forgetPassword');
    }
    // contact us
    public function contact(){
        return \view('font_end.contact');
    }
    public function post_contact(){
        return \view('font_end.contact');
    }
}
