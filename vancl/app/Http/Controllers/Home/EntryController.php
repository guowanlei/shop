<?php

namespace App\Http\Controllers\Home;

use App\Admin\Attr;
use App\Admin\Goods;
use App\Admin\GoodsCategory;
use App\Admin\GoodsCategorylist;
use App\Admin\Huopins;
use App\Home\AddressModel;
use App\Home\CartModel;
use App\Home\Myorder;
use App\Home\Myorderlist;
use App\Home\UserModel;
use App\Http\Requests\HomeuserPasswordRequest;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use Auth;
class EntryController extends Controller
{

//前台首页的控制器
        public function index(){
          //获得导航 商品顶级分类数据
                      $Navigationcatname = GoodsCategory::get()->toArray();

            //遍历$Navigationcatname 获得顶级分类相对应的子级分类
            foreach ($Navigationcatname as $k=>$v){
                //获得子级分类
                $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
                $v['son'] = $soncatname;
                $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
            };

            //每日限时秒杀
            //获得限时秒杀所有的商品
            $seckillcate = Goods::where('isseckill','=',1)->get()->toArray();

             //新品推荐   获得所有的新品推荐商品
           $newcommond =  Goods::where('iscommond','=',1)->get()->toArray();

           //当季热卖  获得所有当季热卖的商品
            $hotgoods =  Goods::where('ishot','=',1)->get()->toArray();

//           dd($hotgoods);

           return view('home.index',compact('newcate','seckillcate','newcommond','hotgoods'));
        }


        //获得顶级分类数据所有相对应的商品
       public function categorygoods($id){

           //获得导航 商品顶级分类数据
           $Navigationcatname = GoodsCategory::get()->toArray();

           //遍历$Navigationcatname 获得顶级分类相对应的子级分类
           foreach ($Navigationcatname as $k=>$v){
               //获得子级分类
               $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
               $v['son'] = $soncatname;
               $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
           };


           //获得顶级分类下相对的子级分类
           $categorylist = GoodsCategorylist::where('fathercategory_id','=',$id)->get()->toArray();

           //dd($categorylist);
              //遍历子级分类 后的每个子级下对应的商品
            foreach ($categorylist as $k=>$v){

                $categorylistdoods = Goods::where('category_id','=',$v['id'])->get()->toArray();

                foreach ($categorylistdoods as $key => $value){
                    $newdata[]=$value;
                }
            }
           //获得符合条件商品数组的长度
           $num = count($newdata);
           //获得当前顶级分类的名称
           $topcatename = GoodsCategory::find($id)->catname;


           //属性筛选部分
           //先获取所有顶级属性
           $attrs = Attr::where('pid',0)->get()->toArray();
           $newAttr = [];//定义一个
           foreach ($attrs as $v) {
               $v['category_id'] = explode(',',$v['category_id']);
               if(in_array($id,$v['category_id'])){
                   $newAttr[] = $v;
               }
           }
           $allAttrs = [];
           foreach ($newAttr as $v){
               $sonAttr = Attr::where('pid',$v['id'])->get()->toArray();
               $allAttrs[$v['title']] = $sonAttr;
           }

           return view('home.list',compact('newcate','newdata','topcatename','num','allAttrs','id'));
       }

            //获得顶级分类对应的子级分类的商品
                public function categorylistgoods($id){

                    //获得导航 商品顶级分类数据
                    $Navigationcatname = GoodsCategory::get()->toArray();

                    //遍历$Navigationcatname 获得顶级分类相对应的子级分类
                    foreach ($Navigationcatname as $k=>$v){
                        //获得子级分类
                        $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
                        $v['son'] = $soncatname;
                        $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
                    };

                      //获得子级分类下对应的商品
                     $newdata = Goods::where('category_id','=',$id)->get()->toArray();
                    //获得符合条件商品数组的长度
                       $num = count($newdata);

                    //获得当前子级分类的名称
                    $topcatename = GoodsCategorylist::find($id)->labelcatname;


                    $fid =  GoodsCategorylist::find($id)->fathercategory_id;
                    //获得当前子级所属顶级分类的名称
                      $fathercatname =  GoodsCategory::find($fid)->catname;


                    //属性筛选部分
                    //先获取所有顶级属性
                    $attrs = Attr::where('pid',0)->get()->toArray();
                    $newAttr = [];//定义一个
                    foreach ($attrs as $v) {
                        $v['category_id'] = explode(',',$v['category_id']);
                        if(in_array($id,$v['category_id'])){
                            $newAttr[] = $v;
                        }
                    }
                    $allAttrs = [];
                    foreach ($newAttr as $v){
                        $sonAttr = Attr::where('pid',$v['id'])->get()->toArray();
                        $allAttrs[$v['title']] = $sonAttr;
                    }


                    return view('home.categorylist',compact('newcate','newdata','topcatename','fathercatname','num','id','allAttrs'));
                }

    //获得具体某件商品的详情
             public function goodsdetail($id){

                 //获得导航 商品顶级分类数据
                 $Navigationcatname = GoodsCategory::get()->toArray();

                 //遍历$Navigationcatname 获得顶级分类相对应的子级分类
                 foreach ($Navigationcatname as $k=>$v){
                     //获得子级分类
                     $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
                     $v['son'] = $soncatname;
                     $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
                 };



                    //获得当前商品的详情
                    $goodsInfo = Goods::find($id)->toArray();
                    $goodsInfo['attrs'] = json_decode($goodsInfo['attrs'],true);
                  //  dd( $goodsInfo['attrs']);

                 //获得当前商品所属的子级分类
                   $fid = $goodsInfo['category_id'];
                    $categorylist = GoodsCategorylist::find($fid)->toArray();

                  //通过子级分类找到所属的顶级分类
                   $ffid = $categorylist['fathercategory_id'];
                 $fcategorylist = GoodsCategory::find($ffid)->toArray();

                return view('home.goodsdetail',compact('goodsInfo','newcate','categorylist','fcategorylist'));
             }

           //每日秒杀 新品推荐 当季热卖 跳转的路由
          public function fathercategorylist($id){

              //获得导航 商品顶级分类数据
              $Navigationcatname = GoodsCategory::get()->toArray();

              //遍历$Navigationcatname 获得顶级分类相对应的子级分类
              foreach ($Navigationcatname as $k=>$v){
                  //获得子级分类
                  $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
                  $v['son'] = $soncatname;
                  $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
              };



                 //当前id是商品的id  获得当前商品的数据
                  $goods =  Goods::find($id)->toArray();
              //获得当前子级的id
              $fid = $goods['category_id'];
              //获得子级分类下对应的商品
              $newdata = Goods::where('category_id','=',$fid)->get()->toArray();
              //获得符合条件商品数组的长度   符合条件的商品数量
              $num = count($newdata);

              //获得当前子级分类的名称
              $topcatename = GoodsCategorylist::find($fid)->labelcatname;


              //获得当前子级所属顶级分类的id
              $ffid =  GoodsCategorylist::find($fid)->fathercategory_id;
              //获得当前子级所属顶级分类的名称
              $fathercatname =  GoodsCategory::find($ffid)->catname;





              //属性筛选部分
              //先获取所有顶级属性
              $attrs = Attr::where('pid',0)->get()->toArray();
              $newAttr = [];//定义一个
              foreach ($attrs as $v) {
                  $v['category_id'] = explode(',',$v['category_id']);
                  if(in_array($id,$v['category_id'])){
                      $newAttr[] = $v;
                  }
              }
              $allAttrs = [];
              foreach ($newAttr as $v){
                  $sonAttr = Attr::where('pid',$v['id'])->get()->toArray();
                  $allAttrs[$v['title']] = $sonAttr;
              }


              return view('home.categorylist',compact('newcate','newdata','topcatename','fathercatname','num','id','allAttrs'));

          }

          //前台首页个人中心的方法
       public function myvancl($uid){

           //获得导航 商品顶级分类数据
           $Navigationcatname = GoodsCategory::get()->toArray();

           //遍历$Navigationcatname 获得顶级分类相对应的子级分类
           foreach ($Navigationcatname as $k=>$v){
               //获得子级分类
               $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
               $v['son'] = $soncatname;
               $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
           };

              //获得当前登录用户的信息
            $userInfo = UserModel::find($uid)->toArray();
//            dd($userInfo);
        return view('home.myvancl',compact('newcate','userInfo'));
       }



    //前台用户添加收货地址的方法
         public function address($uid){

//获得导航 商品顶级分类数据
             $Navigationcatname = GoodsCategory::get()->toArray();

             //遍历$Navigationcatname 获得顶级分类相对应的子级分类
             foreach ($Navigationcatname as $k=>$v){
                 //获得子级分类
                 $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
                 $v['son'] = $soncatname;
                 $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
             };

             //获得当前登录用户的信息
             $userInfo = UserModel::find($uid)->toArray();

             //获得当前用户所有的收货地址
             $user_id = ($userInfo['id']);

             $addressdata = AddressModel::where('user_id','=',$user_id)->get()->toArray();

//dd($addressdata);

        return view('home.address',compact('userInfo','newcate','addressdata'));

         }


//保存新添加的地址
        public function saveaddress(Request $request,AddressModel $addressModel,$uid){
            $addressModel ->create([
               'username'=>$request['username'],
               'phonenumber'=>$request['phonenumber'],
               'city'=>$request['city'],
               'town'=>$request['town'],
               'street'=>$request['street'],
                'user_id'=>$uid,
            ]);
            return redirect()->back();
        }

//修改收货地址的方法
         public function edit($id,$uid){
            //当前传入的id 是地址表中的id   获得当前要修改的收货地址
               $editaddress = AddressModel::find($id)->toArray();


//获得导航 商品顶级分类数据
             $Navigationcatname = GoodsCategory::get()->toArray();

             //遍历$Navigationcatname 获得顶级分类相对应的子级分类
             foreach ($Navigationcatname as $k=>$v){
                 //获得子级分类
                 $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
                 $v['son'] = $soncatname;
                 $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
             };

             //获得当前登录用户的信息
             $userInfo = UserModel::find($uid)->toArray();

             //获得当前用户所有的收货地址
             $user_id = ($userInfo['id']);

             $addressdata = AddressModel::where('user_id','=',$user_id)->get()->toArray();

             return view('home.editaddress',compact('userInfo','newcate','addressdata','editaddress'));

         }


          //保存被修改的收货地址
            public function store(Request $request ,$id,$uid){
             //获得当前被修改的收货地址的数据
                $addressdata = AddressModel::find($id);

                $addressdata->username = $request['username'];
                $addressdata->phonenumber = $request['phonenumber'];
                $addressdata->city = $request['city'];
                $addressdata->town = $request['town'];
                $addressdata->street = $request['street'];
                $addressdata->user_id =$uid;

                $addressdata->save();

             return redirect('/myvancl/address/'.$uid);
            }

              //个人中心 删除收货地址的方法
              public function delete($id){
               //删除当前用户收货地址的数据数据
                  AddressModel::destroy($id);
                  //获得当前登录用户的id

//                  return redirect("/myvancl/address/{$uid}")->back();
                  return ['valid' => 1,'message' => '删除收货地址成功'];
              }


              //首页个人中心 修改密码的方法
             public function changepassword($uid){



                 //获得导航 商品顶级分类数据
                 $Navigationcatname = GoodsCategory::get()->toArray();

                 //遍历$Navigationcatname 获得顶级分类相对应的子级分类
                 foreach ($Navigationcatname as $k=>$v){
                     //获得子级分类
                     $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
                     $v['son'] = $soncatname;
                     $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
                 };

                 //获得当前登录用户的信息
                 $userInfo = UserModel::find($uid)->toArray();
                 //引入用户修改密码的模板
                 return view('home.userchangepassword',compact('newcate','userInfo'));

             }
          //验证首页用户个人中心修改密码的方法
                  public function cheacknewpassword(HomeuserPasswordRequest $request){
                      //获得当前登录用户的所有信息
                      $model = Auth::guard('homelogin')->user();
                      //只修改密码
                      $model->password = bcrypt($request['password']);
                      //用模型的保存数据 有数据的模型是代表修改当前数据
                      $model->save();
                      flash()->overlay('密码修改成功');
                      return redirect()->back();

                  }

            //异步查看商品库存的方法
                  public function checkStatus(Request $request){
//                      用传过来的属性集合和商品id  来查看对应的货品库存量
               $data = Huopins::where('goods_id','=',$request['goods_id'])->where('attrs',$request['attrs'])->first();
                      if(!empty($data)){
                          return ['valid' => 1,'kucun' => $data['kucun'],'attrs' => $data['attrs']];
                      }
                      return ['valid' => 0];
                  }


                  //异步加入购物车方法
                public function addCart(Request $request,CartModel $cartModel){
                      //1.查看当前用户是否登录，如果没登录，返回没有登录的消息，如果登录了，继续往下
                    if(!Auth::guard('homelogin')->user()){
                        return ['islogin' => 0,'message'=> '请先登录后加入购物车'];
                    }
                   //用户登录以后走这里 将商品添加到购物车
                        $userid = Auth::guard('homelogin')->user()->id;

                      //获得存入购物车货品所属的商品 获得名称 和 商品价格 字段
                        $goods_id = $request['id'];
                        $goodsInfo = Goods::find($goods_id);

                        $title = $goodsInfo['title'];
                        $price =  $goodsInfo['shangchengprice'];
                        $thumb =  $goodsInfo['listimg'];

                    $state = CartModel::create([
                        'goods_id' => $request['id'],
                        'attrs' => $request['huopin'],
                        'num' => $request['num'],
                        'userid' => $userid,
                        'title' => $title,
                        'price' => $price,
                        'thumb' => $thumb,

                    ]);
                    if($state){
                        return ['valid' => 1,'message'=>'加入购物车成功'];
                    }
                }


                    // 用户查看购物车的方法
                  public function shopcar(){

                    //用户必须先登录才能查看自己的购物车
                    if (isset(Auth::guard('homelogin')->user()->username)){
                        //获得当前登录用户的id

//                    dd($shopsdata);
                        return view('home.myshopcar');

                    }else{
                        //如果用户未登录 跳转到登录页面
                        return redirect('/login');
                    }

                  }

             //Vue异步获得购物车数据
              public function getgoods(){
                  $userid = Auth::guard('homelogin')->user()->id;
                  $goods = CartModel::where('userid','=',$userid)->with(['goods'])->get()->toArray();
                  echo json_encode($goods);
              }

      //用户删除购物车商品的方法
             public function delshopcargoods($id){
                 CartModel::destroy($id);
                 return ['valid' => 1,'message' => '删除成功'];
             }

        //用户提交购物车 的方法
           public function makeSure(Request $request){
                  //获得购物车商品列表的总价
                  $total = $request['total'];
               $userid = Auth::guard('homelogin')->user()->id;
               $goods = CartModel::where('userid','=',$userid)->with(['goods'])->get()->toArray();

//dd($goods);

//               获得当前登录用户的所有收货地址
                  $userid = Auth::guard('homelogin')->user()->id;
                  $addressdata = AddressModel::where('user_id','=',$userid)->get()->toArray();
                      //  引入提交订单的模板
                   return view('home.mysuremenu',compact('addressdata','userid','total','goods'));

               }




             //用户更改购物车商品数量的方法
              public function addnum($num,$id){
//                   获得要修改数量的购物车商品数据
                  $model = CartModel::find($id);
                  $model->num = $num;
                  $success = $model ->save();
                  if($success){
                      return ['valid' => 1];
                  }
                  return ['valid' => 0];
              }

//              用户购买商品生成订单的方法
                   public function myorder( Request $request){
                   //先存入用户购物订单表
                       $userid = Auth::guard('homelogin')->user()->id;
//                     创建 获得订单号
                  $ordernumber = time().mt_rand(0,999999999);
                    Myorder::create([
                        'ordernumber'=>$ordernumber,
                        'address'=>$request['address'],
                        'Buyermessage'=>$request['Buyermessage'],
                        'payment'=>$request['payment'],
                        'total'=>$request['total'],
                        'state'=>'已付款',
                        'userid'=>$userid,
                    ]);
                  //存入订单列表
                       $goods = CartModel::where('userid','=',$userid)->with(['goods'])->get()->toArray();
                      foreach ($goods as $v){
                            Myorderlist::create([
                               'goods_id'=>$v['goods_id'],
                               'attrs'=>$v['attrs'],
                               'price'=>$v['price'],
                               'num'=>$v['num'],
                               'title'=>$v['title'],
                               'orderid'=>$ordernumber,
                               'userid'=>$userid,
                            ]);
                      }

                       //用户购买商品支付成功当前被购买的商品对应货品的库存减去用户购买的数量
                       foreach ($goods as $v){
                       $huopon= Huopins::where('goods_id',$v['goods_id'])->where('attrs',$v['attrs'])->first();
                           $huopon->kucun = $huopon['kucun'] - $v['num'];//一个集合可以->调用 也可以[]取值

                           //修复库存减为负数
//                           if( $huopon->kucun <=0){
//
//                               $huopon->kucun=0;
//
//                           }


                           $huopon->save();
                       }
                      //用户购买商品支付成功 清除当前用户的购物车商品数据
                       CartModel::where('userid','=',$userid)->delete();

                       //跳转到订单页面
                       return redirect('/mymenu');
                   }
                   //用户查看订单详情的方法
                   public function myorderDetails($ordernumber){


                       //获得导航 商品顶级分类数据
                       $Navigationcatname = GoodsCategory::get()->toArray();

                       //遍历$Navigationcatname 获得顶级分类相对应的子级分类
                       foreach ($Navigationcatname as $k=>$v){
                           //获得子级分类
                           $soncatname = GoodsCategorylist::where('fathercategory_id',$v['id'])->get();
                           $v['son'] = $soncatname;
                           $newcate[]=$v;//前台首页导航的数据 顶级分类和子级分类
                       };

                       //获得当前用户 查看的订单详情
                       $userid = Auth::guard('homelogin')->user()->id;
                       $myorderlists = Myorderlist::where('userid','=',$userid) ->where('orderid','=',$ordernumber)->get();
                       return view('home.myorderlist',compact('newcate','myorderlists'));

                   }

              //通过属性筛选商品数据的方法

                  public function shaixuan(Request $request){

                      $shaixuan = explode(',',$request['shaixuan']);
                      $shaixuanGoods = Goods::where('category_id',$request['category_id']);
                      foreach ($shaixuan as $v) {
                          $shaixuanGoods->where('attrs','like','%'.$v.'%');
                      }
                      $ss = $shaixuanGoods->get()->toArray();
                      foreach ($ss as $k => $v){
                          $ss[$k]['listimg'] = explode(',',$ss[$k]['listimg']);
                      }
//                      dd($ss);
                      return ['valid' => 1,'data' => $ss];
                  }

}
