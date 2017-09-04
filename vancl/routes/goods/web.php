<?php

//管理商品分类 增删改查的资源路由组
    Route::group(['prefix'=>'goods','namespace'=>'Goods'],function (){
          //添加商品分类的路由
     Route::resource('/goodscategory','GoodsCategory');
     Route::resource('/goodscategorylist','GoodsCategorylist');
       //添加商品属性的资源路由
     Route::resource('/attr','Attr');
     //添加商品的资源路由
      Route::resource('/goods','GoodsController');

        //添加商品所对应的属性的路由
        Route::get('/getAttr/{id}','GoodsController@getAttr');

      //添加某件商品里面货品的路由
      Route::get('/goodslist/{goods_id}','GoodslistController@index');//货品列表的路由
      Route::get('/addgoods/{goods_id}','GoodslistController@add');//添加货品模板的路由
      Route::post('/addgoods/store/{goods_id}','GoodslistController@store');//将添加的货品数据保存到数据库的路由
      Route::get('/addgoods/edit/{goods_id}','GoodslistController@edit');//修改货品数据的模板的路由
      Route::post('/addgoods/{goods_id}/update/{huopin_id}','GoodslistController@update');//将修改的货品数据保存到数据库的路由
      Route::get('/addgoods/delete/{huopin_id}','GoodslistController@delete');//删除货品的路由
      Route::get('/allorders','OrdersController@allorders');//查看所有订单的路由
      Route::get('/myorder/Details/{ordernumber}','OrdersController@orderDetails');//查看所有订单的路由
      Route::get('/myorder/changestate/{ordernumber}','OrdersController@changestate');//更改订单状态的路由
      Route::post('/saveorderstate','OrdersController@saveorderstate');//保存更改订单状态的路由
      Route::get('/allorders/Paid','OrdersController@Paid');//查看已付款的订单的路由
      Route::get('/allorders/Shipped','OrdersController@Shipped');//查看已发货的订单的路由
      Route::get('/allorders/evaluate','OrdersController@evaluate');//查看已评价的订单的路由
      Route::get('/allorders/noevaluate','OrdersController@noevaluate');//查看待评价的订单的路由
      Route::get('/allorders/noShipped','OrdersController@noShipped');//查看待发货的订单的路由
      Route::get('/addflash','OrdersController@addflash');//添加轮播图的路由


    });







