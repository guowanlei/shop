@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="/goods/allorders">订单列表</a></li>

    </ul>


    <table class="table table-hover">
        <thead>
        <tr>
            <th width="90px"  >订单ID</th>
            <th>订单号</th>
            <th width="250px"  >收货地址</th>
            <th   >买家留言</th>
            <th>支付方式</th>
            <th>总价</th>
            <th>订单状态</th>
            <th>订单详情</th>
            <th>更改订单状态</th>
        </tr>
        </thead>
        <tbody>

        @foreach($ordersdata as $v)
            <tr>
                <td>{{$v['id']}}</td>
                <td>{{$v['ordernumber']}}</td>
                <td>{{$v['address']}}</td>
                <td>{{$v['Buyermessage']}}</td>
                <td>{{$v['payment']}}</td>
                <td>{{$v['total']}}元</td>
                <td>{{$v['state']}}</td>
                <td><a href="/goods/myorder/Details/{{$v['ordernumber']}}">查看</a>  </td>
                <td> <a href="/goods/myorder/changestate/{{$v['ordernumber']}}">更改订单状态</a></td>
            </tr>

        @endforeach
        </tbody>
    </table>
    {{$ordersdata->links()}}

@endsection