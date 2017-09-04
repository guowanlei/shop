
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>我的订单</title>
    <link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://jsx.vanclimg.com/js.ashx?href=[/jquery/jquery-1.7.1.min,jquery.lazyload,jquery.fn.alert],[/public/cookies_oper.js,org.js.jquery.plugins.hoverintent.js,org.js.jquery.plugins.bgiframe.js]&compress"></script>
    <link href="http://css.vanclimg.com/css.ashx?href=[/public/alert],[/index/global],[/my/share/manage,side-nav.css],[/my/share/vanclssl.css],[/my/share/index2.css]&compress"
          rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="http://i.vanclimg.com/common/favicon/favicon.ico"
          type="image/x-icon" />



    <link  type="text/css" rel="stylesheet"  href="//css.vanclimg.com/css.ashx?href=[/index/global.css,common-header.css,common-footer.css],[/public/autocomplete.css]&compress&ver=20170418102130" />

    <script type="text/javascript" src="//jsy.vanclimg.com/js.ashx?href=[/search/jquery.autocomplete.js],[/public/trace.js],[/index/common-header.js]&compress&ver=20160831113828"></script>

    <style>
        .navlist{
            width:1000px !important;
        }
    </style>
    <script type="text/javascript" language="javascript">
        var COOKIE_NAME_WEIXIN = "COOKIE_NAME_WEIXIN";
        $(function () {


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
        <dd> &gt; <a href="/myvancl/{{Auth::guard('homelogin')->user()->id}}"> 我的凡客 </a></dd>
        <dd>&gt; <span id="UserMap"></span></dd>
    </dl>
    <div id="welcome">
    </div>

    <div id="side-nav">
        <div class="my_vancl">
            <h2>
                <a href="/myvancl/{{Auth::guard('homelogin')->user()->id}}" class="track"  >我的凡客</a></h2>
        </div>
        <ul class="">
            <li>
                <h3>订单中心</h3>

            </li>
            <li class=""><a href="/mymenu" class="track selected"  > ·我的订单</a></li>


        </ul>

        <ul class="service-rate">
            <li>
                <h3> 账户管理</h3>
            </li>
            <li class=""><a href="/myvancl/address/{{Auth::guard('homelogin')->user()->id}}" class="track"  >  ·收货地址</a></li>

            <li class=""><a href="/myvancl/accountsafety/{{Auth::guard('homelogin')->user()->id}}" class="track"  >  ·账户安全</a></li>

            <li class=""><a href="#" class="track"  >  ·我的资料</a></li>

        </ul>
    </div>



    <link type="text/css" rel="stylesheet" href="//css.vanclimg.com/css.ashx?href=[/my/order/orderlist.css,ordertrack.css,cancelOrder.css],[/my/boot/dapei.css],[/my/share/myvancl-version2.css],[/my/accountsafe/securitylevel.css]&compress&ver=2017052513090110">

    <div class="ordercontainer">
        <h3>
            <span>我的订单</span>
            <a href="http://catalog.vancl.com/zhuanti/tg_20100510.html" style="color: #a10000;
            float: right; border: none; font-size: 12px; font-weight: normal; background: url(http://i4.vanclimg.com/cms/20151231/pic_my.jpg) no-repeat left center;
            text-indent: 20px; margin: 0 5px 0 0;" target="_blank">谨防诈骗公告</a>
        </h3>
        <div>
            <div class="blank10"></div>    </div>

        <div class="AsecurityBox01">
            <div class="asProgress">
                <em>账户安全：</em>
                <div class="asProgSpeed">
                    <span class="asProgNow">弱</span><span class="">中</span><span class="">强</span>
                </div>
            </div>
            <ul class="asProgUl" style="_margin-right:-12px;">
                <li class="asProgPhone01"><a href="/SafeCenter" title="手机未验证" class="track" name="my-order-safe-phone"><em></em>手机未验证</a></li>
                <li class="asProgEmail01"><a href="/SafeCenter" title="邮箱未验证" class="track" name="my-order-safe-email"><em></em>邮箱未验证</a></li>
                <li class="asProgPassword01" style="display:none;"><a href="/SafeCenter" title="未设置支付密码" class="track" name="my-order-safe-pay"><em></em>未设置支付密码</a></li>
            </ul>
            <div class="asProgAtarts" style="display:none;">为保障账户及资金安全,建议您开启全部<a href="/SafeCenter" class="track" name="my-order-safecenter">安全设置</a></div>
            <div class="blank0"></div>
        </div>


        <div class="blank10">
        </div>
        <div class="wtitle">
           <h1   style="color: red;width: 100%;text-align: center;font-size: 20px"  >订单详情</h1>
        </div>
        <div id="orderlist">
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

        </div>

    <!--我的订单 为您推荐-->
    <div style="float:right;width:778px;margin-top:5px; display:none;">
        <div class="RecommendedTitle_Pages">
            <span id="page-info"><label></label><span></span></span><span id="pagination"></span>
        </div>
    </div>
    <script type="text/javascript" src="http://jsx.vanclimg.com/js.ashx?href=[/my/share/jquery.plugin/jquery.pagination.js],[/my/boot/recommend.js]&compress&ver=201609011050213"></script>


    <input type="hidden" id="hidFormCodeM" value="0" />
    <!--[if lte IE 6]><script type="text/javascript"> isIE6 = true;</script> <![endif]-->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#MvcPager_Ctrl0_pib").css("width", "16px");
            $("#User_Order_List").addClass("current"); //控制CSS
            $("#UserMap").html("<a href='/order'>我的订单</a>"); //控制CSS
            $("#MvcPager_Ctrl0_pib").css("width", "16px");
            $("#posttime").val($("#posttime option:eq(0)").val());
            if ($("#dingzhiType").val() == "dingzhi") {
                getDingzhiOrderList(); //初始化订单列表
                $("#UserMap").html("<a href='/order?type=dingzhi'>我的定制订单</a>"); //控制CSS
            } else {
                getLabelCount(); //初始化订单列表标签数量
                getInitOrderList(); //初始化订单列表
                getLabCommentProductCount();
            }

        });

        function getDingzhiOrderList() {
            $('#LoadingDiv').show();
            var varsion = (Math.random() * 100000000).toString().substring(0, 6);
            var url = "/order/CustomOrderList?id=1&ver=" + varsion;

            //合并订单修改2012/10/23 start
            if ($('#hidFormCodeM').val() != 0) {
                url += "&formCodeM=" + $('#hidFormCodeM').val();
            }
            //合并订单修改2012/10/23 end

            $.get(url, function (data) {
                    $("#orderlist").html(data);
                    $('#LoadingDiv').hide();
                }
            );
        }


        function getLabCommentProductCount() {
            var url = "/Comment/AjaxGetCanCommentProductCount";
            $.ajax({
                type: "GET",
                cache: false,
                dataType: "json",
                url: url,
                success: function (data) {
                    if (data.success == true) {
                        $("#myTab a").eq(4).find("span").html("").html("(<span>" + data.count + "</span>)")
                    }
                }
            });
        }
    </script>
    <br>

    <script src="http://jsx.vanclimg.com/js.ashx?href=[/public/ref.js]&compress" type="text/javascript"></script>
    <script type="text/javascript" src="//jsy.vanclimg.com/js.ashx?href=[/my/share/vancl.plugin/date.helper.js],[/my/share/jquery.plugin/jquery.unobtrusive-ajax.min.js],[/my/share/vanclim.js],[/my/order/order.list1.js]&compress&ver=20170713044001"></script>






    <div class="blank0" style="height:32px;"></div><div class="vanclFoot" style="margin-top:0px;"><div class="vanclCustomer publicfooterclear"><ul><li><a href="//help.vancl.com/Home/contact" rel="nofollow" target="_blank"><p class="onlineCustomer"><img src="//i4.vanclimg.com/cms/20160802/onlinecustomer.png" style="width:auto;height:auto;"></p><p class="onlineTime"> 7X9小时在线客服</p></a></li><li><a href="//help.vancl.com/Category/43-1.html" rel="nofollow" target="_blank"><p class="seven"><img src="//i2.vanclimg.com/cms/20160802/seven.png" style="width:auto;height:auto;"></p><p> 7天内退换货</p><p> 购物满199元免运费</p></a></li><li class="twocode"><p><img src="//i7.m.vancl.com/oms/2014_8_29_16_39_33_7709.jpg" style="width: 104px; height: 104px;"></p><p> 扫描下载<em>凡客</em>客户端</p></li></ul></div><div class="vanclOthers publicfooterclear"><ul><li><a href="//www.vancl.com/help/about.htm" target="_blank">关于凡客</a></li><li><a href="//help.vancl.com/Content/1.html" target="_blank">新手指南</a></li><li><a href="//help.vancl.com/category/transfer" target="_blank">配送范围及时间</a></li><li><a href="//help.vancl.com/Category/31-1.html" target="_blank">支付方式</a></li><li><a href="//help.vancl.com/Category/43-1.html" target="_blank">售后服务</a></li><li class="none"><a href="//help.vancl.com/" target="_blank">帮助中心</a></li></ul></div></div><div id="footerArea" class=""><div class="footBottom"><div class="footBottomTab"><p> Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11011502002400号 出版物经营许可证新出发京批字第直110138号</p><p> 凡客诚品（北京）科技有限公司</p></div></div><span class="blank20"></span><div class="subFooter"><a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a><span class="costumeOrg"></span><a rel="nofollow" href="//www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a><a rel="nofollow" href="//www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a><a class="vanclqingNian" target="_blank" href="//www.vancl.com/help/about_2.htm" rel="nofollow"></a><a href="//trust.cctvmall.cn/reg/templates/brandtem1010.html" style="display: inline-block;" target="_blank"><img style="width: 120px; height: 39px;" src="//i.vanclimg.com/other/kexin_brand_for_others.png"/></a><div class="blank0"></div></div></div><div class="BayWindow" style="position: fixed; right: 10px; bottom: 20px; z-index:10"><ul><li class="downApp"><a href="//m.vancl.com/html/app.html#ref=hp-hp-head-mobile-v:n" target="_blank"></a></li><li class="online"><a href="//imweb.vancl.com/" target="_blank"></a></li><li class="BlackTop"><a href="javascript:;" onclick="javascript:document.getElementById('headerTopArea').scrollIntoView()"></a></li></ul></div><script type="text/javascript"> $(document).ready(function () { var hostname = window.location.host; if (hostname != "demowww.vancl.com" && hostname != "www.vancl.com" && hostname != "www.fanke.com") { $(".subnavCon em").css({ display: "block" }); $(".subnavCon").hover(function () { $(this).find("em").addClass("emtop"); $(this).parent().find(".categoryList").show(); }, function () { $(this).find("em").removeClass("emtop"); $(this).parent().find(".categoryList").hide(); }); $(".categoryList").hover(function () { $(this).show(); }, function () { $(this).hide(); $(this).parent().find(".subnavCon em").removeClass("emtop"); }); } }); setTimeout(function () { var bp = document.createElement('script'); bp.src = '//push.zhanzhang.baidu.com/push.js'; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(bp, s); }, 1000); $(function () { $(".subNav").hide(); $(".navlist ul li").hover(function () { $(this).find(".subNav").stop(true, true); $(this).find(".subNav").slideDown(); }, function () { $(this).find(".subNav").stop(true, true); $(this).find(".subNav").slideUp(); }); })</script>    </div>
<div id="WeixinBox" style="display:none; position: fixed; bottom:0; z-index:1000;width:146px;">
    <img src="http://i.vanclimg.com/users/10/tc.png" alt="关闭" title="关闭" style="float:right;cursor:pointer;" onclick="closeWeixin();" />
    <span class="blank0"></span>
    <img src="http://i3.vanclimg.com/cms/20141204/vanclqrcode2.jpg" alt="凡客二维码" title="凡客二维码" style="width:144px;border:1px solid #EFEFEF;" />


</div>
<script type="text/javascript" src="http://jsx.vanclimg.com/js.ashx?href=[/public/ct,cookies_oper]&compress"></script>

</body>
</html>
