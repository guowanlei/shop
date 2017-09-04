<?php

namespace App\Http\Controllers\Goods;

use App\Http\Requests\CategorylistRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class GoodsCategorylist extends Controller
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

    //引入商品分类标签列表的模板的控制器
    public function index()
    {
        //获得商品分类标签的所有数据
//          $data  = \App\Admin\GoodsCategorylist::get();

//        ->paginate(15)  分页器
        $data = DB::table('goods_categorylists')
            ->join('goods_categories','goods_categorylists.fathercategory_id','=','goods_categories.id')
            ->select('goods_categorylists.*','goods_categories.catname')->paginate(10);

//        dd($data);
//        $data = json_decode(json_encode($data,JSON_UNESCAPED_UNICODE),true);
//        echo '<pre>';
//        print_r($data);

        return view('admin.categorylist.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //这里是引入商品分类二级分类 标签的模板
    public function create()
    {

        //获得父级分类的数据
        $data = \App\Admin\GoodsCategory::get();

        return view('admin.categorylist.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorylistRequest $request,\App\Admin\GoodsCategorylist $goodsCategorylist)
    {
        $goodsCategorylist->create($request->all());
         flash()->overlay('商品分类标签添加成功');
          return redirect('/goods/goodscategorylist');

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

    //修改数据的控制器
    public function edit($id)
    {
        //获得父级分类的数据
        $fatherdata =  \App\Admin\GoodsCategory::get();

     //获得要修改的数据
       $data = \App\Admin\GoodsCategorylist::find($id);
//           dd($data->toArray());
             //引入模板
        return view('admin.categorylist.edit',compact('data','fatherdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//    保存修改的数据
    public function update(CategorylistRequest $request, $id)
    {
       //获得数据库中要被修改的数据
         $model = \App\Admin\GoodsCategorylist::find($id);
//            dd($model->toArray());
            $model->labelcatname=$request['labelcatname'];
            $model->labeldescription=$request['labeldescription'];
            $model->fathercategory_id=$request['fathercategory_id'];
            $model->iscommond=$request['iscommond'];
            $model->ishot=$request['ishot'];
             //有数据的模型代表修改当数据
             $model->save();
             flash()->overlay('商品分类标签修改成功');
            return redirect('/goods/goodscategorylist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除数据
        \App\Admin\GoodsCategorylist ::destroy($id);
         return response()->json(['message'=>'商品分类标签删除成功' ,'valid'=>1   ]);

    }
}
