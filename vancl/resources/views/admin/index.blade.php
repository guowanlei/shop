@extends('public.father')

@section('content')
<div class="panel panel-default">
    {{--<div class="panel-heading">--}}
        {{--<h3 class="panel-title">后台首页</h3>--}}
    {{--</div>--}}
    {{--<div class="panel-body">--}}
       {{--后台首页内容--}}
    {{--</div>--}}
    <div class="jumbotron">
        <h1>Hello, Everybody!</h1>
        <p>welcome to here! let's go to the category</p>
        <p><a class="btn btn-primary btn-lg" href="/goods/goodscategory" role="button">商品栏目管理</a>&nbsp;&nbsp;
            <a class="btn btn-primary btn-lg" href="" role="button">我的资料</a>&nbsp;&nbsp;
            <a class="btn btn-primary btn-lg" href="" role="button">网站配置</a>&nbsp;&nbsp;
            <a class="btn btn-primary btn-lg" href="" role="button">轮播图管理</a>
        </p>
    </div>



</div>
<script>
    require(['bootstrap']);
</script>
@endsection