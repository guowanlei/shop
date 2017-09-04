@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="/goods/goodscategorylist">商品分类标签列表</a></li>
        <li class="active"><a href="/goods/goodscategorylist/create">添加商品分类标签</a></li>
    </ul>
    <form action="/goods/goodscategorylist" method="post" role="form" class="form-horizontal">
        {{csrf_field()}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">添加商品分类标签</h3>
            </div>
            <div class="panel-body">

                {{--选择父级商品分类--}}

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">父级分类</label>
                    <div class="col-sm-10">
                        <select type="text" class="form-control" name="fathercategory_id" required="required">

                            <option value="">请选择父级分类</option>
                            @foreach($data as $v)
                                <option value="{{$v['id']}}">{{$v['catname']}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品分类标签名称</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="labelcatname"   placeholder="请输入商品分类标签名称"   required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品分类标签描述</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="labeldescription"  placeholder="请输入分类标签描述简介"    required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">推荐</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" name="iscommond" value="1"> 是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="iscommond" value="0" checked="checked"> 否
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">热门</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" name="ishot"  value="1"> 是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="ishot" value="0" checked="checked"> 否
                        </label>
                    </div>
                </div>




            </div>
        </div>
        <button type="submit" class="btn btn-primary">保存</button>
    </form>
@endsection