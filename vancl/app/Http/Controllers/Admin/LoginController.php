<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Request as R;
use Auth;
class LoginController extends Controller
{
//使用路由中间件 cheackuserlogin 验证session中的username是否存在 判断后台管理员是否登录
        public function __construct()
        {
            $this->middleware('cheackuserlogin')->only('index');
            //$this->middleware('Adminlogin')->except(['login','loginin']);
        }


    public function index(){
       //登录成功 引入后台首页
          return view('admin.index');
        }



    //后台管理员登录的控制器
    public function login(){
    //引入后台管理员登录的页面
     return view('admin.login');

    }

//验证后台管理员登录信息的控制器
         public function logincheack(){
//        dd(R::input());
//后台用户登录提交的post表单信息在这里验证
            $state = Auth::guard('adminlogin')->attempt([
                'username'=>R::input('username'),
                'password'=>R::input('password'),
            ]);

//          dd($state);  $state返回true时登录信息验证成功 返回false验证失败
               if ($state){
                   //验证成功进入后台首页
                return redirect('/admin/index');
               }
            //验证失败返回错误信息进入登录页面 重新登录
             return redirect('/admin/login')->with('error','用户名不存在或密码错误');
         }
     //后台管理员退出 清除session的控制器
           public function loginout(){

           Auth::guard('adminlogin')->logout();

            return redirect('/admin/login');
           }

}
