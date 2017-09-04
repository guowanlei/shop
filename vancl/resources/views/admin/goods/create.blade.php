@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="/goods/goods">商品列表</a></li>
        <li class="active"><a href="/goods/goods/create">添加商品</a></li>
    </ul>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">添加商品</h3>
        </div>
        <div class="panel-body">
            <form action="/goods/goods" method="post" role="form" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品名称</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">列表图片</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="listimg" readonly="" value="">
                            <div class="input-group-btn">
                                <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <img src="{{asset('images/nopic.jpg')}}" class="img-responsive img-thumbnail" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                        </div>
                    </div>
                    <script>
                        //上传图片
                        function upImage(obj) {
                            require(['util'], function (util) {
                                options = {
                                    multiple: false,//是否允许多图上传
                                };
                                util.image(function (images) {
                                    //上传成功的图片，数组类型
                                    $("[name='listimg']").val(images[0]);
                                    $(".img-thumbnail").attr('src', images[0]);
                                }, options)
                            });
                        }

                        //移除图片
                        function removeImg(obj) {
                            $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
                            $(obj).parent().prev().find('input').val('');
                        }
                    </script>
                </div>
                <div class="form-group">
                    <label for=""  class="col-sm-2 control-label">所属分类</label>
                    <div class="col-sm-10">
                        <select name="category_id" id="inputID" class="form-control">
                            <option value="">请选择</option>
                            @foreach($categorylist as $value)
                                <option value="{{$value['id']}}">{{$value['labelcatname']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">市场价格</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="shichangprice">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商城价格</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="shangchengprice">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">浏览次数</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="click">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">秒杀商品</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" name="isseckill" value="1"> 是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="isseckill" value="0" checked="checked"> 否
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">推荐商品</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" name="iscommond" value="1"> 是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="iscommond" value="0" checked="checked"> 否
                        </label>
                    </div>
                </div>


                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">热卖商品</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" name="ishot" value="1"> 是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="ishot" value="0" checked="checked"> 否
                        </label>
                    </div>
                </div>



                <div class="form-group"   id="shuxing" style="display: none;"   >
                    {{--<label for="" class="col-sm-2 control-label">商品属性</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<div class="checkbox">--}}
                            {{--@foreach($attrs as $v)--}}
                            {{--<label>--}}
                                {{--<input type="checkbox" name="attrs[]" value="{{$v['id']}}"> {{$v['title']}}--}}
                            {{--</label>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <script>
                    require(['jquery'],function ($) {
                        $('#inputID').change(function () {
                            if($(this).val() != ''){
                                $.ajax({
                                    url:'/goods/getAttr/'+ $(this).val(),
                                    method:'get',
                                    dataType:'json',
                                    success:function (data) {
                                        var html = '';
                                        $.each(data.data,function (k,v) {
                                            html += '<label for="" class="col-sm-2 control-label">'+k+'</label><div class="col-sm-10"><div class="checkbox">';
                                            $.each(v,function (kk,vv) {
                                                html += '<label><input type="checkbox" name="attrs['+k+'][]" value="'+vv.title+'"> '+ vv.title;
                                            })
                                            html += ' </div></div>';
                                        })
                                        $('#shuxing').html(html);
                                    }

                                })
                                $('#shuxing').show();
                            }else{
                                $('#shuxing').hide();
                            }
                        })
                    })
                </script>


                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品描述</label>
                    <div class="col-sm-10">
                        <textarea name="desc" class="form-control" rows="5" style="resize: none;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品详情</label>
                    <div class="col-sm-10">
                        <textarea id="container" style="height:300px;width:100%;"></textarea>
                        <script>
                            util.ueditor('container', {hash:2,data:'hd'}, function (editor) {
                                //这是回调函数 editor是百度编辑器实例
                            });
                        </script>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">保存</button>
            </form>
        </div>
    </div>

@endsection