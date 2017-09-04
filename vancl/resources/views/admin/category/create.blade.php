@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="/goods/goodscategory">商品分类列表</a></li>
        <li class="active"><a href="/goods/goodscategory/create">添加商品分类</a></li>
    </ul>
    <form action="/goods/goodscategory" method="post" role="form" class="form-horizontal">
        {{csrf_field()}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">添加商品分类</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品分类名称</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="catname"   placeholder="请输入商品分类名称"   required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品分类描述</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description"  placeholder="请输入分类描述简介"    required="required">
                    </div>
                </div>

            </div>
        </div>
        <button type="submit" class="btn btn-primary">保存</button>
    </form>
@endsection