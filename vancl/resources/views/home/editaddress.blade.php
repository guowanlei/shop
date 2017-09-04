
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>我的凡客</title>
    <script type="text/javascript" src="http://jsx.vanclimg.com/js.ashx?href=[/jquery/jquery-1.7.1.min,jquery.lazyload,jquery.fn.alert],[/public/cookies_oper.js,org.js.jquery.plugins.hoverintent.js,org.js.jquery.plugins.bgiframe.js]&compress"></script>
    <link href="http://css.vanclimg.com/css.ashx?href=[/public/alert],[/index/global],[/my/share/manage,side-nav.css],[/my/share/vanclssl.css],[/my/share/index2.css]&compress"
          rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="http://i.vanclimg.com/common/favicon/favicon.ico"
          type="image/x-icon" />

    <link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">

    <link  type="text/css" rel="stylesheet"  href="//css.vanclimg.com/css.ashx?href=[/index/global.css,common-header.css,common-footer.css],[/public/autocomplete.css]&compress&ver=20170418102130" />

    <script type="text/javascript" src="//jsy.vanclimg.com/js.ashx?href=[/search/jquery.autocomplete.js],[/public/trace.js],[/index/common-header.js]&compress&ver=20160831113828"></script>
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

    <script type="text/javascript" language="javascript">
        var COOKIE_NAME_WEIXIN = "COOKIE_NAME_WEIXIN";
        $(function () {
            //'标记已看到菜单移位通知'的cookie名
//            var COOKIE_NAME_NEWPLACENOTICE1 = "COOKIE_NAME_NEWPLACENOTICE1";
//            var npn1 = getCookie(COOKIE_NAME_NEWPLACENOTICE1) != "viewed";

//            $.each($("#side-nav").find("ul").children(), function () {
//                if ($(this).find("a").text().indexOf("账户安全") > -1) {
//                    $(this).css("position", "relative").prepend($("<p style='position:absolute; top:0; left:88px; width:30px; height:20px; background:url(//i.vanclimg.com/header/20120309/spritesbg.png) no-repeat -190px -137px;'></p>"));
//                }
//                if (npn1) {
//                    if ($(this).find("a").text().indexOf("退换货") > -1) {
//                        $(this).css("position", "relative").prepend($("<p id='newplacenotice1' style='cursor: pointer;position:absolute; top:1px; left:103px; width:82px; height:20px; background:url(//i.vanclimg.com/my/2012/boot/pjiabg.png) no-repeat -645px 0;  '></p>"));
//                    }
//                }
//            });

//            if (npn1) {
//                $("#newplacenotice1").bind("click", function () {
//                    setCookie(COOKIE_NAME_NEWPLACENOTICE1, "viewed", 365 * 100);
//                    $(this).remove();
//                });
//            }

            if (!getCookie(COOKIE_NAME_WEIXIN)) {
                $("#WeixinBox").show();
            }
            $("img[original]").lazyload();
        });
        function closeWeixin() {
            $("#WeixinBox").hide();
            setCookie(COOKIE_NAME_WEIXIN, "closed");
        }
    </script>
    <style type="text/css">
        body
        {
            font-size: 12px !important;
        }
        .newitenforsafecenteonly
        {
            background: url("http://i.vanclimg.com/header/20120309/spritesbg.png") no-repeat scroll 0 0 transparent;
            background-position: -190px -132px;
            width: 100px;
        }
        #Head a:hover
        {
            text-decoration: none;
        }
    </style>

</head>
<body id="body" class="cols_manage">
<div id="Head">

    @include('public.vancl')
</div>
<div class="wrapper">
    <div style="height: 15px; clear: both; overflow: hidden">
    </div>
    <dl id="position" >
        <dt> 您当前的位置：<a href="/">凡客首页</a></dt>
        <dd> &gt; <a href="#"> 我的凡客 </a></dd>
        <dd>&gt; <span id="UserMap"></span></dd>
    </dl>
    <div id="welcome">
    </div>

    <div id="side-nav">
        <div class="my_vancl">
            <h2>
                <a href="/myvancl/{{$userInfo['id']}}" class="track"  >我的凡客</a></h2>
        </div>
        <ul class="">
            <li>
                <h3>
                    订单中心</h3>
            </li>
            <li class=""><a href="http://my.vancl.com/Order/" class="track"  >  ·我的订单</a></li>

        </ul>

        <ul class="service-rate">
            <li>
                <h3>账户管理</h3>

            </li>

            <li class=""><a href="/myvancl/address/{{$userInfo['id']}}"   style="color: red">  ·收货地址</a></li>

            <li class=""><a href="/myvancl/accountsafety/{{$userInfo['id']}}" class="track" > ·账户安全</a></li>

            <li class=""><a href="" class="track" > ·我的资料</a></li>

        </ul>
    </div>

    <link  type="text/css" rel="stylesheet"  href="//css.vanclimg.com/css.ashx?href=[/my/boot/dapei.css],[/my/share/myvancl-version2.css],[/my/accountsafe/securitylevel.css],[/my/recommand/vanclssl.css,recommended.css]&compress&ver=20150324114411" />


    <script type='text/javascript' src='http://jsx.vanclimg.com/js.ashx?href=[public/ref.js]&compress'></script>
    <style>
        /*1214*/
        .blank30
        {
            clear: both;
            display: block;
            font-size: 1px;
            overflow: hidden;
            height: 30px;
        }
        .AsecurityBox0212
        {
            width: 781px;
        }
        .AsecurityBox0212 .aslevel
        {
            margin-left: 15px;
        }
        .asLevelUl a.withoutVaLink12
        {
            color: #a10000;
            padding-left: 6px;
        }
        .AsecurityBox0212 .aslevelAtart
        {
            color: #999 !important;
        }
        .AsecurityBox0212 .asLevelUl li
        {
            margin: 0px 5px 0px 13px;
            float: left;
            display: inline;
        }
        .my_cont12
        {
            border: none;
            padding: 0px 0px 0px 10px;
            width: 775px;
        }
        .my_txt12
        {
            width: 667px;
        }
        .nickname-panel12
        {
            width: 667px;
        }
        .vjia12
        {
            color: #333;
        }
        .AsecuryMessage12 em
        {
            font-style: normal;
            color: #666;
        }
        .AsecuryMessage12 em.mal1230
        {
            margin-left: 30px;
        }
        .AsecuryMessage12 a
        {
            color: #a10000;
        }
        .my_pic a.myPicEdit12
        {
            line-height: 50px;
        }
        .txt212
        {
            border: 1px solid #dcdcdc;
            width: 460px;
            float: left;
            background: #f8f8f8;
        }
        .txt212 .orderStatusul12 li
        {
            height: 36px;
            line-height: 36px;
            border-bottom: 1px dotted #999;
            width: 308px;
            padding-left: 20px;
            color: #333;
        }
        .txt212 .orderStatusul12 li .padr1220
        {
            padding-right: 20px;
        }
        .txt212 .orderStatusul12 li a span
        {
            color: #a10000;
        }
        .txt212 .orderStatusul12 li.orderStatusli1201
        {
            width: 440px;
            font-weight: bold;
        }
        .txt212 .orderStatusul12 li.orderStatusli1202
        {
            border-right: 1px dotted #999;
        }
        .txt212 .orderStatusul12 li.orderStatusli1203
        {
            border-bottom: none;
        }
        .txt212 .orderStatusul12 li .red12
        {
            color: #a10000;
        }
        .txt212 .orderStatusul12 li .grey12
        {
            color: #666;
        }
        .txt212 .orderStatusul12 li .rules20120112
        {
            font-weight: bold;
            padding-left: 23px;
        }
        .vancladmin_recomtitle12 li
        {
            width: 132px;
            padding-left: 25px;
            line-height: 29px;
            text-align: left;
            float: left;
            background: url(http://i.vanclimg.com/my/2012/recommand/menu_bg.gif) no-repeat left top;
            margin-right: 2px;
            font-size: 12px;
            font-weight: bold;
            color: #666;
        }
        .vancladmin_recomtitle12 .on
        {
            width: 132px;
            text-align: left;
            padding-left: 25px;
        }
        .vancladmin_recomtitle12 li.vancladminrecomtitleLiMore
        {
            background: none;
            width: auto;
            float: right;
            margin-right: 3px;
            display: inline;
        }
        .inviteTable12
        {
            margin-top: 0px;
            border-top: none;
        }

        #menubox ul.vancladmin_recomtitle12
        {
            overflow: hidden;
            border-bottom: 3px #8e0000 solid;
            width: 785px;
        }
        #menubox ul.vancladmin_recomtitle12 li
        {
            width: 132px;
            padding-left: 25px;
            line-height: 29px;
            text-align: left;
            float: left;
            background: url(http://i.vanclimg.com/my/2012/recommand/menu_bg.gif) no-repeat left top;
            margin-right: 2px;
            font-size: 12px;
            font-weight: bold;
        }
        #menubox ul.vancladmin_recomtitle12 .mrnone
        {
            margin: 0;
        }
        #menubox ul.vancladmin_recomtitle12 a, #menubox ul.vancladmin_recomtitle12 a:visited
        {
            color: #666;
        }
        #menubox ul.vancladmin_recomtitle12 .on
        {
            width: 132px;
            background: url(http://i.vanclimg.com/my/2012/recommand/menuon_bg.gif) no-repeat left top;
            color: #fff;
            cursor: pointer;
        }
        #menubox ul.vancladmin_recomtitle12 .on a, #menubox ul.vancladmin_recomtitle12 .on a:visited
        {
            color: #fff;
        }
        #menubox ul.vancladmin_recomtitle12 li.vancladminrecomtitleLiMore
        {
            background: none;
            width: auto;
            float: right;
            margin-right: 3px;
            display: inline;
        }
        #menubox ul.vancladmin_recomtitle12 li.vancladminrecomtitleLiMore a
        {
            color: #a10000;
        }
        .inviteTable12
        {
            margin-top: 0px;
            border-top: none;
        }

        .opinion12, .opinion13
        {
            background: url(http://i.vanclimg.com/my/2012/boot/yjtop.jpg) no-repeat;
            width: 36px;
            height: 93px;
            display: block;
        }
        .opinion13
        {
            background-position: 0px -95px;
            margin-top: 3px;
        }

        /*0108*/
        .rv1_tuijianlist02
        {
            float: left;
            width: 739px;
        }
        .rv1_tuijianlist02 li
        {
            float: left;
            margin-left: 10px;
            display: inline;
        }
        .vancladminBtLeft, .vancladminBtRight
        {
            width: 21px;
            height: 100px;
            background: url(http://i.vanclimg.com/my/2012/boot/scrollbtn.jpg) no-repeat 0px 0px;
            float: left;
            margin-top: 29px;
            display: inline-block;
            text-indent: -9999px;
            cursor: pointer;
            overflow: hidden;
        }
        .vancladminBtRight
        {
            background-position: -33px 0px;
            float: right;
        }
    </style>
    <div class="right_cont">
        <!--- 网站提示内容 --->
        <div style="margin-top: -10px;">
            <div class="blank10"></div>    </div>
        <span class="blank0"></span>
        <!--- 安全级别 --->
        <div class="AsecurityBox02 AsecurityBox0212">
            <div class="aslevel">
                <em>安全级别：</em>
                <div class="asProgSpeed">
                    <span class="asProgNow">弱</span><span class="">中</span><span class="">强</span>
                </div>
            </div>
            <ul class="asLevelUl">
                <li class="aslevelPhone01"><a href="/SafeCenter" title="手机未验证"
                                              class="asLink track" name="my-safe-phone"></a><a href="/SafeCenter" class="withoutVaLink12">手机未验证</a></li>
                <li class="aslevelEmail01"><a href="/SafeCenter" title="邮箱未验证"
                                              class="asLink track" name="my-safe-email"></a><a href="/SafeCenter" class="withoutVaLink12">邮箱未验证</a></li>
                <li class="aslevelPassword01" style="display:none;"><a href="/SafeCenter"
                                                                       title=">未设置支付密码" class="asLink track" name="my-safe-pay"></a><a href="/SafeCenter" class="withoutVaLink12">
                        未设置支付密码</a></li>
            </ul>
            <div class="aslevelAtart" style="display:none;">
                为了您账户资金安全，建议进行<a href="/SafeCenter" class="track" name="my-safecenter">设置</a></div>
        </div>

        <span class="blank30"></span>
        <!--- 用户信息 --->

        <table class="table table-hover">
            <thead>
            <tr>
                <th >收货人 </th>
                <th  > 详细地址</th>
                <th  > 电话/手机  </th>

                <th >操作</th>
            </tr>
            </thead>
            <tbody>
                      @foreach($addressdata as $v)
                <tr>
                    <td>{{$v['username']}}</td>
                    <td>{{$v['city']}} {{$v['town']}} {{$v['street']}} </td>
                    <td>{{$v['phonenumber']}}</td>
                    <td>
                        <div class="btn-group">
          <a href="/address/edit/{{$v['id']}}/{{$userInfo['id']}}" type="button" class="btn btn-default">编辑</a>
          <a href="javascript:;" onclick="del({{$v['id']}})" type="button" class="btn btn-default">删除</a>
                        </div>
                    </td>
                </tr>
                    @endforeach
            </tbody>
        </table>


        <script>
            function del(id){
                require(['util'], function (util) {
                    util.confirm('确定删除吗?',function(){
                        $.ajax({
                            url:'/address/delete/'+id,
                            type:'get',
                            success:function (res) {
                                util.message(res.message,'refresh');
                            }
                        })
                    })
                })
            }
        </script>



                            <div    style="width: 100%;height: 50px;margin-bottom: 20px " >
        <p style="width: 100%;height: 50px;line-height: 50px;text-align: center;font-size: 20px;border:solid 1px saddlebrown;">修改收货地址</p>

                            </div>




                                <form action="/store/editaddress/{{$editaddress['id']}}/{{$userInfo['id']}}" method="post" ole="form">

                                    {{csrf_field()}}
                                    <div class="form-group" >

                                        <label for="">姓名</label>
                                        <input type="text" class="form-control" name="username" required="required" value="{{$editaddress['username']}}">
                                        <br>
                                        <label for="">电话</label>
                           <input type="text" class="form-control" name="phonenumber" required="required" value="{{$editaddress['phonenumber']}}">
                                        <br>

                                        <label for="" >所在 省市</label>
                                        <input type="text" class="form-control" name="city" required="required" value="{{$editaddress['city']}}">
                                        <br>
                                        <label for="">所在地区 </label>
                                        <input type="text" class="form-control" name="town" required="required" value="{{$editaddress['town']}}">
                                        <br>
                                        <label for="">具体地址 街道门牌号 </label>
                                        <input type="text" class="form-control" name="street" required="required" value="{{$editaddress['street']}}">

                                    </div>

                                    <button  style="margin-left:300px;margin-bottom: 30px;" type="submit" class="btn btn-primary">保存修改地址</button>
                                </form>


        <!--防止boot.js报错-->
        <input type="hidden" id="partUserUrl" value="" />
        <script type="text/javascript">
            $(document).ready(function () {
                //异步获取总消费金额和订单数
                $.ajax({
                    type: "get",
                    url: "/Boot/GetSumOrderInfo",
                    dataType: "Json",
                    success: function (data) {
                        //$("#spanSum").html(data.OrderSum);
                        $("#spanOrderCount").html(data.OrderCount);
                    }
                });

                //异步获取进行中订单和未评论订单
                $.get("/Boot/_SubUserInfo", function (data) {
                    $("#liOrderRelative").html(data);
                });

                //异步获取商品问答数据
                //        $.get("/Question/GetNotReadAmount", function (data) {
                //            $("#spanReply").html(data);
                //        });
            });
        </script>
        <!--- 首页推荐 --->
        <span class="blank15"></span>
        <div class="vancladmin_recombar" style="display: none;">
            <ul class="vancladmin_recomtitle vancladmin_recomtitle12">
                <li class="on" style="cursor: pointer; color: #fff;"><a class="track" name="my-recommend-tab-favorites"
                                                                        style="margin-left: 25px;" href="#" onclick="return false;">为您推荐</a> </li>
                <li class="vancladminrecomtitleLiMore">
                    <p class="vancladmin_recommore">
                        <a class="track redfn" name="my_morerecm" target="_blank" href="http://my.vancl.com/recommand/MyCommend"
                           style="float: right; color: #A10000; display: none;">更多&gt;&gt;</a></p>
                </li>
            </ul>
            <div id="tabs-5" class="vancladmin_recomlistbar">
                <div fid="loading" style="display: none; width: 770px; height: 100%;">
                    <center>
                        <img src='http://i.vanclimg.com/my/2012/order/loading.gif' alt='加载中……' /></center>
                </div>
                <!--我的凡客 推荐左边翻页-->
                <div class="vancladminBtLeft" style="visibility: hidden; display: none;" currentpage=""
                     dirs="left">
                </div>
                <ul fid="recommandlist" class="rv1_tuijianlist02" style="margin-left: 21px;">
                    <span class="rclear"></span>
                </ul>
                <!--我的凡客 推荐右边翻页-->
                <div class="vancladminBtRight" style="visibility: hidden; display: none;" currentpage=""
                     dirs="left">
                </div>
                <span class="rclear"></span>
            </div>
        </div>
        <span class="blank15"></span>
        <!--- 评论 --->
        <span id="commentProduct"></span>
        <script language="javascript" type="text/javascript">
            $(function () {
                $("#commentProduct").AjaxLoadPage({
                    url: "/boot/_CommentProduct?ram=" + Math.random()
                });
            })
        </script>
        <span class="blank15"></span>
        <!--- 搭配 --->
        <div id="recommendsuit" style="display: none">
        </div>
    </div>

    {{--<script type="text/javascript" src="//jsy.vanclimg.com/js.ashx?href=[/my/boot/boot.js,recommend.js],[/my/share/vanclim.js]&compress&ver=20160831113943"></script>--}}


    {{--<script src="http://js.vanclimg.com/my/share/vancl.plugin/ajaxLoadpage.js" type="text/javascript"></script>--}}
    {{--<script src="http://js.vanclimg.com/my/share/jquery.plugin/jquery.tmpl.min.js" type="text/javascript"></script>--}}

    {{--<script id="zftemplate" type="text/x-jquery-tmpl">--}}
     {{--<li>--}}
          {{--<p class="v1_recohotpic"><a class = "track" name="my_mixrecm"  target="_blank"  href="${ ProductUrl }"  rel="${ Ref }"><img fid="productimg" style="border-width:0px;" alt="${ ProductName }" src1="${ SmallImage }" productid = "${ ProductCode }"></a></p>--}}
          {{--<p class="v1_recohottitle"><a  class = "track" name="my_mixrecm"   fid="productname" target="_blank"  href="${ ProductUrl }"  rel="${ Ref }">${ ProductName }</a></p>--}}
          {{--<p class="v1_recohotprice1">--}}
            {{--<span class="reda10b">售价￥${ Price }</span></p>--}}
        {{--</li>--}}
{{--</script>--}}
    {{--<input id="hdnExcludeProductCode" type="hidden" />--}}
    <script type="text/javascript">
        var cache = new Object();
        var labelArray=[];//标签数组
        var recommendProducts;//存储推荐的productcodes
        function InitRecommand(postion,ModelProductCodeList)
        {
            $("li","[fid=recommandlist]").remove();
            $("[fid=loading]").show();
//     if(cache[postion] != undefined)
//     {
//        Render(cache[postion]);
//        return;
//     }
//     var ModelRows = 6;
//     var ModelUserId = 80453283;
//     var paramJson = "[{UserId:\"" + ModelUserId + "\" ,ProductCodes:\"" + ModelProductCodeList + "\",Position:\"" + postion + "\",Remark: \"NeedExclude\",ExtraField:\"" + "ListImage" + "\",ExcludeProductCode:\" " + ($("#hdnExcludeProductCode").val()) + "\" , Rows:\"" + ModelRows + "\"}]";
//        $.getJSON("http://app-recm.vancl.com/RecmService/GetProductByPosition?jsoncallback=?", { strJson: paramJson },
//            function(data) {
//                cache[postion] = data;
//                Render(data);
            //            });
            var ModelRows = ModelProductCodeList.length > 6 ? 6 : ModelProductCodeList.length;
            var items = [];
            for (var i = 0; i < ModelRows; i++) {
                items[i] = { "MarketPrice": ModelProductCodeList[i].SPrice + ".00", "Price": ModelProductCodeList[i].SPrice + ".00", "ProductCode": ModelProductCodeList[i].ProductCode, "ProductName": ModelProductCodeList[i].ProductName, "ProductUrl": ModelProductCodeList[i].ItemUrl, "SmallImage": ModelProductCodeList[i].Photos[0].FileName, "Ref": "r-my_hp-frb-" + i }
            }
            var dataList = { "Message": "调用成功", "Success": true, "Title": "根据最近浏览商品的推荐", "Items": items };
            //console.log(dataList);
            //cache[postion] = dataList;
            Render(dataList);
        }

        function Render(data)
        {
            if (data.Success) {
                $("[fid=loading]").hide();
                $("li","[fid=recommandlist]").remove();

                ///获取推荐Tab中的ProductCode们
                var epc = $("#hdnExcludeProductCode").val();
                var epc_is_changed = false;

                $(data.Items).each(function(index) {
                    if (data.Items[index] == null) {
                        return;
                    }
                    data.Items[index].ProductUrl = "http://item.vancl.com/"+ data.Items[index].ProductCode.toString() +".html";
                    $("#zftemplate").tmpl(data.Items[index]).appendTo($("[fid=recommandlist]"));
                    //Tab切换时，处理推荐Tab对应的ProductCode们
                    if ( ("," + epc + ",").indexOf("," + data.Items[index].ProductCode.toString() + ",") == -1 ) {
                        epc_is_changed = true;
                        if (epc == "") {
                            epc = data.Items[index].ProductCode.toString();
                        }
                        else {
                            epc += "," + data.Items[index].ProductCode.toString();
                        }
                    }
                    //end-11
                });
                //Tab切换时，若有新ProductCode出现
                if (epc_is_changed) {
                    $("#hdnExcludeProductCode").val(epc);
                }

                $("[fid=productimg]").each(function(){
                    var productcode = $(this).attr("productid");
                    var filename = $(this).attr("src1");
                    $(this).attr("src","http://p1.vanclimg.com/110/product/" + productcode.substring(0, 1) + "/" + productcode.substring(1, 2) + "/" + productcode.substring(2, 3) + "/" + productcode + "/" + "big/" + filename);
                });
                $("[fid=productname]").each(function(){
                    $(this).text(GetFixedText($(this).text(),36));
                });
            }
        }
        function GetFixedText(txt,length)
        {
            var retval ="" ;
            var allcount = getBytesCount2(txt);
            if(allcount <= length)
            {
                return txt;
            }
            var currentlength = 0;
            for(var i = 0; i < txt.length;i++)
            {
                var reg = new RegExp("/[\u0000-\u00ff]/g");
                var tem;
                if(reg.test(txt.charAt(i)))
                {
                    tem = 1;
                }
                else
                {
                    tem = 2;
                }
                if(currentlength + tem < length - 2)
                {
                    currentlength += tem;
                    retval += txt.charAt(i);
                }
                else
                {
                    return retval + "..";
                }
            }
        }
        function getBytesCount2(str)
        {
            if (str == null){
                return 0;
            }
            else{
                return (str.length + str.replace(/[\u0000-\u00ff]/g, "").length);
            }
        }
        function ArrayIndexOf(a,val)
        {
            for (var i=0; i<a.length; i=i+1) {
                if (a[i] === val) {
                    return i;
                }
            }
            return -1;
        }
        //搭配推荐和积分换购
        $(function(){
            $("#position dd:last").remove();

            // 2016 加载推荐产品
            $.ajax({
                async: false,
                url: "http://recom-s.vancl.com/Product/GetCurrentRecommendProducts",
                type: "GET",
                dataType: 'jsonp',
                jsonp: 'callback',
                data: null,
                timeout: 5000,
                contentType: "application/json;utf-8",
                success: function (data) {
                    if (data != null && data != undefined && data.length > 0) {
                        $(".vancladmin_recombar").show();
                        InitRecommand(data.length,data);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(textStatus);
                }
            });
            //获取首页推荐单品
//        $.ajax({
//        url: "/Recommand/GetJsonRecommendModeInMy?ram=" + Math.random(),
//        dataType:"json",
//        success:function(data){
//            $(".vancladmin_recombar").show();
//            labelArray=data["RecommendLabel"].split(";");
//            recommendProducts=data;
//            //首次加载
//            InitRecommand(labelArray[0],recommendProducts[labelArray[0]]);
//            //多于两页时添加事件
//            if(labelArray.length>1){
//                $("div[currentpage]").each(function(){
//                    $(this).attr("currentpage",labelArray[0])
//                    $(this).click(function(){
//                        var idx=ArrayIndexOf(labelArray,$(this).attr("currentpage"));
//                        var iNext=$(this).attr("dirs")=="left"?(idx-1):(idx+1);
//                        if(iNext<0){
//                            iNext=labelArray.length-1;
//                        }
//                        else if(iNext>=labelArray.length){
//                            iNext=0;
//                        }
//                        $(this).attr("currentpage",labelArray[iNext])
//                        InitRecommand(labelArray[iNext],recommendProducts[labelArray[iNext]]);
//                    });
//                });
//                $("div[currentpage]").css("visibility","visible");
//            }
//            else{
//                //$("div[currentpage]").hide();
//            };
//        },
//        error:function(XMLHttpRequest){
////            alert('test');
////            alert(XMLHttpRequest.responseText);
//        }
//        });
        })
    </script>


    <div class="blank0" style="height:32px;"></div><div class="vanclFoot" style="margin-top:0px;"><div class="vanclCustomer publicfooterclear"><ul><li><a href="//help.vancl.com/Home/contact" rel="nofollow" target="_blank"><p class="onlineCustomer"><img src="//i4.vanclimg.com/cms/20160802/onlinecustomer.png" style="width:auto;height:auto;"></p><p class="onlineTime"> 7X9小时在线客服</p></a></li><li><a href="//help.vancl.com/Category/43-1.html" rel="nofollow" target="_blank"><p class="seven"><img src="//i2.vanclimg.com/cms/20160802/seven.png" style="width:auto;height:auto;"></p><p> 7天内退换货</p><p> 购物满199元免运费</p></a></li><li class="twocode"><p><img src="//i7.m.vancl.com/oms/2014_8_29_16_39_33_7709.jpg" style="width: 104px; height: 104px;"></p><p> 扫描下载<em>凡客</em>客户端</p></li></ul></div><div class="vanclOthers publicfooterclear"><ul><li><a href="//www.vancl.com/help/about.htm" target="_blank">关于凡客</a></li><li><a href="//help.vancl.com/Content/1.html" target="_blank">新手指南</a></li><li><a href="//help.vancl.com/category/transfer" target="_blank">配送范围及时间</a></li><li><a href="//help.vancl.com/Category/31-1.html" target="_blank">支付方式</a></li><li><a href="//help.vancl.com/Category/43-1.html" target="_blank">售后服务</a></li><li class="none"><a href="//help.vancl.com/" target="_blank">帮助中心</a></li></ul></div></div><div id="footerArea" class=""><div class="footBottom"><div class="footBottomTab"><p> Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11011502002400号 出版物经营许可证新出发京批字第直110138号</p><p> 凡客诚品（北京）科技有限公司</p></div></div><span class="blank20"></span><div class="subFooter"><a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a><span class="costumeOrg"></span><a rel="nofollow" href="//www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a><a rel="nofollow" href="//www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a><a class="vanclqingNian" target="_blank" href="//www.vancl.com/help/about_2.htm" rel="nofollow"></a><a href="//trust.cctvmall.cn/reg/templates/brandtem1010.html" style="display: inline-block;" target="_blank"><img style="width: 120px; height: 39px;" src="//i.vanclimg.com/other/kexin_brand_for_others.png"/></a><div class="blank0"></div></div></div><div class="BayWindow" style="position: fixed; right: 10px; bottom: 20px; z-index:10"><ul><li class="downApp"><a href="//m.vancl.com/html/app.html#ref=hp-hp-head-mobile-v:n" target="_blank"></a></li><li class="online"><a href="//imweb.vancl.com/" target="_blank"></a></li><li class="BlackTop"><a href="javascript:;" onclick="javascript:document.getElementById('headerTopArea').scrollIntoView()"></a></li></ul></div><script type="text/javascript"> $(document).ready(function () { var hostname = window.location.host; if (hostname != "demowww.vancl.com" && hostname != "www.vancl.com" && hostname != "www.fanke.com") { $(".subnavCon em").css({ display: "block" }); $(".subnavCon").hover(function () { $(this).find("em").addClass("emtop"); $(this).parent().find(".categoryList").show(); }, function () { $(this).find("em").removeClass("emtop"); $(this).parent().find(".categoryList").hide(); }); $(".categoryList").hover(function () { $(this).show(); }, function () { $(this).hide(); $(this).parent().find(".subnavCon em").removeClass("emtop"); }); } }); setTimeout(function () { var bp = document.createElement('script'); bp.src = '//push.zhanzhang.baidu.com/push.js'; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(bp, s); }, 1000); $(function () { $(".subNav").hide(); $(".navlist ul li").hover(function () { $(this).find(".subNav").stop(true, true); $(this).find(".subNav").slideDown(); }, function () { $(this).find(".subNav").stop(true, true); $(this).find(".subNav").slideUp(); }); })</script>    </div>
<div id="WeixinBox" style="display:none; position: fixed; bottom:0; z-index:1000;width:146px;">
    <img src="http://i.vanclimg.com/users/10/tc.png" alt="关闭" title="关闭" style="float:right;cursor:pointer;" onclick="closeWeixin();" />
    <span class="blank0"></span>
    <img src="http://i3.vanclimg.com/cms/20141204/vanclqrcode2.jpg" alt="凡客二维码" title="凡客二维码" style="width:144px;border:1px solid #EFEFEF;" />


</div>
<script type="text/javascript" src="http://jsx.vanclimg.com/js.ashx?href=[/public/ct,cookies_oper]&compress"></script>

</body>
</html>
