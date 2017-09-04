<?php

namespace App\Http\Controllers\Goods;

use App\Admin\Goods;
use DB;
use App\Http\Requests\GoodsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Attr;
class GoodsController extends Controller
{

    //使用路由中间件 cheackuserlogin 验证session中的username是否存在 判断后台管理员是否登录
    public function __construct()
    {
        //$this->middleware('cheackuserlogin')->only('index');
        $this->middleware('cheackuserlogin')->except(['login','loginin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //商品列表展示
    public function index()
    {
        //获得所有的商品  分页查询构造器  paginate(10);
        $data = Goods:: paginate(10);
        return view('admin.goods.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //添加商品的控制器
    public function create()
    {
      //添加商品 要获得商品所属分类 商品属性
       //获得商品所属分类
        $categorylist = \App\Admin\GoodsCategorylist::get();

        //获得商品属性
        $attrs = \App\Admin\Attr::where('pid','=',0)->get();
//         dd($attrs->toArray());
        return view('admin.goods.create',compact('categorylist','attrs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //将添加的商品保存到数据库中
    public function store(GoodsRequest $request,Goods $goods)
    {
     //商品浏览次数 不填默认为0次
        $request['click'] = $request['click']? :0;
        $request['attrs'] = json_encode($request['attrs'],JSON_UNESCAPED_UNICODE);
        //商品表模型保存数据
        $goods->create([
            'title'=>$request['title'],
            'shichangprice'=>$request['shichangprice'],
            'shangchengprice'=>$request['shangchengprice'],
            'attrs'=>$request['attrs'],
            'desc'=>$request['desc'],
            'content'=>$request['editorValue'],
            'click'=>$request['click'],
            'listimg'=>$request['listimg'],
            'category_id'=>$request['category_id'],
            'isseckill'=>$request['isseckill'],
            'iscommond'=>$request['iscommond'],
            'ishot'=>$request['ishot'],
        ]);
          flash()->overlay('商品添加成功');
          return redirect('/goods/goods');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获得当前要修改的商品数据
        $data = Goods::find($id);
       //获得添加商品的所有属性
        $attrs = \App\Admin\Attr::where('pid','=',0)->get();
      //获得添加商品所有所属分类
        $categorylist = \App\Admin\GoodsCategorylist::get();

        return view('admin.goods.edit',compact('data','attrs','categorylist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //保存当前被修改的商品数据
    public function update(Request $request, $id)
    {
        //获得当前被修改的商品数据
        $model = Goods::find($id);
        $model->title = $request['title'];
        $model->listimg = $request['listimg'];
        $model->category_id = $request['category_id'];
        $model->shichangprice = $request['shichangprice'];
        $model->shangchengprice = $request['shangchengprice'];
        $model->click = $request['click'];
        $model->attrs = implode(',',$request['attrs']);//PHP implode() 函数PHP String 函数 实例 把数组元素组合为字符串
        $model->desc = $request['desc'];
        $model->content = $request['editorValue'];
       //有修改数据的模型保存数据代表修改
        $model->save();
        flash()->overlay('商品修改成功');
       return redirect('/goods/goods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除商品数据
        Goods::destroy($id);

        //同时删除当前商品下的所有货品数据
        DB::table('huopins')->where('goods_id', '=',$id )->delete();

      return response()->json(['message'=>'商品删除成功','valid'=>1]);
    }

    //添加商品选择分类时 能被分类使用的属性的方法
      public function getAttr($id){
          //$id是当前选择分类的id
          //用当前选择的分类id去属性表中找,那些属性可以被当前分类使用
          $attrs = Attr::where('category_id','like','%'.$id.'%')->get()->toArray();

          foreach ($attrs as $k => $v){
              $sonAttrs = Attr::where('pid',$v['id'])->get()->toArray();
              $allAttrs[$v['title']] = $sonAttrs;
          }
          return ['data' => $allAttrs];
      }

}
