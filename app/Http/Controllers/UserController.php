<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "<h1>I am From controller file</h1>";
    }
    public function userInfo(){
        return view("userinfo");
    }
    public function passData(string $id){
        return view('passdata',['id'=>$id]);
    }
    public function blogFunck(){
        return view('blog');
    }
}
