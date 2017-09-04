<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>凡客诚品 - 后台管理</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
    <link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/node_modules/hdjs/css/font-awesome.min.css')}}"  rel="stylesheet">
    <link href="/node_modules/hdjs/css/aa.css" rel="stylesheet">
    <script>
        //模块配置项
        var hdjs = {
            //框架目录
            'base': '/node_modules/hdjs',
            //上传文件后台地址
            'uploader': '/component/upload',
            //获取文件列表的后台地址
            'filesLists': '/component/filesLists',
        };
    </script>
    <script src="{{asset('/node_modules/hdjs/app/util.js')}}"></script>
    <script src="{{asset('/node_modules/hdjs/require.js')}}"></script>
    <script src="{{asset('/node_modules/hdjs/config.js')}}"></script>
    <link href="{{asset('/css/hdcms.css')}}" rel="stylesheet">
    <script>
        require(['jquery'],function ($) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>
</head>
<body class="site">
<div class="container-fluid admin-top">
    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="top_menu">
                        <a href="/admin/index" class="quickMenuLink">
                            <i class="'fa-w fa fa-comments-o"></i> 网站主页 </a>
                    </li>
                    <li class="top_menu">
                        <a href="http://houdunwang.com" target="_blank">
                            <i class="'fa-w fa fa-cubes"></i> 实战培训 </a>
                    </li>
                    <li class="top_menu">
                        <a href="http://houdunren.com" class="quickMenuLink">
                            <i class="'fa-w fa fa-cubes"></i> 在线视频 </a>
                    </li>
                    <li class="top_menu">
                        <a href="http://bbs.houdunwang.com" class="quickMenuLink">
                            <i class="'fa-w fa fa-cubes"></i> 论坛讨论 </a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-w fa-user"></i>
                            {{Auth::guard('adminlogin')->user()->username}} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{asset('/admin/changePassword')}}">我的帐号</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:;" onclick="loginout()">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        function loginout() {
            require(['util'],function (util) {
                util.confirm('确定退出登录吗?',function(){
                    location.href = '/admin/loginout';
                })
            })
        }
    </script>
    <!--导航end-->
</div>
<!--主体-->
<div class="container-fluid admin_menu">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
            <div class="search-menu">
                <input class="form-control input-lg" type="text" placeholder="输入菜单名称可快速查找"
                       onkeyup="search(this)">
            </div>
            <!--扩展模块动作 start-->
            <div class="panel panel-default">
                <!--系统菜单-->
                <div class="panel-heading">
                    <h4 class="panel-title">系统管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="35">
                        <a href="{{asset('/admin/changePassword')}}">我的资料 </a>
                    </li>
                </ul>
                <div class="panel-heading">
                    <h4 class="panel-title">商品分类管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="39">
                        <a href="/goods/goodscategory">添加商品分类 </a>
                    </li>
                    <li class="list-group-item" id="40">
                        <a href="/goods/goodscategorylist">添加商品分类标签</a>
                    </li>

                </ul>

                <div class="panel-heading">
                    <h4 class="panel-title">商品管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="39">
                        <a href="/goods/attr">添加商品属性 </a>
                    </li>
                    <li class="list-group-item" id="40">
                        <a href="/goods/goods">添加商品</a>
                    </li>
                    <li class="list-group-item" id="40">
                        <a href="/goods/goodscategorylist">添加商品>货品</a>
                    </li>

                </ul>

                <div class="panel-heading">
                    <h4 class="panel-title">订单管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="39">
                        <a href="/goods/allorders">查看所有订单 </a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/goods/allorders/Paid">查看已付款订单 </a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/goods/allorders/Shipped">查看已发货订单 </a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/goods/allorders/evaluate">查看已评价订单 </a>
                    </li>
                   <li class="list-group-item" id="39">
                        <a href="/goods/allorders/noevaluate">查看待评价订单 </a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/goods/allorders/noShipped">查看待发货订单 </a>
                    </li>
                </ul>
                <div class="panel-heading">
                    <h4 class="panel-title">轮播图管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>

                <ul class="list-group menus">
                    <li class="list-group-item" id="39">
                        <a href="/goods/addflash">添加轮播图</a>
                    </li>

                </ul>



                <!----------返回模块列表 start------------>
                <!--模块列表-->
                <!--模块列表 end-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-lg-10">
            @yield('content')
        </div>
    </div>
</div>
<div class="master-footer">
    {{--<a href="http://www.houdunwang.com">猎人训练</a>--}}
    {{--<a href="http://www.hdphp.com">开源框架</a>--}}
    {{--<a href="http://bbs.houdunwang.com">后盾论坛</a>--}}
    <br>
     <h2> If you don't work hard, no one can give you, and you want to live</h2>
</div>

@include('public.message')
@include('flash::message')
@include('public.foot')

<script>
    require(['bootstrap']);
</script>
<!--右键菜单添加到快捷导航-->
<div id="context-menu">
    <ul class="dropdown-menu" role="menu">
        <li><a tabindex="-1" href="#">添加到快捷菜单</a></li>
    </ul>
</div>
<!--右键菜单删除快捷导航-->
<div id="context-menu-del">
    <ul class="dropdown-menu" role="menu">
        <li><a tabindex="-1" href="#">删除菜单</a></li>
    </ul>
</div>
</body>
<script>
    require(['bootstrap'], function ($) {
        $('#flash-overlay-modal').modal();
    });
</script>

</html>
{{--<style>--}}
    {{--.pagination {--}}
        {{--margin: 0px;--}}
        {{--float: right;--}}
    {{--}--}}
{{--</style>--}}