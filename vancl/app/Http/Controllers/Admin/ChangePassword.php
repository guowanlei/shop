<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PasswordRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ChangePassword extends Controller
{
    //使用路由中间件 cheackuserlogin 验证session中的username是否存在 判断后台管理员是否登录
    public function __construct()
    {
        //$this->middleware('cheackuserlogin')->only('index');
        $this->middleware('cheackuserlogin')->except(['login','loginin']);
    }

        //引入修改管理员登录密码的模板
          public function changepassword(){

           return view('admin.my.index');

          }

       //管理员修改密码验证的控制器
       public function cheackpassword(PasswordRequest $request){
         //获得当前登录用户的所有信息
              $model = Auth::guard('adminlogin')->user();
         //只修改密码
              $model->password = bcrypt($request['password']);
        //用模型的保存数据 有数据的模型是代表修改当前数据
              $model->save();
             flash()->overlay('密码修改成功');
              return redirect()->back();

       }
}
