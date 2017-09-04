@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="/goods/attr">商品属性列表</a></li>
        <li class="active"><a href="/goods/attr/create">修改商品属性</a></li>
    </ul>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">修改商品属性</h3>
        </div>
        <div class="panel-body">
            <form action="/goods/attr/{{$data['id']}}" method="post" role="form" class="form-horizontal">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">属性名称</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title"   value="{{$data['title']}}" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">父级属性</label>
                    <div class="col-sm-10">
                        <select name="pid" id="inputID" class="form-control">
                            <option value="0">顶级属性</option>
                            @foreach($attr as $value)
                                <option value="{{$value['id']}}"  {{$value['id']==$data['pid']?'selected':''}}  >{{$value['title']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">保存修改</button>
            </form>
        </div>
    </div>
@endsection