<?php

namespace App\Http\Controllers\Home;

use App\Home\UserModel;
use function GuzzleHttp\Promise\all;
//use Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    //前台用户注册的控制器
    public function register(){
     //引入用户注册的模板
        return view('home.register');
    }

//验证用户注册的信息

    public function cheack(Request $request,UserModel $userModel){

        if ( !empty($request['username']) && !empty($request['password'])  ){

            $userModel->create([
                'username'=>$request['username'],
                'password'=> bcrypt( $request['password']),
            ]);
            flash()->overlay('注册成功');
            return redirect('/login');

        }else{
            return redirect('/register');
        }

     }

}
