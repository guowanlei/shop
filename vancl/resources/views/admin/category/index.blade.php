@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="/goods/goodscategory">商品分类列表</a></li>
        <li><a href="/goods/goodscategory/create">添加商品分类</a></li>
    </ul>
    <table class="table table-hover">
        <thead>
        <tr>
            <th width="200">商品分类ID</th>
            <th width="400" >分类名称</th>
            <th  width="400"   >描述,简介</th>
            <th width="150">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td>{{$v['id']}}</td>
                <td>{{$v['catname']}}</td>
                <td>{{$v['description']}}</td>
                <td>
                    <div class="btn-group">
                        <a href="/goods/goodscategory/{{$v['id']}}/edit" type="button" class="btn btn-default">编辑</a>
                        <a href="javascript:;" onclick="del({{$v['id']}})" type="button" class="btn btn-default">删除</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$data->links()}}
    <script>
        function del(id){
            require(['util'], function (util) {
                util.confirm('确定删除吗?',function(){
                    $.ajax({
                        url:'/goods/goodscategory/'+id,
                        method:'DELETE',
                        success:function (res) {
                            util.message(res.message,'refresh');
                        }
                    })
                })
            })
        }
    </script>
@endsection