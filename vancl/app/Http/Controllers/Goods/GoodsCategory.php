<?php

namespace App\Http\Controllers\Goods;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\GoodsCategory as GC ;
use DB;
class GoodsCategory extends Controller
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
    public function index()
    {
      //商品分类列表
//      $data = GC::get();
       $data = GC::paginate(5);//分页查询构造器

     return view('admin.category.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //引入添加商品分类的模板
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request,GC $goodsCategory)
    {
        $goodsCategory->create($request->all());
         flash()->overlay('商品分类添加成功');
          return redirect('/goods/goodscategory');
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
      //获得要修改的商品分类数据
        $data = GC::find($id);
//        $data = GC::where('cid',$id)->first();
        return view('admin.category.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        //保存被修改的数据
//        $model =  GC::where('cid',$id)->first();
        $model = GC::find($id);
        $model->catname=$request['catname'];
        $model->description=$request['description'];
        $model->save();
        flash()->overlay('商品分类修改成功');
        return redirect('/goods/goodscategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除商品分类的方法
        GC::destroy($id);
        //如果商品顶级分类下有相对应的子级分类 那么删除顶级分类的时候子级分类也要删除
        DB::table('goods_categorylists')->where('fathercategory_id', '=',$id )->delete();
        return response()->json(['message'=>'商品分类删除成功','valid'=>1]);
    }
}
