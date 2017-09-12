<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
class AdminController extends Controller
{
    public function __construct(){
    }

    public function login(){        
        return view("admin.login");
    }
    
    public function login_commit(){
        return redirect("admin_menu");        
    }

    public function admin_menu(){
        return view("admin.menu");        
    }
}
