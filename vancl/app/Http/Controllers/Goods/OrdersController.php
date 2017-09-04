<?php

namespace App\Http\Controllers\Goods;


use App\Home\Myorder;
use App\Home\Myorderlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    //使用路由中间件 cheackuserlogin 验证session中的username是否存在 判断后台管理员是否登录
    public function __construct()
    {
        //$this->middleware('cheackuserlogin')->only('index');
        $this->middleware('cheackuserlogin')->except(['login','loginin']);
    }

    //查看用户所有的订单的方法
          public function allorders(){
        //获得所有的订单数据
              $ordersdata = Myorder::paginate(10);
//              dd($ordersdata);
              return view('admin.orders.index',compact('ordersdata'));
          }
        //查看用户订单详情的方法
     public function orderDetails($ordernumber){

            $userid = \Auth::guard('homelogin')->user()->id;
         $myorderlists = Myorderlist::where('userid','=',$userid)->where('orderid','=',$ordernumber)->paginate(5);
            return view('admin.orders.orderlist',compact('myorderlists'));
     }

       //更改订单状态的方法
         public function changestate($ordernumber){

             $ordersdata = Myorder::where('ordernumber',$ordernumber)->first()->toArray();

//
//             dd($ordersdata);

             return view('admin.orders.orderchangestate',compact('ordersdata'));
         }
               //保存更改订单状态的方法
              public function saveorderstate(Request $request){

                $ordernumber = $request['ordernumber'];
                  $ordersdata = Myorder::where('ordernumber',$ordernumber)->first();

                  $ordersdata -> state =$request['state'];
                  $ordersdata->save();

                 return redirect('/goods/allorders');
              }
           //查看已付款订单的方法
         public function Paid(){
             $ordersdata = Myorder::where('state','=','已付款')->paginate(10);
             return view('admin.orders.index',compact('ordersdata'));
         }

         //查看已发货订单的方法
           public function Shipped(){
               $ordersdata = Myorder::where('state','=','已发货')->paginate(10);
               return view('admin.orders.index',compact('ordersdata'));
           }

           //查看已评价订单的方法
           public function evaluate(){
               $ordersdata = Myorder::where('state','=','已评价')->paginate(10);
               return view('admin.orders.index',compact('ordersdata'));
           }
           //查看待评价订单的方法
           public function noevaluate(){
               $ordersdata = Myorder::where('state','=','待评价')->paginate(10);
               return view('admin.orders.index',compact('ordersdata'));
           }
               //查看待发货订单的方法
           public function noShipped(){
               $ordersdata = Myorder::where('state','=','待发货')->paginate(10);
               return view('admin.orders.index',compact('ordersdata'));
           }
        //添加轮播图的方法
          public function addflash(){
              //引入添加轮播图的模板
          return view('admin.flash.create');
          }


}
