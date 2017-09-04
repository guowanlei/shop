
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=uft-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$goodsInfo['title']}}  - VANCL 凡客诚品</title>
    <meta name="keywords" content="童装T恤 熊本熊T 12 ，家居生活 室内装饰 装饰小件 挂牌，白色，，VANCL凡客诚品" />
    <meta name="description" content="空，VANCL凡客诚品网上购物、送货上门、货到付款，无条件退换货。" />
    <link rel="shortcut icon" href="//i.vanclimg.com/common/favicon/favicon.ico" type="image/x-icon" />
    <link href="//cssy.vanclimg.com/css.ashx?href=/public/alert.css,/item/danpin.css&v="
          type="text/css" rel="stylesheet" />
    <style type="text/css">.SpriteColors{background-image: url(http://i.vanclimg.com/joinimages.ashx?d=/36/product/&href=6/3/7/637802/10656); width:36px; height:36px; display:inline-block;float:left;}</style>

    <link href="//cssy.vanclimg.com/css.ashx?href=/public/autocomplete.css,/index/global.css,/index/common-header.css,/index/common-footer.css&v="
          type="text/css" rel="stylesheet" />

    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    {{--<script type="text/javascript" src="http://jsx.vanclimg.com/js.ashx?href=[jquery/jquery-1.7.1.min,jquery.lazyload]&compress"></script>--}}
    <title>

    </title></head>
<body id="main" class="cols_manage full">

<div id="Head">

    @include('public.vancl')

   </div>

<div id="ProductTitleHide" class="danpinTitleTab newclear" style="display: none">




    <h2 title="{{$goodsInfo['title']}}">
        {{$goodsInfo['title']}}</h2>
    <div class="AddtoCar fr">


        <a href="#ProductTitleHide" class="cartab" id="hidCartab"></a>


    </div>
    <ul class="ProductSubnav fr" id="ItemTagFixed">

        <li><a href="#anchor1">产品描述</a>|</li>

        <li><a href="#anchorPinglun">评论</a>|</li>
        <li><a href="#anchorQuiz">提问</a></li>
    </ul>

</div>

<div class="danpinBox">
    <input id="CustomerMade" type="hidden" value="NoMade"/>
    <a name="top"></a><span class="blank10"></span>


    <div class="breadNav">
        <a href="/" title="首页" name="nav">
            首页</a><span>&gt;</span>

        <a href="/categorygoods/{{$fcategorylist['id']}}" title="{{$fcategorylist['catname']}}">
            {{$fcategorylist['catname']}}</a><span>&gt;</span>
        <a href="/categorylistgoods/{{$categorylist['id']}}" title=" {{$categorylist['labelcatname']}}">
           {{$categorylist['labelcatname']}} </a><span>&gt;</span>

        <span id="styleinfo" name="1067993">
                {{$goodsInfo['title']}}</span>
    </div>

    <span class="blank0"></span>
    <div class="danpinArea">
        <div id="ProductTitleShow" class="danpinTitleTab newclear">


            <style type="text/css">
                #ProductTitleShow #productTitle .brandNumArea
                {
                    display: none;
                }
            </style>
            <div id="productTitle">
                <div class="brandNumArea">
                    <span id="productcode">商品编号：6378021</span></div>

                <h2 title="{{$goodsInfo['title']}}">  {{$goodsInfo['title']}}</h2>


                <ul class="ProductSubnav fr" id="ItemTag">

                    <li><a href="#anchor1">产品描述</a>|</li>

                    <li><a href="#anchorPinglun">评论</a>|</li>
                    <li><a href="#anchorQuiz">提问</a></li>
                </ul>
            </div>

        </div>
        <span class="blank30"></span>
        <div class="blank0">
        </div>
        <div class="danpin_colLef">

            <div class="danpinLeft">
                <div class="smallImg">
                    <div class="smallImgUp upper" style='visibility: hidden'></div>
                    <ul id="imageMenu">

                        <li  id="onlickImg" name="item-item-img-1" class="track">
                <span class="SpriteSmallImgs" name="http://p4.vanclimg.com/product/6/3/7/6378021/small/6378021-1j201707201630110656.jpg" style="background-image: url(//i.vanclimg.com/joinimages.ashx?d=/product/&href=6/3/7/6378021/small/6378021-1j201707201630110656.jpg,6/3/7/6378021/small/6378021-5201707201630110656.jpg);
                    background-position: 0px -0px">&nbsp;</span> </li>

                        <li  name="item-item-img-2" class="track">
                <span class="SpriteSmallImgs" name="{{$goodsInfo['listimg']}}" style="background-image: url(//i.vanclimg.com/joinimages.ashx?d=/product/&href=6/3/7/6378021/small/6378021-1j201707201630110656.jpg,6/3/7/6378021/small/6378021-5201707201630110656.jpg);
                    background-position: 0px -68px">&nbsp;</span> </li>

                    </ul>
                    <div class="smallImgDown downer" style='visibility: hidden'></div>
                </div>
            </div>

            <div class="danpinColCenter">
                <div class="bigImg" id="vertical">
                    <img id="midimg" src="{{$goodsInfo['listimg']}}" title="{{$goodsInfo['title']}}" />
                    <div id="winSelector" style="left: 0px; top: 0px; display: none;">
                    </div>

                </div>

            </div>

        </div>
        <div id="danpinRight" class="danpinRight" style="top: 0px">
            <div class="danpinfixedtitle">
                <h4 class="fl">
                    加入购物车
                </h4>
                <span class="close1 fr"></span>
            </div>
            <div class="danpinFixedLeftContent">
                <img id="danpinFixedLeftContentImg" src="http://p4.vanclimg.com/product/6/3/7/6378021/mid/6378021-1j201707201630110656.jpg" title=""
                     alt="" />
            </div>
            <div class="danpinFixedRightContent">
                <div name="Normal" id="pricearea">


                    <input id="shopid" type="hidden" value="10258" />
                    <input id="hidattr" type="hidden" value="0" />
                    <span class="blank10"></span>

                    <style type="text/css">
                        .priceLayout
                        {
                            color: Black !important;

                        }
                        .priceLayout1
                        {
                            position: relative;
                            top: 1px;
                            margin-right: -5px;
                            margin-left: -5px;
                            *margin-right: 0px !important;
                            *margin-left: 0px !important;
                        }
                        .priceLayout2
                        {
                            position: relative;
                            top: 2px;
                        }

                        .tehuipricelayout
                        {
                            *position: relative;
                            *top: 13px;
                        }
                        .tehuipricelayout1
                        {
                            *position: relative;
                            *top: 14px;
                        }
                        .tehuipricelayout2
                        {
                            *top: -1px;
                        }
                        /*属性区域自己加的样式*/
                        .gwl {
                            background: yellow;
                            border: 1px solid red;
                        }
                    </style>
                    <input id="hidyue" type="hidden" value="False" />
                    <input id="Hidden1" type="hidden" value="False" />

                    <div class="cuxiaoPrice ">

     <span class="tehuiMoney" style="line-height: 26px;">
        <span>售价：</span><span style="font-family: '微软雅黑';">￥<strong>{{$goodsInfo['shangchengprice']}}</strong></span>
    </span>
         <a href="http://cz.vancl.com/DepositPre.aspx" target="_blank" style="float: left;
                    height: 26px; display: inline-block; margin-left: 20px; line-height: 26px; margin-top: 7px;
                    color: #a10000;">充100返100，点击充值</a>
   </div>
                    <span class="blank10"></span>

                </div>
                <div class="selectArea">
                    <div class="selColorArea">
                        <span class="blank10"></span>

                        <a id="colorlist"></a>
                        @foreach( $goodsInfo['attrs'] as $k=>$v)
                        <div class="danpinColor_Select" >
                            <div class="danpinColorTitle" style="line-height: 18px;">
                                <p>{{$k}}：</p>
                            </div>
                            <div class="selColor" id="special">
                                <ul >
                                    @foreach( $v as $kk=>$vv)
                                    <li  hd="{{$vv}}" >
                                        {{--id="onlickColor"--}}
                                        {{--<div class="colorBlock" name="False" style="width: 40px;" >--}}
             <p style="font-size: 14px;width: 60px;height: 30px;line-height: 30px;display: block"  > {{$vv}}</p>
                                        {{--</div>--}}
                                    </li>
                                    @endforeach
                                </ul>
                                <input type="hidden" name="goods_id" id="goods_id" value="{{$goodsInfo['id']}}">
                                <input type="hidden" id="attrLen" value="{{count($goodsInfo['attrs'])}}">
                                <input type="hidden" name="huopin" value="" id="huopin">

                            </div>
                        </div>
                        @endforeach

                        <script>
                            $(function () {
                                //获取meta标签中的令牌
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

                             var attrLen = $('#attrLen').val();
                               $('#special ul li').click(function () {
                                   var attrs = '';
                                   $(this).addClass('gwl').siblings('li').removeClass('gwl');
                                var goods_id = $('#goods_id').val();
                                 if($('.gwl').length == attrLen){
                                    $.each($('.gwl'),function () {
                                    attrs += $(this).attr('hd') + ',';
                                    })
                                  attrs = attrs.substr(0,attrs.length - 1);
                                     $('#huopin').val(attrs);

                                     $.ajax({
                                         url:'/goodsdetail/checkStatus',
                                         method:'post',
                                         data:{attrs:attrs,goods_id:goods_id},
                                         dataType:'json',
                                         success:function (data) {
                                             console.log(data);
                                             if(data.valid == 1 && data.kucun != 0){
                                                 $('.NowHasGoods').show().html('库存:' + data.kucun);
                                                 $('.NowHasGoods').attr('NowHasGoods',data.kucun);
                                                 $('.SelectName').show().html( data.attrs);
                                             }else{
                                                 $('.NowHasGoods').show().html('该商品暂时无货');
                                                 $('.NowHasGoods').attr('NowHasGoods',0);
                                                 $('.SelectName').show().html('该商品暂时无货');
                                             }
                                         }
                                     })
                                }
                             })
                                var num = parseInt($('#num').html());
                                //点击加号
                                $('.jia').click(function () {
                                    var num = parseInt($('#num').val());
                                    $('#num').val(num + 1);

                                })
                                //点击减号
                                $('.jian').click(function () {
                                    var num = parseInt($('#num').val());
                                    if(num > 1) {
                                        $('#num').val(num - 1);
                                    }
                                })
                         })

//                          点击添加到购物车的判断
                            function addcart() {

                                var attrLen = $('#attrLen').val();
                                var attrs = $('.gwl').length;
//                                alert(attrLen);
                               if (attrs != attrLen){
                                   alert('请选择尺码和颜色');
                                   return false;
                               }else {
                                var num = parseInt($('#num').val());
                                var kucun = parseInt($('.NowHasGoods').attr('NowHasGoods'));
                                var goods_id = $('#goods_id').val();
                                if(num > kucun){
                                    alert('超出商品库存数量,请重新选择数量');
                                    return false;
                                }

                               var huopin = $('#huopin').val();

//                                alert(huopin);

                                $.ajax({
                                    url:'/goodsdetail/addCart',
                                    method:'post',
                                    data:{id:goods_id,huopin:huopin,num:num},
                                    dataType:'json',
                                    success:function (data) {

                                        if(data.islogin == 0){
                                            alert(data.message);
                                            location.href = '/login';
                                            return false;
                                        }

                                        if(data.valid == 1){
                                            alert(data.message);
                                            location.href = '/my/shopcar';//商品添加购物车成功后 跳转到购物车列表
                                        }else{
                                            alert('加入购物车失败');
                                        }
                                    }
                              })
                          }
                       }

                        </script>

                        <div class="selSizeArea">
                            <div class="danpin_xuanzeGMcm" style="display:none;">
                   <span style="height: 16px; display: block; width: 16px; background-position: -1911px 0pt; margin: 2px;float: left; " class="sprites"></span>
                                <p> 请选择您要购买的商品尺码</p>
                            </div>

                        </div>
                        <div class="blank8ie">
                        </div>

                        <div class="goodsNum">
                            <div class="danpinColorTitle" style="line-height: 18px;">
                                <p>数量：</p>

                            </div>
                            <div class="danpinnumSelect">

                                <button class="jian"> - </button>
                                <input type="text" name="num" id="num" value="1" style="width: 30px;text-align:center">
                                <button class="jia"> + </button>


                                <span id="comeon" class="LastNum">余量有限</span> <span class="blank15"></span>
                            </div>
                        </div>
                        <span class="blank0"></span>
                        <div class="AreaItotal SelectGoods">
                            <div class="SelectAreaItotal SelectGoods">
                                <div class="goodsAddArea SelectGoods">
                                    <div class="danpinColorTitle">
                                        <p class="SelectDetail"> 已选：</p>
                                    </div>
                                    <div class="goodsAdd">
                                        <p class="SelectName"> </p>
                                        {{--<span class="SelectPoint">，</span>--}}
                                        {{--<p class="SelectSize">  </p>--}}

                                        <p class="NowHasGoods"> </p>

                                        <span class="blank0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style type="text/css">
                            .lijidingzhiG
                            {
                                background: #B4B4B4;
                                width: 166px;
                                height: 40px;
                                display: block;
                                float: left;
                                margin-right: 13px;
                                border: solid 1px #675D5D;
                                text-align: center;
                                line-height: 40px;
                            }
                            .lijidingzhiG span
                            {
                                display: block;
                                font-size: 20px;
                                font-weight: bold;
                                color: white;}
                            .lijidingzhiR
                            {
                                background: #A50309;
                                width: 166px;
                                height: 40px;
                                display: block;
                                float: left;
                                margin-right: 13px;
                                line-height: 40px;
                                border: solid 1px rgb(183, 27, 33);
                                text-align: center;
                            }
                            .lijidingzhiR span
                            {
                                display: block;
                                font-size: 20px;
                                font-weight: bold;
                                color: white;
                            }

                        </style>

                        <div class="shoppingNews">
                            <a id="nowbuy"  href="#" class="btnnowbuy track"><span>立即购买</span>

                       </a><a id="addToShoppingCar"  href="javascript:;" class="btnaddtocart track"  onclick="addcart()" class="addCart"></a>

                        </div>

                        <span class="blank20"></span>
                    </div>
                    <div class="blank0">
                    </div>
                </div>
                <div id="promotion">

                    <div class="danpin_YhTsBox danpin_YhTsTab " >
                        <h4>
                            <span>优惠提示</span></h4>

                        <ul>

                            <li>全场购物满199元免运费
                            </li>

                        </ul>
                    </div>

                </div>
                <div class="blank15">
                </div>
            </div>

        </div>
    </div>
    {{--<script type="text/JavaScript" src="//jsy.vanclimg.com/js.ashx?href=/public/errorhandler.js,/jquery/jquery.fn.ALERT.js,/item/expressshopping.js,/item/styledetail.js,item/share.js,/item/changeproduct.js,/item/favorites.js,/sizecalculate/sliderclass.js,/item/ad.js,/index/common-header.js,/item/feedback.js,/item/feedback/impression.js,/item/quiz.js,/item/interact.js&compress&v="></script>--}}

    <div id="reshouMainH">

    </div>
    <input id="hdCategoryCode" type="hidden" value="2349" />

    <span class="blank20"></span>
    <div class="sideBarSettabArea">

        <div class="RsetTabArea">
            <div id="product_set">

            </div>



            <div id="floatposition"></div>




            <span class="blank8"></span>



            <style type="text/css">
                #anchor1
                {
                    width: 1px;
                    height: 1px;
                    visibility: hidden;
                    position: absolute;
                    top: 710px;
                    *position:static;
                    *display:block;
                    *width:1px;
                    *height:50px;
                    *overflow:hidden;
                    *top:none
                }



                #feedback
                {
                    width: 1px;
                    height: 1px;
                    visibility: hidden;
                    position: absolute;
                    bottom: 40px;
                    *position:static;
                    *display:block;
                    *width:1px;
                    *height:30px;
                    *overflow:hidden;
                    *top:none;
                }
            </style>
            <div class="RsetTabCon">
                <span class="blank15"></span><a id="anchor1"></a>
                <div class="area1">
                    <div style="position: relative; top: 0px; right: 0px; z-index: 0">

                        <span class="blank20"></span>

                        <div id="attr" style="display:none;">
                            <h3>
                                产品属性：(点击属性可查看同类商品)</h3>
                            <div class="dpShuXing">
                                <ul>

                                </ul>
                                <span class="blank0"></span>
                            </div>
                        </div>
                        <span class="blank20"></span>

                    </div>

                    <a id="anchor5"></a>
                    <h3>
                        详情图片：</h3>
                    <span class="blank8"></span>
                    <h3 style="font-weight: normal;">
                        <span>注：</span>
                        <span name="item-item-info-tip">商品实际颜色以静物图为准</span>
                    </h3>
                    <span class="blank5"></span>
                    <div class="imgCon" id="relatedshow">

                        <div class="DetailPicture">
                            <img original="http://i.vanclimg.com/cms/20170721/6378021_01.jpg"/><img original="http://i.vanclimg.com/cms/20170721/6378021_02.jpg"/><img original="http://i.vanclimg.com/cms/20170721/6378021_03.jpg"/><img original="http://i.vanclimg.com/cms/20170721/6378021_04.jpg"/><img original="http://i.vanclimg.com/cms/20170721/6378021_05.jpg"/><img original="http://i.vanclimg.com/cms/20170721/6378021_06.jpg"/>
                        </div>

                        <div class="DetailPicBox">
                            <ul>

                            </ul>
                        </div>
                    </div>

                    <a id="feedback"></a>
                </div>
            </div>








            <span class="blank20"></span>
            <div class="RsetTabCon">
                <div class="productPinglun">
                    <div style="width: 164px; float: left">
                        <div id="yushouMainS">

                        </div>
                        <div id="hotProduct" class="ptPinglunLef fl" style="width: 190px; padding: 0px; position: static;">
                            <h2 class="hotTitle" style="position: static; top: 0px; left: 0px; height: 40px;
                                    line-height: 40px; padding: 0px 0px 0px 25px; border-bottom: 1px solid #b4b4b4;">
                                推荐产品</h2>
                            <ul style="margin:25px auto; width:70%;">

                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="ptPinglunRig fr" style="width: 980px; padding: 0px;">
                            <a id="anchorPinglun">&nbsp</a>


                            <style type="text/css">
                                #anchorQuiz
                                {
                                    width: 1px;
                                    height: 1px;
                                    visibility: hidden;
                                    position: absolute;
                                    bottom: 42px;
                                    *position:static;
                                    *display:block;
                                    *width:1px;
                                    *height:1px;
                                    *overflow:hidden;
                                    *top:none;
                                }
                                .tb-thumb{margin:0 0 10px;overflow:hidden;}
                                .tb-thumb li{background:none repeat scroll 0 0 transparent;float:left;height:42px;margin:0 6px 0 0;overflow:hidden;padding:1px;}
                                .tb-thumb .tb-selected{border:1px solid #d46a6a;height:40px;padding:2px;}
                                .tb-thumb .tb-selected:after{display: inline-block;
                                    width: 0;
                                    height: 0;
                                    font-size: 0;
                                    line-height: 0;
                                    border-top: 6px solid #f60;
                                    border-left: 6px solid transparent;
                                    border-right: 6px solid transparent;}
                                .tb-thumb li div{border:1px solid #CDCDCD;}

                                .pichide{margin-right: 3px;background-image: url(http://i2.vanclimg.com/cms/20160816/stoppic.png); padding-left: 8px; background-repeat: no-repeat;}

                                .findyunatu{background-image: url(http://i5.vanclimg.com/cms/20160816/yuantu.png);padding-left: 13px;background-repeat: no-repeat;}

                                .rotateleft{padding-left: 15px;background: url(http://i2.vanclimg.com/cms/20160818/leftxz.jpg) no-repeat;margin-left: 10px;}
                                .rotateright{padding-left: 15px;background: url(http://i2.vanclimg.com/cms/20160818/rightxz.jpg) no-repeat;margin-left: 10px;}
                                .toleft{z-index: 1;
                                    position: absolute;
                                    left: 10px;
                                    text-align: center;
                                    width: 30px;
                                    height: 92%;
                                    cursor:pointer;
                                    top: 30px;
                                    background-image: url(http://i4.vanclimg.com/cms/20160816/lr.png);
                                    background-repeat: no-repeat;
                                    background-position: center;}
                                .toleft:hover{ background-image: url(http://i4.vanclimg.com/cms/20160816/lrhover_left.png);}

                                .toright
                                {
                                    z-index: 1;
                                    top: 30px;
                                    right: 10px;
                                    position: absolute;
                                    background-image: url(http://i1.vanclimg.com/cms/20160816/lr_r-02.png);
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    width: 30px;
                                    height: 92%;
                                    cursor: pointer;
                                }
                                .toright:hover{ background-image: url(http://i3.vanclimg.com/cms/20160816/rightpichover.png);}
                            </style>

                            <div class="NewComment">
                                <h2 class="hotTitle" style="position: static; top: 0px; left: 0px; height: 40px;
        line-height: 40px; padding: 0px 0px 0px 25px; border-bottom: 1px solid #b4b4b4;">

                                    <span style="font-weight: bold;">最新评论(<span id="feedbackcount0">1</span>)</span>
                                    <input id="hidPlCount" type="hidden" value="1" />
                                    <input id="AllPingLun" type="radio" style="margin-left: 5px;" name="ChoosePingLun"
                                           checked="checked" value="0" plcount="1" /><label for="AllPingLun"
                                                                                            style="margin-right: 5px;">全部评论</label>
                                    <input id="PicPingLun" type="radio" name="ChoosePingLun" plcount="0"
                                           value="1" /><label for="PicPingLun">图片(0)</label>
                                    <div class="pinglunTabRig fr" style="line-height: 40px; width: 120px; height: 33px;
            float: right; padding: 0px; margin-top: 3px; *margin-top: -38px; margin-right: 32px;
            border-top: 0px dotted #b4b4b4;">
                                        <a href="//my.vancl.com/comment/Appraisetransfer/1067993" style="width: 120px;
                height: 33px; background-color: #d46a6a; color: #fff; display: block; vertical-align: middle;
                float: right; line-height: 33px;"><span style="line-height: 33px;">我要评论</span></a>
                                    </div>
                                </h2>

                                <div class="pinglunContent" style="margin-left: 34px;">
                                    <div class="NewCommentDetail">

                                        <div class="pinglunTab pinglunT">

                                            <div class="pinglunTabLef fl" style="border-top: 0px dotted #b4b4b4;">

                                                <div class="pinlunCon fl">
                                                    <p>
                                                        质量好好，以后还买。</p>

                                                    <span class="pinlunTime">
                            2017-08-01</span>


                                                </div>
                                                <div class="productCon fr">
                                                    <span>颜色：白色</span>
                                                    <span>尺码：110

                        </span><span>身高：0cm</span> <span>体重：0.0kg</span> <span
                                                            class="plsize">
                            <尺码合适>
                        </span>
                                                </div>
                                            </div>

                                            <div class="pinglunTabRig fr" style="border-top: 0px dotted #b4b4b4;">

                                                <a class="track" name="item-item-comment-user_id" target="_blank" href="/comments/nIdxFX33X0EShJKh6UAOEw==.html">
                                                    1824*****99</a><span
                                                        class="blank10"></span>

                                                <div class="UserLevel" style="background-position: 0px -0px">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div id="feedbackpagerarea">
                                    <div id="styleAssessesPager" class="area2Page">


                                        <div class="area2Page">
                                            <ul>

                                                <li class="track" name="item-item-comment-page_1"><strong>1</strong></li>

                                            </ul>
                                        </div>



                                    </div>
                                    <div class="act0703Link02" style="display: none;">

                                    </div>
                                </div>

                            </div>
                            <input id="StyleID" value="1067993" type="hidden" />
                            <a id="anchorQuiz">&nbsp</a>


                        </div>
                        <div class="productQuiz fr">

                            <span class="blank20"></span>
                            <div class="area3 root" name="2">

                                <h2 class="hotTitle" style="position: static; top: 0px; left: 0px; height: 40px;
        line-height: 40px; padding: 0px 0px 0px 25px; border-bottom: 1px solid #b4b4b4;">
                                    <span>最新提问</span> <span class="zuixinpinglunnum">(共<strong id="quizcount">2</strong>条)</span>
                                    <div class="pinglunTabRig fr" style="line-height: 40px; width: 120px; height: 33px;
            float: right; padding: 0px; margin-top: 3px; *margin-top:-38px; margin-right: 32px;  border-top: 0px dotted #b4b4b4;">
            <span id="tiwen"><a name="item-item-quiz-mine" href="#1" style="width: 120px; height: 33px;
                background-color: #d46a6a; color: #fff; display: block; vertical-align: middle;
                float: right; line-height: 33px;"><span style="line-height:33px;">我要提问</span></a> <a href="#quiz" name="quiz">
                </a></span>
                                    </div>
                                </h2>
                                <div class="area3Head" style="display: none;">
        <span style="float: left; display: none;" class="area3Sp01">
            <div class="sprites" style="width: 14px; height: 14px; background-position: -3482px 0;
                margin: 6px;">
            </div>
        </span><span class="zuixinpingluntitle">最新提问</span> <span class="zuixinpinglunnum">(共<strong
                                                id="quizcount">2</strong>条)</span> <span id="tiwen"><a
                                                class="danpinBtnStyle track" name="item-item-quiz-mine" href="#1"><span>我要提问</span></a>
                <a href="#quiz" name="quiz"></a></span>

                                    <span style="float: right; display: none;">
            <select style="float: left;" id="questionOrderType">
                <option style="float: left;" selected="selected" value="0">更新时间</option>
                <option value="1">回复次数</option>
            </select>
        </span><span style="float: right; display: none;">排序方式：</span>

                                </div>

                                <div id="stylequestionslist">

                                    <div class="area3Con">

                                        <div class="areaquestion" style="    border-top: 0px dotted #b4b4b4;">


                                            <span class="blank20"></span>
                                            <div class="userQuesArea">
                                                <h4>
                                                    <span class="danpinQ fl">Q</span>thir***：</h4>
                                                <h5>
                                                    2017-08-16<a href="/styles/ajaxquizreplylist.mvc?id=3956572&first=true"
                                                                 class="showfile track myReply" name="item-item-quiz-reply" onclick="return false">我要回复<span>(0)</span></a></h5>
                                            </div>
                                            <div class="questionTitle">
                                                我175，115左右，要多大的？120？130？</div>
                                            <span class="blank30"></span>

                                            <h6 style="display: none;">
                                                管理员45041<span>回答：</span></h6>
                                            <p class="adminAsk">
                                                <span class="danpinA fl">A</span>
                                                亲爱的客户您好，很抱歉，暂无适合您的尺码。给您带来的不便敬请谅解，感谢您的支持！</p>

                                        </div>
                                        <span class="blank15"></span>
                                        <div style="display: none;" class="notesNewpl">
                                        </div>
                                    </div>

                                    <div class="area3Con">

                                        <div class="areaquestion">


                                            <span class="blank20"></span>
                                            <div class="userQuesArea">
                                                <h4>
                                                    <span class="danpinQ fl">Q</span>189****：</h4>
                                                <h5>
                                                    2017-07-28<a href="/styles/ajaxquizreplylist.mvc?id=3956029&first=true"
                                                                 class="showfile track myReply" name="item-item-quiz-reply" onclick="return false">我要回复<span>(0)</span></a></h5>
                                            </div>
                                            <div class="questionTitle">
                                                请问这款版型是修身版还是宽松版型？</div>
                                            <span class="blank30"></span>

                                            <h6 style="display: none;">
                                                管理员45041<span>回答：</span></h6>
                                            <p class="adminAsk">
                                                <span class="danpinA fl">A</span>
                                                亲爱的客户您好，合体版型。感谢您的支持！</p>

                                        </div>
                                        <span class="blank15"></span>
                                        <div style="display: none;" class="notesNewpl">
                                        </div>
                                    </div>

                                </div>
                                <div id="stylequestionsPager" class="area2Page">


                                    <div class="area2Page">
                                        <ul>

                                            <li class="track" name="item-item-quiz-page_1"><strong>1</strong></li>

                                        </ul>
                                    </div>



                                </div>

                                <div class="act0703Link04" style="display: none;">
                                    <a href="//review.vancl.com/quiz/1067993.html" target="_blank">查看全部问答&gt;&gt;</a></div>

                            </div>
                            <span class="blank10"></span><a name="1"></a>
                            <div class="Askquestion" style="display: none;">
                                <h3>
                                    <p>
                                        <span></span>提问：童装T恤 熊本熊 T12 白色</p>
                                </h3>
                                <input type="hidden" id="title" value="童装T恤 熊本熊 T12 白色" />
                                <dl class="questionStyle">
                                    <dt>提问类型：</dt>
                                    <dd>
                                        <ul id="quiztype">
                                            <li>
                                                <input type="radio" value="0" name="questionType" /><span>商品提问</span></li>
                                            <li>
                                                <input type="radio" value="1" name="questionType" /><span>促销活动提问</span></li>
                                            <li>
                                                <input type="radio" value="2" name="questionType" /><span>库存及物流提问</span></li>
                                            <li>
                                                <input type="radio" value="3" name="questionType" /><span>售后提问</span></li>
                                        </ul>
                                        <p style="display: none" id="qtype">
                                            <strong></strong><span>请选择问题分类</span></p>
                                    </dd>
                                    <span class="blank0"></span>
                                </dl>
                                <dl>
                                    <dt>提问内容：</dt>
                                    <dd>
                                        <textarea class="Askcontent" id="content"></textarea>
                                        <input type="button" class="askSubBtn" id="tijiao" />
                                    </dd>
                                    <span class="blank0"></span>
                                </dl>
                            </div>

                        </div>
                    </div>
                </div>
            </div>














        </div>
    </div>
</div>

<div id="bigView" style="display: none; z-index: 10">
    <img /></div>
<div style="display: none;" id="loading">
</div>
<div class="collectbox" id="collectbox" style="display: none">
    <div class="cltboxcon">
        <div id="collectboxloaging">
        </div>
        <div class="collectcontent">
            <div class="msgcltdetail">
                <h2 class="msgboxhead2" style="float: right; width: 40px;">
                    <a href="#" class="track close" name="item-close-cart"><span class="sprites" style="width: 11px;
                        height: 11px; background-position: -519px 0; margin-top: 5px; cursor: pointer"></span>
                        <span>关闭</span></a></h2>
                <div class="CltTitleDiv">
                    <div class="sprites" style="width: 59px; height: 33px; background-position: -945px 0;
                        float: left; margin-top: 10px;">
                    </div>
                    <span class="msgCltTitle">该商品已成功放入收藏夹&nbsp;<a href="//my.vancl.com/favorite" target="_blank">查看收藏夹&gt;&gt;</a></span>
                </div>
                <div class="tiinfof">
                    您还可以通过<span><a href="#" class="addmark">添加标签</a></span>为商品分类，或添加邮箱订制<span><a href="#"
                                                                                                 class="addsubscribe">余量通知</a></span></div>
                <div class="infoCON">
                    <ul>
                        <li>
                            <div class="inCti addmark">
                                <span class="inCti_img02"></span>收藏标签</div>
                            <div class="fonttext">
                                <span class="blank10"></span>标 签：<input type="text" class="icte" id="bq" maxlength="24" /><span>标签最多3个，用“，”隔开</span><br>
                                <div class="tishi">
                                    <span></span>请输入中英文、数字或下划线！</div>
                                <div id="commonmarks" style="margin-top: 6px">
                                    常用标签：<label><input type="checkbox" class="input">日韩女装</label>
                                    <label>
                                        <input type="checkbox" class="input">裤子</label>
                                    <label>
                                        <input type="checkbox" class="input">牛仔裤</label></div>
                                <br>
                                <div class="button">
                                    <input type="submit" value="确定" class="submitdiv"><a href="#" class="addmark">取消</a><div
                                            class="baocun">
                                        保存成功！</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="inCti addsubscribe">
                                <span class="inCti_img02"></span>余量通知</div>
                            <div class="fonttext">
                                <span class="blank10"></span>邮 箱：<input type="text" class="icte" id="email" /><br>
                                <div class="tishi">
                                </div>
                                <br>
                                <div class="button">
                                    <input type="submit" value="确定" class="submitdiv"><a href="#" class="addsubscribe">取消</a><div
                                            class="baocun">
                                        保存成功！</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <span class="blank5"></span>
            </div>
            <div class="gmlist">
            </div>
        </div>
        <span class="blank5"></span>
    </div>
    <div class="rightborder2">
    </div>
    <span class="blank0"></span>
    <div class="bottomborder">
    </div>
</div>
<div id="surveyID" style="width: 40px; padding: 0; position: fixed; bottom: 110px;
    _position: absolute; _top: expression(documentElement.scrollTop + 200 + 'px');
    right: 0; border: 1px #CCC; border-right: none; border-radius: 4px; -moz-border-radius: 4px;
    -webkit-border-radius: 4px; border-right-radius: none; -moz-border-radius-bottomright: 0;
    -moz-border-radius-topright: 0; text-align: center; background-color: white;
    z-index: 999; display: none;">

    <a target="_blank" href="//catalog.vancl.com/dzzz/magazine_091207.html">
        <div class="sprites spritesDg">
        </div>
    </a>
</div>
<style type="text/css">
    .CarBox_MainDragDrop
    {
        cursor: pointer;
    }
</style>
<div class="CarBox_Main CarBox_MainDragDrop" id="carbox" style="display: none">
    <div id="carboxloading">
    </div>
    <div style="display: none">
        <h2 class="CarBox_Title">
            <span>商品成功放入购物车</span><span class="close1 fr"></span>
        </h2>
        <span class="blank20"></span>
        <div class="CarBox_Content">
            <div class="CarBox_bg">
            </div>
            <div class="CarBox_NumPrice">
                <span class="line01 fl"></span>
                <div class="fl" style="padding-top: 14px;">
                    <p>
                        <span>共有</span><span id="shopcarcount">100</span><span>件商品</span>
                    </p>
                    <p>
                        <span class="CarBox_TotialPrice"><span>总计</span><span id="shopcarprice">￥10000.00</span>
                        </span>
                    </p>
                </div>
            </div>
            <div class="CarBox_Btn">
                <div class="CarBox_goCar">
                    <a class="track" name="item-Settlement" href="http://shopping.vancl.com/mycart" rel="nofollow"
                       target="_parent">去购物车&gt;&gt;</a></div>
                <div id="continueshop" class="CarBox_nowCheckout CarBox_nowContinueBuy jxgwbtn">
                    <a href="#" class="track" name="item-continueshop">&lt;&lt;继续购物</a></div>
            </div>
            <span class="blank5"></span>
        </div>
        <div class="CarBox_ProductList">
        </div>
    </div>
</div>
<div class="CarBox_Main" id="customizeurl" style="display: none; width: 955px; height: 633px;
    overflow: hidden">
    <div>
        <h2 class="CarBox_Title" style="width: 955px;">
            <span>我要定制</span><a href="javascript:void(0)" name="item-close-customize" class="track close"><em></em>关闭</a></h2>
        <iframe style="width: 955px; height: 630px; border: 0px none; overflow: hidden" scrolling="no"
                id="customizeurlsrc"></iframe>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        //绑定拖动元素对象
        bindDrag(document.getElementById('carbox'));
    });

    function bindDrag(el) {
        //初始化参数
        var els = el.style,
            //鼠标的 X 和 Y 轴坐标
            x = y = 0;

        //邪恶的食指
        $(el).mousedown(function (e) {
            var isfixed = checkClassName(document.getElementById("carbox").className);
            document.getElementById("carbox").className = "CarBox_Main CarBox_MainDragDrop";
            //按下元素后，计算当前鼠标位置
            x = e.clientX - el.offsetLeft;
            y = e.clientY - el.offsetTop;
            //IE下捕捉焦点
            el.setCapture && el.setCapture();
            els.top = e.clientY - y + 'px';
            els.left = e.clientX - x + 'px';


            //绑定事件
            $(document).bind('mousemove', mouseMove).bind('mouseup', mouseUp);
        });
        //移动事件
        function mouseMove(e) {
            //宇宙超级无敌运算中...
            els.top = e.clientY - y + 'px';
            els.left = e.clientX - x + 'px';
            //            var top = e.clientY - y + 'px';
            //            var left = e.clientX - x + 'px';
            //            if (isFixed) {
            //                $(".CarBox_MainFixed").css("top", top);
            //                $(".CarBox_MainFixed").css("left", left);
            //            }
            //            else {
            //                $(".CarBox_Main").css("top", top);
            //                $(".CarBox_Main").css("left", left);
            //            }
            ////            els.css("top", e.clientY - y + 'px');
            ////            els.css("left", e.clientX - x + 'px');
        }
        //停止事件
        function mouseUp() {
            isFixed = false;
            //IE下释放焦点
            el.releaseCapture && el.releaseCapture();
            //卸载事件
            $(document).unbind('mousemove', mouseMove).unbind('mouseup', mouseUp);
        }

        function checkClassName(name) {
            var nameArr = name.split(' ');
            for (var i = 0; i < nameArr.length; i++) {
                if (nameArr[i] == "CarBox_MainFixed") {
                    return true;
                }
            }
            return false;
        }
    }
</script>


<input type="hidden" value="" id="recommendTimeStamp" />

<span style="height: 30px"></span>
<div class="blank0" style="height:32px;"></div><div class="vanclFoot" style="margin-top:0px;"><div class="vanclCustomer publicfooterclear"><ul><li><a href="//help.vancl.com/Home/contact" rel="nofollow" target="_blank"><p class="onlineCustomer"><img src="//i4.vanclimg.com/cms/20160802/onlinecustomer.png" style="width:auto;height:auto;"></p><p class="onlineTime"> 7X9小时在线客服</p></a></li><li><a href="//help.vancl.com/Category/43-1.html" rel="nofollow" target="_blank"><p class="seven"><img src="//i2.vanclimg.com/cms/20160802/seven.png" style="width:auto;height:auto;"></p><p> 7天内退换货</p><p> 购物满199元免运费</p></a></li><li class="twocode"><p><img src="//i7.m.vancl.com/oms/2014_8_29_16_39_33_7709.jpg" style="width: 104px; height: 104px;"></p><p> 扫描下载<em>凡客</em>客户端</p></li></ul></div><div class="vanclOthers publicfooterclear"><ul><li><a href="//www.vancl.com/help/about.htm" target="_blank">关于凡客</a></li><li><a href="//help.vancl.com/Content/1.html" target="_blank">新手指南</a></li><li><a href="//help.vancl.com/category/transfer" target="_blank">配送范围及时间</a></li><li><a href="//help.vancl.com/Category/31-1.html" target="_blank">支付方式</a></li><li><a href="//help.vancl.com/Category/43-1.html" target="_blank">售后服务</a></li><li class="none"><a href="//help.vancl.com/" target="_blank">帮助中心</a></li></ul></div></div><div id="footerArea" class=""><div class="footBottom"><div class="footBottomTab"><p> Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11011502002400号 出版物经营许可证新出发京批字第直110138号</p><p> 凡客诚品（北京）科技有限公司</p></div></div><span class="blank20"></span><div class="subFooter"><a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a><span class="costumeOrg"></span><a rel="nofollow" href="//www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a><a rel="nofollow" href="//www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a><a class="vanclqingNian" target="_blank" href="//www.vancl.com/help/about_2.htm" rel="nofollow"></a><a href="//trust.cctvmall.cn/reg/templates/brandtem1010.html" style="display: inline-block;" target="_blank"><img style="width: 120px; height: 39px;" src="//i.vanclimg.com/other/kexin_brand_for_others.png"/></a><div class="blank0"></div></div></div><div class="BayWindow" style="position: fixed; right: 10px; bottom: 20px; z-index:10"><ul><li class="downApp"><a href="//m.vancl.com/html/app.html#ref=hp-hp-head-mobile-v:n" target="_blank"></a></li><li class="online"><a href="//imweb.vancl.com/" target="_blank"></a></li><li class="BlackTop"><a href="javascript:;" onclick="javascript:document.getElementById('headerTopArea').scrollIntoView()"></a></li></ul></div><script type="text/javascript"> $(document).ready(function () { var hostname = window.location.host; if (hostname != "demowww.vancl.com" && hostname != "www.vancl.com" && hostname != "www.fanke.com") { $(".subnavCon em").css({ display: "block" }); $(".subnavCon").hover(function () { $(this).find("em").addClass("emtop"); $(this).parent().find(".categoryList").show(); }, function () { $(this).find("em").removeClass("emtop"); $(this).parent().find(".categoryList").hide(); }); $(".categoryList").hover(function () { $(this).show(); }, function () { $(this).hide(); $(this).parent().find(".subnavCon em").removeClass("emtop"); }); } }); setTimeout(function () { var bp = document.createElement('script'); bp.src = '//push.zhanzhang.baidu.com/push.js'; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(bp, s); }, 1000); $(function () { $(".subNav").hide(); $(".navlist ul li").hover(function () { $(this).find(".subNav").stop(true, true); $(this).find(".subNav").slideDown(); }, function () { $(this).find(".subNav").stop(true, true); $(this).find(".subNav").slideUp(); }); })</script>


</body>
</html>