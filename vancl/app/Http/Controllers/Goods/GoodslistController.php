<?php

namespace App\Http\Controllers\Goods;

use App\Admin\Goods;
use App\Admin\Huopins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HuopinRequest;
class GoodslistController extends Controller
{
    //使用路由中间件 cheackuserlogin 验证session中的username是否存在 判断后台管理员是否登录
    public function __construct()
    {
        //$this->middleware('cheackuserlogin')->only('index');
        $this->middleware('cheackuserlogin')->except(['login','loginin']);
    }

//货品列表
    public function index($goods_id){

      //获得添加货品的当前商品的所有数据
        $goodsInfo  = Goods::find($goods_id);
       //获得当前商品下所有的货品
        $huopins = Huopins::where('goods_id','=',$goods_id)->orderBy('id','asc')->paginate(10);

    return view('admin.addgoods.index',compact('goodsInfo','huopins','goods_id'));
    }


//添加货品的模板
  public function add($goods_id){
    //添加货品 需要获得当前添加的货品所属商品的数据
        $goodsInfo = Goods::find($goods_id)->toArray();

   //获得当前商品的所有属性
//        $goodsattrs = explode(',',$goodsInfo['attrs']);//将商品在数据库中的属性字符串集合转成数组
////        dd($goodsInfo['attrs']);
////           dd($goodsattrs);
//          foreach ($goodsattrs as $k=>$v){
//             //获得顶级属性 将作为货品属性新的属性数组的键名 $v就等于商品属性表的id
//              $attrs = \App\Admin\Attr::find($v)->toArray();
//              //获得顶级属性下的子属性 将作为货品属性新的属性数组的键值
//            $sonattrs = \App\Admin\Attr::where('pid','=',$v)->get()->toArray();
//             //dd($sonattrs);
//
//           $newattrs[$attrs['title']]=$sonattrs;
//          }


      $goodsInfo['attrs'] = json_decode($goodsInfo['attrs'],true);

        return view('admin.addgoods.create',compact('goods_id','goodsInfo'));
  }

//保存添加的货品数据
     public function store(HuopinRequest $request,Huopins $huopins,$goods_id){

         $huopins->create([
             'goods_id' => $goods_id,
             'kucun' => $request['kucun'],
             'attrs' => implode(',',$request['attrs']),
         ]);

       flash()->overlay('货品添加成功');
       return redirect('goods/goodslist/'.$goods_id);
     }

//引入修改货品模板的方法
         public function edit($id){
          //传入的参数$id是货品表的id
            //获得当前要修改的货品的数据
             $huopinInfo = Huopins::find($id);

             $goods_id =$huopinInfo['goods_id'];
             //添加货品 需要获得当前添加的货品所属商品的数据
             $goodsInfo = Goods::find($goods_id);
//        dd($goodsInfo->toArray());
             //获得当前商品的所有属性
//             $goodsattrs = explode(',',$goodsInfo['attrs']);//将商品在数据库中的属性字符串集合转成数组
//
//             foreach ($goodsattrs as $k=>$v){
//                 //获得顶级属性 将作为货品属性新的属性数组的键名 $v就等于商品属性表的id
//                 $attrs = \App\Admin\Attr::find($v)->toArray();
//                 //获得顶级属性下的子属性 将作为货品属性新的属性数组的键值
//                 $sonattrs = \App\Admin\Attr::where('pid','=',$v)->get()->toArray();
////                 dd($sonattrs);
//
//                 $newattrs[$attrs['title']]=$sonattrs;
//             }
//dd($newattrs);
             $goodsInfo['attrs'] = json_decode($goodsInfo['attrs'],true);

          return view('admin.addgoods.edit',compact('huopinInfo','id','goodsInfo'));
         }

    //保存修改的货品数据
       public function update(HuopinRequest $request,$goods_id,$huopin_id){
        //获得当前被修改的货品数据
             $model = Huopins::find($huopin_id);
             $model->goods_id =$goods_id;
             $model->kucun = $request['kucun'];
             $model->attrs = implode(',',$request['attrs']);
           //有数据的模型代表修改当数据
           $model->save();
           flash()->overlay('货品修改成功');
           return redirect('goods/goodslist/'.$goods_id);
       }

//删除货品的方法
      public function delete($huopin_id){

          Huopins::destroy($huopin_id);
          return ['message'=>'货品删除成功' ,'valid'=>1];
      }


}

