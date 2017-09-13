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
    
    /**
     * パスワード確認できたらメニューに飛ばす
     * @return type
     */
    public function login_commit(){
        $server=request()->server();
        
        //リモートホスト許可チェック
        
        //パスワード許可チェック
        $password= request("password");
        
        if(config("admin.password")==$password){
            auth()->loginUsingId(1);
        }        
        
        return redirect("admin/menu")
            ->with("message","ログインしました");        
    }

    public function menu(){
        return view("admin.menu");        
    }
}
