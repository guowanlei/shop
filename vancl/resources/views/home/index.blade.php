
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>凡客VANCL-互联网快时尚品牌,服装,鞋,配饰,网上购物货到付款网站,7天无条件退货</title>
    <link rel="shortcut icon" href="http://i.vanclimg.com/common/favicon/favicon.ico" type="image/x-icon" />
    <meta name="keywords" content="VANCL,凡客,凡客诚品,货到付款,快时尚,时尚,品牌服装,男装,女装,童装,鞋,家居,配饰,衬衫,牛津纺,青年布,法兰绒,牛津纺衬衫,法兰绒衬衫,衬衣,长袖衬衫,短袖衬衫,全棉,纯棉,全棉衬衫,纯棉衬衫,全棉衬衣,纯棉衬衣,免烫,免熨,免烫衬衫,免熨衬衫,免烫衬衣,免熨衬衣,牛津纺衬衣,领尖扣,直领,小方领,POLO,短袖POLO,长袖POLO,条纹POLO,素色POLO,T恤,圆领T恤,VT,圆领T,印花T,文化衫,卫衣,打底衫,高领衫,低领,鞋,皮鞋,板鞋,商务皮鞋,正装皮鞋,滑板鞋,潮鞋,休闲皮鞋,帆布鞋,运动鞋,运动休闲鞋,家居鞋,雪地靴,靴子,平底鞋,圆头,尖头,女鞋,休闲鞋,男鞋,丝袜,长筒袜,连裤袜,网袜,天鹅绒,瘦腿袜,中筒袜,筒袜,棉袜,靴袜,打底裤,羽绒服,围巾,棉线衫,开衫,针织衫,外套,西服,休闲西服,夹克,大衣,毛衣,背心,毛背心,裤子,长裤,休闲裤,牛仔裤,牛仔,卡其裤,直筒休闲裤,直筒卡其裤,免烫休闲裤,免烫卡其裤,斜纹休闲裤,斜纹卡其裤,短裤,沙滩裤,内衣,内裤,秋衣,秋裤,三角裤,平角裤,袜子,家居,户外,床品,拖鞋,盖毯,断码,打折,特惠,直降" />
    <meta name="description" content="凡客VANCL 官方网站,互联网快时尚品牌,网上购物首选品牌,提供男装、女装,鞋,家居等多种商品网购,支持货到付款的购物网站,特价商品,优惠券,快速配送,货到付款,买衣服网站首选。" />
    <link href="http://cssy.vanclimg.com/css.ashx?href=[/public/autocomplete.css],[/index/global.css,common-header.css,common-footer.css,indexcontentv11.css]&v=20170418102130&compress" type="text/css" rel="stylesheet" charset="utf-8" />

    <script type="text/javascript" src="http://jsx.vanclimg.com/js.ashx?href=[jquery/jquery-1.7.1.min,jquery.lazyload]&compress"></script>
</head>
<body class="full">
<!--<script type="text/javascript">try{if (window.screen.width >= 1210 && $(document).width() >= 1228){window.document.body.className="full";} }catch(e){;}</script>-->
<div id="Head" class="vanclHead">

    <div id="headerTopArea" class="headerTopAreaBox">
        <div class="headerTopArea"><div class="headerTop">
            <div class="headerTopRight" style="width: 126px;">
                <div class="active notice" id="vanclCustomer">
                    <a class="mapDropTitle" href="//catalog.vancl.com/zhuanti/tg_20100510.html" target="_blank">网站公告</a>
                </div>
                <div class="payattention">
                    <em></em><a href="javascript:void(0);" class="vweixinbox">
                    <span class="vweixin" style="background: url(http://i1.vanclimg.com/cms/20150605/w1.jpg) no-repeat left 3px;">

                    </span><b class="vweixinTip"></b></a>
                    <a href="//e.weibo.com/vancl" class="track vanclweibo" name="hp-hp-head-weibo-v:n" target="_blank" style="background: url(http://i2.vanclimg.com/cms/20150605/w2.jpg) no-repeat left 3px;">

                    </a>
                </div>
            </div>
            <div class="headerTopLeft">
                <div id="welcome" class="top loginArea"> 您好,<span class="top">欢迎光临凡客诚品！&nbsp;</span>
                    @if(isset(Auth::guard('homelogin')->user()->username))
                        <span>
                            <a href="/myvancl/{{Auth::guard('homelogin')->user()->id}}"  class="top track">{{Auth::guard('homelogin')->user()->username}}</a> &nbsp;|&nbsp;
                            <a href="/loginout"  class="track">退出登录</a>
                        </span>
                        @else
                        <span>
                            <a href="/login"  class="top track">登录</a>&nbsp;|&nbsp;
                            <a href="/register"  class="track">注册</a>
                        </span>
                        @endif

                </div>

                <div class="recommendArea">
                    <a href="/mymenu" rel="nofollow" class="track" name="hp-hp-head-order-v:n"> 我的订单</a>
            </div>
            </div>
            <span class="blank0"></span>
        </div>
        </div>
    </div>

    <!--顶部通栏广告位-->
    <div id="logoArea" class="vanclLogoSearch">
        <div class="vanclSearch fr">
            <div class="searchTab">
                <div class="search fl">
                    <input type="text" class="searchText ac_input textBox Enter fl" name="k" id="skey" value="搜“熊本熊”，体验与众不同" defaultkey="熊本熊"/>
                    <input type="button" class="searchBtn sousuoBtn btn" id="btnHeaderSearch" onfocus="this.blur()"/>
                </div>
                <div class="buycar fr active" id="shoppingCarNone">
                    <p>
                        <a id="shoppingcar_link"  href="/my/shopcar"  class="shopborder track cartab">购物车(<span car_product_total="shoppingCar_product_totalcount">0</span>)</a>
                       </p>
                    <div class="bottomlines">

                    </div>
                    <div class="BuycarTab shopDropList">

                    </div>
                </div>
            </div>
            <div class="hotWord">
                <p> 热门搜索：<a name="hp-hp-classhotsearch-1_1-v:n" class="track" href="/" target="_blank">T恤</a>
                    <a name="hp-hp-classhotsearch-1_2-v:n" class="track" href="/" target="_blank">免烫衬衫</a>
                    <a name="hp-hp-classhotsearch-1_3-v:n" class="track" href="/" target="_blank">C9</a>
                    <a name="hp-hp-classhotsearch-1_4-v:n" class="track" href="/" target="_blank">熊本熊</a>
                    <a name="hp-hp-classhotsearch-1_5-v:n" class="track" href="/" target="_blank">POLO</a>
                    <a name="hp-hp-classhotsearch-1_6-v:n" class="track" href="/" target="_blank">牛津纺</a>
                    <a name="hp-hp-classhotsearch-1_7-v:n" class="track" href="/" target="_blank">针织衫</a>
                    <a name="hp-hp-classhotsearch-1_8-v:n" class="track" href="/" target="_blank">袜品</a>
                </p>
            </div>
        </div>
    </div>
    <div class="navlist clear" id="mainNavBox" style="z-index:300!important;">
        <ul>
            <li class="vancllogo_Con" style="text-align: left;">
        <a href="/"></a>
            </li>
            <li>
                <a href="/">首页</a>
                <span class="NavLine"></span>
            </li>
            @foreach($newcate as $k=>$v)
            <li>

                <a href="/categorygoods/{{$v['id']}}" class="track"  target="_blank">{{$v['catname']}}
                    @if($v['isnew'])
                        <em style="display:block;width:25px; height:13px; background:url(http://i5.vanclimg.com/cms/20170308/new_0308.png) no-repeat scroll; position:absolute;left:62px;top:-5px;"></em>
                        @endif
                </a>
                <span class="NavLine"></span>
                <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
                    <span></span>
                    <ul>

                                 @foreach($v['son'] as $value)
                        <li>
                            <a href="/categorylistgoods/{{$value['id']}}" class="track"  target="_blank">{{$value['labelcatname']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
  </div>



<div id="content" class="vanclContent vanclCon">


    <style type="text/css">
        .foucsTab .prev, .foucsTab .next {
            cursor: pointer;
            height: 60px;
            width: 28px;
            z-index: 10;
            text-indent: -9999px;
            display: inline-block;
        }
        .foucsTab .prev {
            background: url(http://i3.vanclimg.com/cms/20160918/focus_lr0918.png) no-repeat scroll 0px 0px;
            left: 10px;
            position: absolute;
            top: 230px;
        }
        .foucsTab .prev:hover {
            background: url(http://i3.vanclimg.com/cms/20160918/focus_lr0918.png) no-repeat scroll 0px -61px;
        }
        .foucsTab .next {
            background: url(http://i3.vanclimg.com/cms/20160918/focus_lr0918.png) no-repeat scroll -52px 0px;
            position: absolute;
            right: 10px;
            top: 230px;
        }
        .foucsTab .next:hover {
            background: url(http://i3.vanclimg.com/cms/20160918/focus_lr0918.png) no-repeat scroll -52px -61px;
        }
    </style>

    <div class="vanclFocusAd ">
        <div style="width: 100%; height: 2px;"> </div>
        <div class="vanclFocus ">
            <div class="foucsTab">
                <ul id="slider" class="rslides rslides1">
                    <li data-focusflag="other1" style="background: url(http://i5.vanclimg.com/cms/20170811/535.jpg) no-repeat scroll center 0px;"> <a title="秒杀" href="http://catalog.vancl.com/miaosha.html" class="track" name="hp-hp-focus-1_1-v:n"
                                                                                                                                                      target="_blank"></a></li>

                    <li data-focusflag="other1" style="background: url(http://i5.vanclimg.com/cms/20170815/1200-535.jpg) no-repeat scroll center 0px;"> <a title="暑期大放价" href="http://catalog.vancl.com/sqdfj.html" class="track" name="hp-hp-focus-1_2-v:n"
                                                                                                                                                           target="_blank"></a></li>
                    <li data-focusflag="other1" style="background: url(http://i4.vanclimg.com/cms/20170804/t.jpg) no-repeat scroll center 0px;"> <a title="凡客童装T恤熊本熊" href=" http://catalog.vancl.com/xbxtz.html" class="track" name="hp-hp-focus-1_3-v:n"
                                                                                                                                                    target="_blank"></a></li>
                    <li data-focusflag="other1" style="background: url(http://i4.vanclimg.com/cms/20170804/535-0804.jpg) no-repeat scroll center 0px;"> <a title="高级定制" href="http://catalog.vancl.com/gjdz.html" class="track" name="hp-hp-focus-1_4-v:n"
                                                                                                                                                           target="_blank"></a></li>
                    <li data-focusflag="other1" style="background: url(http://i2.vanclimg.com/cms/20170818/njfsj.jpg) no-repeat scroll center 0px;"> <a title="牛津纺" href="http://catalog.vancl.com/xnjf.html" class="track" name="hp-hp-focus-1_8-v:n"
                                                                                                                                                        target="_blank"></a></li>
                    <li data-focusflag="other1" style="background: url(http://i2.vanclimg.com/cms/20170804/srmjd.jpg) no-repeat scroll center 0px;"> <a title="水柔棉" href="http://catalog.vancl.com/srmhd.html" class="track" name="hp-hp-focus-1_5-v:n"
                                                                                                                                                        target="_blank"></a></li>
                    <li data-focusflag="other1" style="background: url(http://i5.vanclimg.com/cms/20170804/fb-535.jpg) no-repeat scroll center 0px;"> <a title="帆布鞋" href="http://fanbuxie.vancl.com/" class="track" name="hp-hp-focus-1_6-v:n"
                                                                                                                                                         target="_blank"></a></li>
                    <li data-focusflag="other1" style="background: url(http://i3.vanclimg.com/cms/20170804/535jgw.jpg) no-repeat scroll center 0px;"> <a title="吉国武衬衫" href="http://catalog.vancl.com/jgwzt.html" class="track" name="hp-hp-focus-1_7-v:n"
                                                                                                                                                         target="_blank"></a></li>

                    <li data-focusflag="other1" style="background: url(http://i5.vanclimg.com/cms/20170818/1200-535.jpg) no-repeat scroll center 0px;"> <a title="新品上市" href="http://catalog.vancl.com/qjxpss.html" class="track" name="hp-hp-focus-1_9-v:n"
                                                                                                                                                           target="_blank"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <script language="javascript" type="text/javascript">
        function seckill_getdatetime(datestr) {
            var arr = datestr.split(' ');
            var date = arr[0];
            var time = arr[1];
            var dateArr = date.split('-');
            var y = dateArr[0];
            var mm = dateArr[1];
            var d = dateArr[2];

            var timeArr = time.split(':');
            var h = timeArr[0];
            var m = timeArr[1];
            var s = timeArr[2];

            return new Date(y, mm-1, d, h, m, s);
        }

        function seckill_2017_timecounter() {
            var _seckill_starttime = seckill_getdatetime("2017-8-23 08:57:00");  //秒杀开始时间
            var _seckill_endtime = seckill_getdatetime("2017-8-25 09:57:00");   //秒杀结束时间


            //获取当前时间
            var date = new Date();
            var now = date.getTime();
            //设置截止时间
            var starttime = _seckill_starttime.getTime();
            var endtime = _seckill_endtime.getTime();
            var _times;
            var counttime;
            if (now < starttime) {
                //秒杀还没有开始
                _times = "秒杀即将开始，距开始还有";
                counttime = starttime;
            }
            else if (now>= starttime && now < endtime) {
                //秒杀中
                counttime = endtime;
                _times = "秒杀进行中，距结束还有"
            }
            else {
                //秒杀结束
                _times = "该场秒杀已结束";
            }
            //时间差
            if (counttime) {
                var leftTime = counttime - now;
                //定义变量 d,h,m,s保存倒计时的时间
                var d, h, m, s;
                if (leftTime>= 0) {
                    d = Math.floor(leftTime / 1000 / 60 / 60 / 24);
                    h = Math.floor(leftTime / 1000 / 60 / 60 % 24);
                    m = Math.floor(leftTime / 1000 / 60 % 60);
                    s = Math.floor(leftTime / 1000 % 60);
                    if (h < 10) {
                        h = "0" + h;
                    }

                    if (m < 10) {
                        m = "0" + m;
                    }

                    if (s < 10) {
                        s = "0" + s;
                    }
                    _times = "<em class='wordBox'>"+_times+"</em>" + h + "<em></em>" + m + "<em></em>" + s;
                } else {
                    _times = "<em class='wordBox'>"+_times+"</em>" + "00" + "<em></em>" + "00" + "<em></em>" + "00";
                }
                $("#seckill_2017_timecounting").html(_times);
                setTimeout(seckill_2017_timecounter, 1000);
            } else {
                $("#seckill_2017_timecounting").html( "<em class='wordBox'>"+_times+"</em>" + "00" + "<em></em>" + "00" + "<em></em>" + "00");
            }
        }
        $(function () {
            //-------焦点图
            if ($("#slider").responsiveSlides) {
                //根据querystring的值，调整焦点图中的图片顺序
                var firstKey = $("#slider").attr("data-firstKey");
                if (firstKey) {
                    var item = $("li[data-focusflag='" + firstKey + "']", $("#slider"));
                    if (item.size() == 1 && item.index()> 0) {
                        $("#slider").prepend(item.clone());
                        item.remove();
                    }
                }
                $("#slider").responsiveSlides({ auto: true, pager: true, speed: 500, pause: true, nav: true });
            }

            seckill_2017_timecounter();

        });
    </script>

    <span class="blank20"></span>
    <!---  hotShopping  --->
    <style type="text/css">
        span#seckill_2017_timecounting {
            color: #a10000;
            margin-left: 20px;
        }

        .qianggoulist ul li
        {
            float: left;
            width: 214px;
            margin: 0px 30px 32px 0px;
            border: 1px solid #e8e7ec;
            display: inline;
            font-family: "Microsoft YaHei";
            color: #727171;
            font-size: 14px;
            position: relative;
        }
        .qianggoulist ul li h3
        {
            height: 38px;
            padding: 0px 11px;
            line-height: 38px;
            color: #727171;
            margin: 8px 0px 2px;
        }
        .qianggoulist ul li h3 span
        {
            float: right;
            color: #a10000;
            font-size: 14px;
            font-family:Arial;
        }
        .qianggoulist ul li em
        {
            font-size: 16px;
            font-family:Arial;
            color: #a10000;
            /*font-weight: bold;*/
        }
        .qianggoulist ul li span.sale
        {
            display: block;
            height: 42px;
            padding: 0px 11px;
            font-size: 16px;
            line-height: 40px;
            text-align: center;
            background: #f1f1f3;
        }
        .qianggoulist ul li span.sale em
        {
            font-size: 16px;
        }
        .qianggoulist ul li span.qiangbtn
        {
            display: block;
            width: 54px;
            height: 54px;
            background: url(http://i4.vanclimg.com/cms/20160802/qiangbtn.png) no-repeat 0px 0px;
            position: absolute;
            right: 15px;
            top: 15px;
        }
        .shangzhuanglist_top{ *margin-bottom:-30px;}
        .getMoney{ margin:20px 0px;}

        .piclist h2.miaosha{ height:60px; line-height:60px; background:url(http://i2.vanclimg.com/cms/20170814/ms_bg0814.png) no-repeat scroll 0px 0px;}
        span#seckill_2017_timecounting{ float:right; padding-right:16px;}
        span#seckill_2017_timecounting em{ padding-left:34px;}
        span#seckill_2017_timecounting em.wordBox{ color:#ffffff; padding-right:10px;}
    </style>
    <div class="getMoney"> <img src="http://i5.vanclimg.com/cms/20170810/tlg.jpg" usemap="#Map" border="0">
        <map name="Map" id="Map">
            <area shape="rect" coords="417,6,538,39" href="http://cz.vancl.com/DepositPre.aspx" target="_blank" />
            <area shape="rect" coords="1033,6,1144,39" href="http://my.vancl.com/giftcard/getgiftcard" target="_blank" />
        </map>
    </div>
    <div class=" piclist shangzhuanglist shangzhuanglist_top clear">
        <h2 class="miaosha"><span id="seckill_2017_timecounting"> </span></h2>
    </div>

    <table  border="0" cellpadding="0" cellspacing="0" align="center" class="seckillGoods">
        <tr>
        @foreach($seckillcate as $v)
            <td><a href="/fathercategorylist/{{$v['id']}}" target="_blank" class="track" ><img src="{{$v['listimg']}}" width="233" height="460" alt="{{$v['title']}}"></a></td>
            @endforeach
        </tr>
    </table>
    <style>
        /*style="display: block;width:1200px;"*/
        .seckillGoods{
            display: block;
            width:1200px;
        }
        .seckillGoods tr{
            display: block;
            width:1200px;
        }
        .seckillGoods tr td{
            display: block;
            width:20%;
            float:left;
            margin-bottom:20px;
        }

    </style>


    <div class=" piclist shangzhuanglist shangzhuanglist_top clear">
        <h2>新品推荐</h2>
    </div>
    <table  border="0" cellpadding="0" cellspacing="0"  align="center"  class="newcommond"   >
        <tr>

            @foreach($newcommond as $v)
            <td><a href="/fathercategorylist/{{$v['id']}}" target="_blank" class="track" name="hp-hp-xptj-3_1-v:n"><img src="{{$v['listimg']}}" alt="{{$v['title']}}" width="272" height="414"></a></td>
            {{--<td><img src="http://i3.vanclimg.com/cms/20170803/xtsy_12.jpg" width="25" height="414" alt="夏季新品"></td>--}}
            @endforeach
        </tr>
    </table>

    <style>

        .newcommond{
            display: block;
            width:1200px;
            margin-left: 20px;
        }
        .newcommond tr{
            display: block;
            width:1200px;
        }
        .newcommond tr td{
            display: block;
            width:25%;
            float:left;
            margin-bottom:20px;
            /*margin-left: 20px;*/
        }

    </style>


    <div class=" piclist shangzhuanglist shangzhuanglist_top clear">
        <h2>当季热卖</h2>
    </div>



    <table  border="0" cellpadding="0" cellspacing="0"  align="center"   class="hotgoods"  >
        <tr>
               @foreach($hotgoods as $v)
            <td><a href="/fathercategorylist/{{$v['id']}}" target="_blank" class="track" name="hp-hp-xptj-6_1-v:n"><img src="{{$v['listimg']}}" width="272" height="414" alt="{{$v['title']}}"></a></td>
           @endforeach
        </tr>
    </table>

    <style>

        .hotgoods{
            display: block;
            width:1200px;
            margin-left: 20px;
        }
        .hotgoods tr{
            display: block;
            width:1200px;
        }
        .hotgoods tr td{
            display: block;
            width:25%;
            float:left;
            margin-bottom:20px;
            /*margin-left: 20px;*/
        }

    </style>




    <!--底部通栏广告位-->
    <div class="blank0"></div>
    <div class="proAreabox clearFix">
        <style type="text/css">
            .shangzhuanglist {
                overflow: hidden;
            }
            .shangzhuanglist ul li {
                float: left;
                margin-right: 17px;
                display: inline;
            }
            .shangzhuanglist ul li.pic_one {
                width: 590px;
            }
            .shangzhuanglist ul li.pic_two {
                width: 290px;
            }
            .shangzhuanglist ul li.pic_three {
                width: 286px;
            }
            .shangzhuanglist ul li div {
                margin-bottom: 16px;
            }
            .shangzhuanglist ul li h3, .kuzhuanglist ul li h3 {
                height: 28px;
                padding: 20px 12px;
                line-height: 28px;
                border: 1px solid #e8e7ec;
                border-top: 0px;
                font-family: "Microsoft YaHei";
                font-size: 14px;
            }
            .shangzhuanglist ul li h3 span, .kuzhuanglist ul li h3 span {
                float: right;
                color: #a10000;
                font-family: Arial;
                line-height: 24px;
                font-size: 14px;
            }
            .shangzhuanglist ul li h3 span em, .kuzhuanglist ul li h3 span em {
                font-size: 16px;
                padding-left: 10px;
            }
            .kuzhuanglist {
                overflow: hidden;
            }
            .kuzhuanglist ul li {
                width: 285px;
                height: 508px;
                float: left;
                display: inline;
                margin-right: 20px;
                margin-bottom: 20px;
            }
            .otherlist {
                overflow: hidden;
                *margin-bottom:28px;
            }
            .otherlist ul li {
                float: left;
                width: 385px;
                height: 275px;
                display: inline;
                margin: 0px 22px 28px 0px;
            }
            .shangzhuanglist_top {
                *margin-bottom:-30px;
            }
        </style>
        <div class=" piclist shangzhuanglist shangzhuanglist_top clear">
            <h2> 活动专区</h2>
            <ul>
                <li class="pic_one"><a href="http://catalog.vancl.com/gjdz.html"class="track" name="hp-hp-jpzk-1_1-v:n" target="_blank"> <img src="http://i4.vanclimg.com/cms/20170818/dzcs.jpg" alt="定制衬衫" width="590" height="440"/></a>
                    <h3> <span>买四免一</span>指定定制衬衫</h3>
                </li>
                <li class="pic_two">
                    <div> <a href="http://catalog.vancl.com/srmzt.html" class="track" name="hp-hp-jpzk-1_2-v:n"target="_blank"> <img src="http://i1.vanclimg.com/cms/20170818/srm.jpg" alt="两件八折三件七折凡客水柔棉" width="290" height="180"/> </a>
                        <h3><span>两件八折三件七折</span>凡客水柔棉</h3>
                    </div>
                    <div> <a href="http://catalog.vancl.com/polo.html"class="track" name="hp-hp-jpzk-1_3-v:n" target="_blank"> <img src="http://i5.vanclimg.com/cms/20170803/polo.jpg" alt="POLO特惠直降" width="290" height="175"></a>
                        <h3> <span>充值购买相当于68元</span>POLO特惠直降</h3>
                    </div>
                </li>
                <li class="pic_three" style="margin-right: 0px;"> <a href="http://catalog.vancl.com/sqdfj.html" class="track" name="hp-hp-jpzk-1_4-v:n" target="_blank"><img src="http://i1.vanclimg.com/cms/20170818/dfj.jpg" alt="暑期大放价" width="286" height="440"></a>
                    <h3> <span>充值购买更优惠</span>暑期大放价</h3>
                </li>
            </ul>
        </div>
        <div class=" piclist shangzhuanglist clear">
            <h2> 更多精品</h2>
            <ul>
                <li class="pic_one"><a href="http://catalog.vancl.com/jgwzt.html"class="track" name="hp-hp-jpzk-2_1-v:n" target="_blank"> <img src="http://i1.vanclimg.com/cms/20170803/jgw.jpg" alt="吉國武衬衫" width="590" height="440"/></a>
                    <h3><span>充值购买更优惠</span>吉國武衬衫</h3>
                </li>
                <li class="pic_two">
                    <div> <a href="http://vt.vancl.com/" class="track" name="hp-hp-jpzk-2_2-v:n"target="_blank"> <img src="http://i1.vanclimg.com/cms/20170807/3j99-0807.jpg" alt="指定VT充值后相当于3件99元" width="290" height="180"/> </a>
                        <h3> <span>充值后相当于29元起</span>凡客T恤 </h3>
                    </div>
                    <div> <a href="http://catalog.vancl.com/fkkts.html"class="track" name="hp-hp-jpzk-2_3-v:n" target="_blank"> <img src="http://i2.vanclimg.com/cms/20170803/zzs.jpg" alt="空调衫" width="290" height="175"></a>
                        <h3> <span>充值后相当于<em>84</em>元起</span>凡客空调衫</h3>
                    </div>
                </li>
                <li class="pic_three" style="margin-right: 0px;"> <a href="http://catalog.vancl.com/hbx.html" class="track" name="hp-hp-jpzk-2_4-v:n" target="_blank"><img src="http://i4.vanclimg.com/cms/20170803/c9.jpg" alt="C9" width="286" height="440"></a>
                    <h3> <span>充值后相当于 99元起</span>C9</h3>
                </li>
            </ul>
        </div>
        <div class=" piclist shangzhuanglist clear">
            <ul>
                <li class="pic_one"><a href="http://catalog.vancl.com/xnjf.html"class="track" name="hp-hp-jpzk-3_1-v:n" target="_blank"> <img src="http://i3.vanclimg.com/cms/20170809/590440.jpg" alt="凡客牛津纺衬衫" width="590" height="440"/></a>
                    <h3> <span>充值购买更优惠</span>凡客牛津纺衬衫</h3>
                </li>
                <li class="pic_two">
                    <div> <a href="http://catalog.vancl.com/pps.html" class="track" name="hp-hp-jpzk-3_2-v:n"target="_blank"> <img src="http://i2.vanclimg.com/cms/20170803/pps.jpg" alt="泡泡纱" width="290" height="180"/> </a>
                        <h3> <span>充值后相当于<em>99</em>元起</span>泡泡纱衬衫</h3>
                    </div>
                    <div> <a href="http://catalog.vancl.com/shuiximian.html"class="track" name="hp-hp-jpzk-3_3-v:n" target="_blank"> <img src="http://i2.vanclimg.com/cms/20170803/sxm.jpg" alt="水洗棉" width="290" height="175"></a>
                        <h3><span>充值后相当于 <em>68</em>元起</span>水洗棉衬衫</h3>
                    </div>
                </li>
                <li class="pic_three" style="margin-right: 0px;"> <a href="http://catalog.vancl.com/fkps.html" class="track" name="hp-hp-jpzk-3_4-v:n" target="_blank"><img src="http://i5.vanclimg.com/cms/20170803/ps.jpg" alt="凡客配饰" width="286" height="440"></a>
                    <h3> <span>充值后相当于<em>24</em>元起</span>凡客配饰</h3>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="blank0"></div>
<div class="blank0" style="height:32px;"></div><div class="vanclFoot" style="margin-top:0px;"><div class="vanclCustomer publicfooterclear"><ul><li><a href="//help.vancl.com/Home/contact" rel="nofollow" target="_blank"><p class="onlineCustomer"><img src="//i4.vanclimg.com/cms/20160802/onlinecustomer.png" style="width:auto;height:auto;"></p><p class="onlineTime"> 7X9小时在线客服</p></a></li><li><a href="//help.vancl.com/Category/43-1.html" rel="nofollow" target="_blank"><p class="seven"><img src="//i2.vanclimg.com/cms/20160802/seven.png" style="width:auto;height:auto;"></p><p> 7天内退换货</p><p> 购物满199元免运费</p></a></li><li class="twocode"><p><img src="//i7.m.vancl.com/oms/2014_8_29_16_39_33_7709.jpg" style="width: 104px; height: 104px;"></p><p> 扫描下载<em>凡客</em>客户端</p></li></ul></div><div class="vanclOthers publicfooterclear"><ul><li><a href="//www.vancl.com/help/about.htm" target="_blank">关于凡客</a></li><li><a href="//help.vancl.com/Content/1.html" target="_blank">新手指南</a></li><li><a href="//help.vancl.com/category/transfer" target="_blank">配送范围及时间</a></li><li><a href="//help.vancl.com/Category/31-1.html" target="_blank">支付方式</a></li><li><a href="//help.vancl.com/Category/43-1.html" target="_blank">售后服务</a></li><li class="none"><a href="//help.vancl.com/" target="_blank">帮助中心</a></li></ul></div></div><div id="footerArea" class=""><div class="footBottom"><div class="footBottomTab"><p> Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11011502002400号 出版物经营许可证新出发京批字第直110138号</p><p> 凡客诚品（北京）科技有限公司</p></div></div><span class="blank20"></span><div class="subFooter"><a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a><span class="costumeOrg"></span><a rel="nofollow" href="//www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a><a rel="nofollow" href="//www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a><a class="vanclqingNian" target="_blank" href="//www.vancl.com/help/about_2.htm" rel="nofollow"></a><a href="//trust.cctvmall.cn/reg/templates/brandtem1010.html" style="display: inline-block;" target="_blank"><img style="width: 120px; height: 39px;" src="//i.vanclimg.com/other/kexin_brand_for_others.png"/></a><div class="blank0"></div></div></div><div class="BayWindow" style="position: fixed; right: 10px; bottom: 20px; z-index:10"><ul><li class="downApp"><a href="//m.vancl.com/html/app.html#ref=hp-hp-head-mobile-v:n" target="_blank"></a></li><li class="online"><a href="//imweb.vancl.com/" target="_blank"></a></li><li class="BlackTop"><a href="javascript:;" onclick="javascript:document.getElementById('headerTopArea').scrollIntoView()"></a></li></ul></div><script type="text/javascript"> $(document).ready(function () { var hostname = window.location.host; if (hostname != "demowww.vancl.com" && hostname != "www.vancl.com" && hostname != "www.fanke.com") { $(".subnavCon em").css({ display: "block" }); $(".subnavCon").hover(function () { $(this).find("em").addClass("emtop"); $(this).parent().find(".categoryList").show(); }, function () { $(this).find("em").removeClass("emtop"); $(this).parent().find(".categoryList").hide(); }); $(".categoryList").hover(function () { $(this).show(); }, function () { $(this).hide(); $(this).parent().find(".subnavCon em").removeClass("emtop"); }); } }); setTimeout(function () { var bp = document.createElement('script'); bp.src = '//push.zhanzhang.baidu.com/push.js'; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(bp, s); }, 1000); $(function () { $(".subNav").hide(); $(".navlist ul li").hover(function () { $(this).find(".subNav").stop(true, true); $(this).find(".subNav").slideDown(); }, function () { $(this).find(".subNav").stop(true, true); $(this).find(".subNav").slideUp(); }); })</script>

<!--
<style type="text/css">
/*砸屏广告*/
.screenAdPop{ width:980px; position:absolute;left:50%; top:50%; margin-top:-300px;z-index:999999; margin-left:-490px; overflow:hidden;}
.screenAdPop .screenAdPopfull{ display:none;}
.screenAdPop .screenAdPopnarrow{ display:block;}
.screenAdPop a{ display:block;}
.screenAdPop a img{ vertical-align:top;}
.screenAdClose{ display:block; position:absolute; right:14px; top:14px; background:url(http://i3.vanclimg.com/cms/20170417/closedz.png) no-repeat left top; width:29px; height:29px; cursor:pointer;}
.full .screenAdPop{ width:1200px; margin-left:-600px;}
.full .screenAdPop .screenAdPopfull{ display:block;}
.full .screenAdPop .screenAdPopnarrow{ display:none;}
</style>
<div id="overlay">
<div style="background:#000;filter:alpha(opacity=40);opacity:0.4;-moz-opacity:0.4;width:100%;height:100%; position:fixed; _position:absolute;left:0px;top:0px; z-index:999998;"></div>
<div class="screenAdPop">
<p class="screenAdPopfull"><a href="http://catalog.vancl.com/618ms.html" name="hp-hp-billboard-0-v:n" class="track" target="_blank"><img width="1200px" height="600px" src="http://i3.vanclimg.com/cms/20170620/1200x600.jpg" alt=""/></a></p>
<p class="screenAdPopnarrow"><a href="http://catalog.vancl.com/618ms.html" name="hp-hp-billboard-0-v:n" class="track" target="_blank"><img width="980px" height="660px" src="http://i5.vanclimg.com/cms/20170620/980x660.jpg" alt=""/></a></p>
<span class="screenAdClose"></span>
</div>
</div>
<script language="javascript" type="text/javascript">
$(document).ready(function () {
    //遮罩层
    var tipOverlay = $("#overlay");
    if (tipOverlay.length> 0) {
        $("span.screenAdClose", tipOverlay).click(function () { closeTipOverlay(); });
        window.setTimeout(function () { closeTipOverlay(); }, 10000);
    }

    var setting = { closeTipOverlay: false };
    var closeTipOverlay = function () {
        tipOverlay.fadeOut();
        //-------vjia浮窗
        if (setting.closeTipOverlay == false && VANCL.www.VjiaFloatad != undefined) {
            setting.closeTipOverlay = true;
            VANCL.www.VjiaFloatad.init();
        }
    }
});
</script>

<style type="text/css">
.ipad_pop{ position:fixed;left:0;bottom:0;border:2px solid #bdbdbd;width:290px;height:98px;z-index:9999;display:none;}
.ipad_pop .ipad_close{width:14px;height:14px;position:absolute;left:5px;top:5px;background-image: url(http://i1.vanclimg.com/Others/ipad_close.jpg);background-repeat: no-repeat;cursor:pointer;}
.ipad_pop .ipad_down{width:97px;height:30px;position:absolute;left:150px;top:60px;display:inline-block}
</style>
<div class="ipad_pop" id="ipad_pop">
<img src="http://i2.vanclimg.com/Others/ipad_pop.jpg?v=2" width="290" height="98"/>
<span class="ipad_close" id="ipad_close"></span>
<a href="https://itunes.apple.com/app/fan-ke-cheng-pin-hd-hu-lian/id442666468?mt=8?source=vancl_android_003" target="_blank" class="ipad_down"></a>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var h = window.navigator.userAgent;
        if(h.match(/AppleWebKit\/([\d.]*)/) && /Mobile\//.test(h) && h.match(/iPad|iPod|iPhone/)){
            $("#ipad_pop").fadeIn();
        }
        $("#ipad_close").click(function(){
            $("#ipad_pop").fadeOut();
        });

    });
</script>

-->

<script type="text/javascript" src="http://jsy.vanclimg.com/js.ashx?href=[/search/jquery.autocomplete.js],[/public/errorhandler.js,cookies_oper.js,ref.js,ct.js,google-analytics.js,union_websource.js],[/www/responsiveslides.js,public.js],[/index/common-header.js,indexcontentv11.js],[/public/trace.js]&v=20160831233828&compress"></script>

</body>
</html>