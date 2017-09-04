<?php

namespace App\Http\Controllers\Goods;

use App\Http\Requests\AttrRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Attr extends Controller
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
    //展示商品属性的控制器
    public function index()
    {
       //获得所有的商品属性
       //$data = \App\Admin\Attr::get();

        //获得某些属性的父级属性名称pid 用  //一对多（逆向）关联 自关联belongsTo方法
        //return $this->belongsTo(static::class,'pid',$this->getKeyName());
        $data = \App\Admin\Attr::with(['parent'])->orderBy('pid', 'asc')->paginate(10);
        //引入商品属性列表的模板
      return view('admin.attr.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     //获得属性表所有的属性作为某些子属性的父级属性
        $data = \App\Admin\Attr::where('pid',0)->get();

        //获得所有的商品子级分类
        $categorylist = \App\Admin\GoodsCategorylist::get()->toArray();
        //引入添加商品属性的模板
        return view('admin.attr.create',compact('data','categorylist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttrRequest $request , \App\Admin\Attr $attr)
    {
        if ($request['category_id']){
            $request['category_id'] = implode(',',$request['category_id']);
        }else{
            $request['category_id'] = '';
        }
        //保存添加的商品属性的数据
        $attr->create($request->all());
        flash()->overlay('商品属性添加成功');
        return redirect('/goods/attr');
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
          //获得当前要修改的商品属性数据
           $data = \App\Admin\Attr::find($id);

            //获得所有的商品属性
            $attr = \App\Admin\Attr::get();

        return view('admin.attr.edit',compact('data','attr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AttrRequest $request, $id)
    {
        //保存修改的商品属性数据
        //获得当前要修改的数据
        $model = \App\Admin\Attr::find($id);
        $model->title=$request['title'];
        $model->pid=$request['pid'];
        $model->save();
        flash()->overlay('商品属性修改成功');
        return redirect('goods/attr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Admin\Attr::destroy($id);

        return response()->json(['message'=>'商品属性删除成功','valid'=>1]);


    }
}
