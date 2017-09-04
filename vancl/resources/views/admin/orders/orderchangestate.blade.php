@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">

        <li><a href="/goods/allorders">订单列表</a></li>
        <li class="active"><a href="#">订单状态</a></li>

    </ul>
    <form action="/goods/saveorderstate" method="post" role="form"  style="width: 500px;margin-left: 100px;" >
        <div class="form-group">
            <label for=""  style="font-size: 16px">当前订单状态</label>
            <input type="text" class="form-control" name="" id="" value="{{$ordersdata['state']}}">
        </div> <div class="form-group">
            <label for=""  style="font-size: 16px">选择订单状态</label>

            <select name="state" class="form-control" required>
                <option value="已付款">请选择状态</option>
                <option value="已付款">已付款</option>
                <option value="已发货">已发货</option>
                <option value="已评价">已评价</option>
                <option value="待评价">待评价</option>
                <option value="待发货">待发货</option>
            </select>
        </div>
       {{csrf_field()}}
        <input type="hidden"  name="ordernumber"  value="{{$ordersdata['ordernumber']}}" >
        <button type="submit" class="btn btn-primary">保存修改状态</button>
    </form>


@endsection