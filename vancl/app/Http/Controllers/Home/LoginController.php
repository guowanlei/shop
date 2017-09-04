<?php

namespace App\Http\Controllers\Home;


use App\Home\Myorder;
use App\Http\Controllers\Controller;
use Request;
use Auth;
use App\Admin\GoodsCategory;
use App\Admin\GoodsCategorylist;
class LoginController extends Controller
{
   public function login(){
    //引入用户登录模板
    return view('home.login');
   }

//验证用户登录的方法
         public function cheack(){
            $state = Auth::guard('homelogin')->attempt([
                'username'=>Request::input('username'),
                'password'=>Request::input('password'),
            ]);
             //验证成功进入后台首页
             if ($state){
                 return redirect('/');
             }
             //验证失败返回错误信息进入登录页面 重新登录
             return redirect('/login')->with('error','用户名不存在或密码错误');
         }

         //用户退出登录 清除session的方法
         public function loginout(){
             Auth::guard('homelogin')->logout();
             return redirect('/');
         }

         //用户订单的方法
    public function mymenu(){
      //用户必须登录才能查看自己的订单
            if (isset(Auth::guard('homelogin')->user()->username)){
                //如果用户已登录 返回当前用户的订单

                //获得当前用户登录的信息里的id
                $userid=Auth::guard('homelogin')->user()->id;

                //获得导航 商品顶级分类数据
                $Navigationcatname = GoodsCategory::get()->toArray();

                //遍历$Navigationcatname 获得顶级分类相对应的子级分类
                foreach ($Navigationcatname as $k=>$v){
                    //获得子级分类
                    $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
                    $v['son'] = $soncatname;
                    $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
                };
              //获得当前登录用户的订单
               $myorder = Myorder::where('userid','=',$userid)->get()->toArray();

//dd($myorder);

               //引入当前登录用户的订单
               return view('home.mymenu',compact('newcate','myorder'));
            }else{
               //如果用户未登录 跳转到登录页面
                return redirect('/login');
              }
          }









}
