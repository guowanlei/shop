@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li   class="active" ><a href="/goods/goodscategorylist">商品分类标签列表</a></li>
        <li><a href="/goods/goodscategorylist/create">添加商品分类标签</a></li>
    </ul>
    <table class="table table-hover">
        <thead>
        <tr>
            <th width="200">商品分类标签ID</th>
            <th width="400" >分类标签名称</th>
            <th  width="400" >描述,简介</th>
            <th width="300">所属父级分类</th>
            <th width="150">是否推荐</th>
            <th width="150">是否热门</th>
            <th width="150">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->labelcatname}}</td>
                <td>{{$v->labeldescription}}</td>
                <td>{{$v->catname}}</td>
                <td>@if($v->iscommond)是@else否@endif</td>
                <td>@if($v->ishot)是@else否@endif</td>
                <td>
                    <div class="btn-group">
                        <a href="/goods/goodscategorylist/{{$v->id}}/edit" type="button" class="btn btn-default">编辑</a>
                        <a href="javascript:;" onclick="del({{$v->id}})" type="button" class="btn btn-default">删除</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
    <script>
        function del(id){
            require(['util'], function (util) {
                util.confirm('确定删除吗?',function(){
                    $.ajax({
                        url:'/goods/goodscategorylist/'+id,
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