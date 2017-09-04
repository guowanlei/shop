<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//声明控制器中间件 验证session 中的username 判断用户是否登录
         if (!Auth::guard('adminlogin')->check()){
             //如果session中不存在username 代表用户没有登录 进入登录页面
             return redirect('/admin/login');
         }

        return $next($request);
    }
}
