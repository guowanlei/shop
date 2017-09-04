@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="/goods/attr">商品属性列表</a></li>
        <li class="active"><a href="/goods/attr/create">添加商品属性</a></li>
    </ul>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">添加属性</h3>
        </div>
        <div class="panel-body">
            <form action="/goods/attr" method="post" role="form" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">属性名称</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title"  placeholder="请输入属性名称" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">父级属性</label>
                    <div class="col-sm-10">
                        <select name="pid" id="inputID" class="form-control">
                            <option value="0">顶级属性</option>
                            @foreach($data as $value)
                                <option value="{{$value['id']}}">{{$value['title']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group" id="shiyongfenlei">
                    <label for="" class="col-sm-2 control-label">使用的分类</label>
                    <div class="col-sm-10">
                        <div class="checkbox">
                            @foreach($categorylist as $v)
                                <label>
                                    <input type="checkbox" name="category_id[]" value="{{$v['id']}}"> {{$v['labelcatname']}}
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <script>
                    require(['jquery'],function ($) {
                        $('#inputID').change(function () {
                            if($(this).val()  != 0 ){
                                $('#shiyongfenlei').hide();
                            }else {
                                $('#shiyongfenlei').show();
                            }
                        })
                    })

                </script>
                <button type="submit" class="btn btn-primary">保存</button>
            </form>
        </div>
    </div>
@endsection