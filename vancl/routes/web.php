<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','Home\EntryController@index');//前台首页导航的路由
Route::get('/categorygoods/{id}','Home\EntryController@categorygoods');//前台首页获得顶级分类商品的路由
Route::get('/categorylistgoods/{id}','Home\EntryController@categorylistgoods');//前台首页获得子级分类商品的路由
Route::get('/register','Home\RegisterController@register');//前台用户注册模板路由
Route::post('/register/cheack','Home\RegisterController@cheack');//前台首页用户注册路由
Route::get('/code','component\CodeController@code');//登录注册验证码路由
Route::get('/login','Home\LoginController@login');//用户登录的路由
Route::post('/login/cheack','Home\LoginController@cheack');//验证用户登录的路由
Route::get('/loginout','Home\LoginController@loginout');//用户退出登录清除session的路由
Route::get('/mymenu','Home\LoginController@mymenu');//用户订单的路由
Route::get('/goodsdetail/{id}','Home\EntryController@goodsdetail');//获得具体某件商品的详情
Route::get('/fathercategorylist/{id}','Home\EntryController@fathercategorylist');//每日秒杀 新品推荐 当季热卖 跳转的路由
Route::get('/myvancl/{uid}','Home\EntryController@myvancl');//前台首页用户个人中心的路由
Route::get('/myvancl/address/{uid}','Home\EntryController@address');//前台首页用户个人中心添加收货地址的路由
Route::post('/myvancl/saveaddress/{uid}','Home\EntryController@saveaddress');//前台首页用户个人中心保存添加收货地址的路由
Route::get('/address/edit/{id}/{uid}','Home\EntryController@edit');//前台首页用户个人中心修改收货地址的路由
Route::post('/store/editaddress/{id}/{uid}','Home\EntryController@store');//前台首页用户个人中心保存被修改收货地址的路由
Route::get('/address/delete/{id}','Home\EntryController@delete');//前台首页用户个人中心删除收货地址的路由
Route::get('/myvancl/accountsafety/{uid}','Home\EntryController@changepassword');//前台首页用户个人中心修改登录密码的路由
Route::post('/userpassword/cheacknewpassword','Home\EntryController@cheacknewpassword');//前台首页用户个人中心验证修改登录密码的路由
Route::post('/goodsdetail/checkStatus','Home\EntryController@checkStatus');//前台用户购买商品异步查看该商品的货品库存的路由
Route::post('/goodsdetail/addCart','Home\EntryController@addCart');//前台用户购买商品异步将商品添加到购物车的路由的路由
Route::get('/my/shopcar','Home\EntryController@shopcar');//前台用户查看购物车的路由的路由
Route::get('/myshopcar/getgoods','Home\EntryController@getgoods');//前台用户查看购物车Vue异步获得数据的路由
Route::get('/del/shopcargoods/{id}','Home\EntryController@delshopcargoods');//前台用户删除购物车数据的路由
Route::post('/shopcar/makeSure','Home\EntryController@makeSure');//前台用户提交购物车数据的路由
Route::get('/myshopcar/addnum/{num}/{id}','Home\EntryController@addnum');//前台用户变更购物车商品数量的路由
Route::post('/save/order','Home\EntryController@myorder');//前台用户提交订单的路由
Route::get('/myorder/Details/{ordernumber}','Home\EntryController@myorderDetails');//前台用户查看订单详情的路由
Route::get('/screen/shaixuan','Home\EntryController@shaixuan');//前台用户筛选商品的路由









//上传商品图片的路由
Route::any('/component/upload','component\UploadController@uploader');
Route::any('/component/filesLists','component\UploadController@filesLists');

include __DIR__.'/admin/web.php';
include __DIR__.'/goods/web.php';
