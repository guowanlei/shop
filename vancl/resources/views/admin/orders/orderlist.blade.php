@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">

        <li><a href="/goods/allorders">订单列表</a></li>
        <li class="active"><a href="#">订单详情</a></li>

    </ul>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>订单号</th>
            <th>尺码，颜色</th>
            <th>商品名称</th>
            <th>单价</th>
            <th>购买数量</th>
            <th>价格小计</th>

        </tr>
        </thead>
        <tbody>
        @foreach($myorderlists as $v)
            <tr>
                <td>{{$v['id']}}</td>
                <td>{{$v['orderid']}}</td>
                <td>{{$v['attrs']}}</td>
                <td>{{$v['title']}}</td>
                <td>{{$v['price']}}</td>
                <td>{{$v['num']}}</td>
                <td>{{$v['price'] * $v['num']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$myorderlists->links()}}

@endsection