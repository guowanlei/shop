@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="/goods/goodslist/{{$goods_id}}">货品列表</a></li>
        <li class="active"><a href="/goods/addgoods/{{$goods_id}}">添加货品</a></li>
    </ul>
    <form action="/goods/addgoods/store/{{$goods_id}}" method="post" role="form" class="form-horizontal">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">添加货品</h3>
            </div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{csrf_field()}}
                        @foreach($goodsInfo['attrs'] as $k => $v)
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">{{$k}}</label>
                                <div class="col-sm-10">
                                    <select name="attrs[]" id="inputID" class="form-control" required="required" >
                                        <option value=""> 请选择</option>
                                        @foreach($v as $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endforeach
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">库存数量</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kucun" >
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">保存货品</button>
            </div>
        </div>

    </form>

@endsection