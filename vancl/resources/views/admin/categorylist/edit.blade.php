@extends('public.father')

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="/goods/goodscategorylist">商品分类标签列表</a></li>
        <li class="active"><a href="/goods/goodscategorylist/create">修改商品分类标签</a></li>
    </ul>
    <form action="/goods/goodscategorylist/{{$data['id']}}" method="post" role="form" class="form-horizontal">
        {{--令牌touken--}}
        {{csrf_field()}}
        {{--伪造表单提交--}}
        {{ method_field('PUT') }}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">修改商品分类标签</h3>
            </div>
            <div class="panel-body">

                {{--选择父级商品分类--}}

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">父级分类</label>
                    <div class="col-sm-10">
                        <select type="text" class="form-control" name="fathercategory_id" required="required">

                            @foreach($fatherdata as $v)

                                @if($data['fathercategory_id']==$v['id'])
                                <option value="{{$v['id']}}"  selected="selected"    >{{$v['catname']}}</option>

                                @else

                                    <option value="{{$v['id']}}">{{$v['catname']}}</option>
                                @endif

                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品分类标签名称</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="labelcatname"   value="{{$data['labelcatname']}}"  required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品分类标签描述</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="labeldescription"   value="{{$data['labeldescription']}}"  required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">推荐</label>
                    <div class="col-sm-10">

                        @if($data['iscommond']==1)
                            <label class="radio-inline">
                                <input type="radio" name="iscommond"   checked="checked" value="1"> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="iscommond" value="0" > 否
                            </label>
                        @else
                            <label class="radio-inline">
                                <input type="radio" name="iscommond" value="1"> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="iscommond" value="0" checked="checked"> 否
                            </label>

                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">热门</label>
                    <div class="col-sm-10">


                        @if($data['ishot']==1)
                            <label class="radio-inline">
                                <input type="radio" name="ishot" checked="checked" value="1"> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="ishot" value="0" > 否
                            </label>
                               @else
                            <label class="radio-inline">
                                <input type="radio" name="ishot"  value="1"> 是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="ishot" value="0" checked="checked"> 否
                            </label>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <button type="submit" class="btn btn-primary">保存修改</button>
    </form>
@endsection