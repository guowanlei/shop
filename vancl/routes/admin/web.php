<?php
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){

     //后台管理员登录验证的路由
       Route::get('/login','LoginController@login');
       Route::post('/login','LoginController@logincheack');
       Route::get('/index','LoginController@index');

       //管理员退出后台的路由
       Route::get('/loginout','LoginController@loginout');
      //管理员修改密码模板的路由
       Route::get('/changePassword','ChangePassword@changepassword');
      //管理员修改密码验证的路由
       Route::post('/changePassword','ChangePassword@cheackpassword');

});
