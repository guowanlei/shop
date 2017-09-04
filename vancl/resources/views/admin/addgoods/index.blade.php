@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="/goods/goodslist/{{$goods_id}}">货品列表</a></li>
        <li><a href="/goods/addgoods/{{$goods_id}}">添加货品</a></li>
    </ul>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">商品：{{$goodsInfo['title']}}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="100">ID</th>
                    <th>属性组合</th>
                    <th>库存数量</th>
                    <th width="150">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($huopins as $v)
                    <tr>
                        <td>{{$v['id']}}</td>
                        <td>{{$v['attrs']}}</td>
                        <td>{{$v['kucun']}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="/goods/addgoods/edit/{{$v['id']}}" type="button" class="btn btn-default">编辑</a>
                                <a href="javascript:;" onclick="del({{$v['id']}})" type="button" class="btn btn-default">删除</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $huopins->links() }}
    <script>
        function del(id){
            require(['util'], function (util) {
                util.confirm('确定删除吗?',function(){
                    $.ajax({
                        url:'/goods/addgoods/delete/'+id,
                        type:'get',
                        success:function (res) {
                            util.message(res.message,'refresh');
                        }
                    })
                })
            })
        }
    </script>
@endsection