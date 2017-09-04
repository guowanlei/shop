
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="zh-CN" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>确认提交订单 - VANCL 凡客诚品</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="Stylesheet" type="text/css" charset="utf-8" href="//css.vancl.com/css.ashx?href=/shopping/plugins/dialog.css,/shopping/global.css&v=201703101109&compress" />
    <script type="text/javascript" charset="utf-8" src="//js.vancl.com/js.ashx?href=[/shopping/jquery/jquery-1.5.1.min.js,jquery.ui.dialog-1.1.js],/shopping/vancl/vancl-1.1.js&compress"></script>
    <!--[if IE 6]>
    <script type="text/javascript">document.execCommand("BackgroundImageCache", false, true);</script>
    <![endif]-->
    <script type="text/javascript">
        var staticResourcePath = { "img": "http://i.vanclimg.com/", "sslimg": "https://ssl.vanclimg.com/" };
        var staticSitePath ={"isOpened":"false","checkOut":"https://shopping.vancl.com/checkout"};
    </script>





    <link rel="Stylesheet" type="text/css" charset="utf-8" href="//css.vancl.com/css.ashx?href=/shopping/checkout.css&v=201703101109&compress" />
    <script type="text/javascript" src="//js.vancl.com/js.ashx?href=/shopping/vancl/cookie.js,[/shopping/jquery/intelligent.load-1.0.js,jquery.pagination.js,jquery.jscroll.js]&compress"></script>

    <script type="text/javascript" src="//js.vancl.com/js.ashx?href=[/shopping/checkout-2017-10.js,checkout.init-2017-7-11-4.js]&v=201703101109&compress"></script>
    <script type="text/javascript" src="//js.vancl.com/js.ashx?href=/shopping/vancl/html5shiv.js&compress"></script>

</head>
<body class="checkout">
<div class="shade"></div>
<div id="wrapper">
    <div id="header" class="clearfix">
        <a class="logo" href="/" title="凡客诚品" target="_blank">
            <img alt="凡客诚品"  src ="http://i2.vanclimg.com/cms/20140829/vancl-logo.png" />
        </a>
        <div class="help-center">
            <a class="switch" href="/myvancl/{{Auth::guard('homelogin')->user()->id}}">个人中心</a>
        </div>
        <div class="account">
            <p>您好，<span class="username">莪与寂寞有染</span><a class="logout" href="https://login.vancl.com/login/userloginout.aspx">退出登录</a>|<a class="switch" href="https://login.vancl.com/login/login.aspx?http://shopping.vancl.com/mycart">更换用户</a></p>

        </div>
    </div>
    <div id="location">


        <span><a href="http://shopping.vancl.com/mycart">1.我的购物车</a></span> <em>2.填写核对信息单</em>
        <span>3.成功提交订单</span>

    </div>
    <div id="content">

        <form action="/save/order"  method="post"  >

            {{csrf_field()}}

        <div class="wrapper clearfix">
            <section class='order-info'  >
                <div id="addr" class="addr clearfix">
                    <!-- 2015.08.04 更新 -->
                    <div class="addr-hd inland-addr-hd addr-hd-new clearfix">
                        <h3  class="addr-title">收货地址：</h3>
                    </div>
                    <section class="inland-addr">
                        <div class='add-addr-panel  nobody-add-addr ' style="width: 90%;" >

                            {{--<input class='fix-ckb-radio' id='add-addr' name='AddressId' checked='checked' type='radio' value='0' data-url='/checkout/showaddaddress?isforeign=false' />--}}



                            {{--<label for='address'> <p  style="display: block;width: 230px;height: 150px;"  >添加新地址</p></label>--}}
                            @if(!empty($addressdata))
                            <select name="address"  required="required"  >
                                <option value="">请选择收货地址</option>

                                @foreach($addressdata as $k=>$v)

                                        <option value="姓名:{{$v['username']}},电话:{{$v['phonenumber']}},详细地址:{{$v['city']}}{{$v['town']}}{{$v['street']}}">姓名:{{$v['username']}},电话:{{$v['phonenumber']}},详细地址:{{$v['city']}}{{$v['town']}}{{$v['street']}}</option>

                                 @endforeach

                            </select>
                            @else
                            <div>请添加至少一个收货地址 <a href="/myvancl/address/{{$userid}}">去添加收货地址</a></div>
                            @endif
                        </div>
                        <div class="addr-form" style="">

                        </div>
                    </section>

                </div>
                <div id="delivery" class="delivery">
                    <h3 class="delivery-title addr-hd-new"  >
                        买家留言：
                    </h3>

                    <section class="inland-addr">

                    <textarea name="Buyermessage"  required="required"  style="display: block;width: 400px;height:230px;font-size: 16px;color: red;resize: none">

                               </textarea>

                    </section>
                    <span class="clear"></span>

                </div>



                <div id="pay" class="pay noborder clearfix"  >
                    <div class="pay-hd pay-title">
                        <h3  class='pay-title'>支付方式：</h3>
                    </div>

                </div>

                    <div  style="position: absolute;top: 467px;left:155px;width: 200px;height: 200px;" >
                        <ul>
             <li  style="list-style: none;margin: 10px;font-size: 16px;color: black;" >  <input name="payment"  checked="checked"   type="radio"  value="微信支付"  >微信支付</li>
                            <li  style="list-style: none;margin: 10px;font-size: 16px;color: black;" >  <input name="payment"  type="radio"  value="支付宝"  >支付宝</li>
                            <li  style="list-style: none;margin: 10px;font-size: 16px;color: black;" >  <input name="payment"  type="radio"  value="使用账户余额"  >使用账户余额</li>
                            <li  style="list-style: none;margin: 10px;font-size: 16px;color: black;" >  <input name="payment"  type="radio"  value="使用积分"  >使用积分</li>
                 <li  style="list-style: none;margin: 10px;font-size: 16px;color: black;" >  <input name="payment"  type="radio"  value="使用礼品卡/优惠券"  >使用礼品卡/优惠券</li>

                        </ul>

                </div>

                <script type="text/javascript">
                    $(document).ready(function () {
                        if ($("#virtual-account").length == 0) {
                            if ($("#points").length == 0) {
                                if ($("#gift-card").length == 0) {
                                    $(".pay-title").css({ "height": "170px", "line-height": "170px" });
                                } else {
                                    $(".pay-title").css({ "height": "250px", "line-height": "250px" });
                                    $("#gift-card").css('top', 630);
                                }
                            } else {
                                if ($("#gift-card").length == 0) {
                                    $(".pay-title").css({ "height": "200px", "line-height": "200px" });
                                    $("#points").css('top', 610);
                                } else {
                                    $(".pay-title").css({ "height": "300px", "line-height": "300px" });
                                    $("#points").css('top', 610);
                                    $("#gift-card").css('top', 680);
                                }
                            }
                        } else {
                            if ($("#points").length == 0) {
                                if ($("#gift-card").length == 0) {
                                    $(".pay-title").css({ "height": "170px", "line-height": "170px" });
                                    $("#virtual-account").css("top", (0 - 30) + "px");
                                } else {
                                    $(".pay-title").css({ "height": "270px", "line-height": "270px" });
                                    $("#virtual-account").css("top", (0 - 130) + "px");
                                    $("#gift-card").css('top', 680);
                                }
                            } else {
                                if ($("#gift-card").length == 0) {
                                    $(".pay-title").css({ "height": "200px", "line-height": "200px" });
                                    $("#virtual-account").css("top", (0 - 60) + "px");
                                    $("#points").css('top', 650);
                                }
                            }
                        }
                    });
                </script>
            </section>

                    <div class="order-info-head">
                        <h3 class="clearfix">
                            <span class="order-list-title">商品清单</span>
                            <a name="sp_cart_gift_back_cart" class="back2cart track" href="/my/shopcar">
                                回到购物车，修改产品>></a>
                        </h3>
                    </div>
                    <h5 class="order-list-head">
                        订单1<span class="store-house-info">将从<em></em>发出，预计发货后
                <em>1天</em>
            内送达</span></h5>
                    <div class="order-list order-list2 clearfix">
                        <div class="order-list-shop" style="display: none">
                            店铺:<span class="store-house-shop">
                        <a href="http://mall.vancl.com/10258/">VANCL 凡客诚品旗舰店</a>
                </span>
                        </div>
                        <table>
                            <thead>
                            <tr>
                                <th width="100">id</th>
                                <th>商品名称</th>
                                <th>尺码，颜色</th>
                                <th>单价</th>
                                <th>数量</th>
                                <th>小计</th>
                            </tr>
                            </thead>

                            <tbody>


                            @foreach($goods as $v)
                            <tr>
                            <td>{{$v['id']}}</td>
                            <td>{{$v['title']}}</td>
                            <td>{{$v['attrs']}}</td>
                            <td>{{$v['price']}}</td>
                            <td>{{$v['num']}}</td>
                            <td>{{$v['price'] * $v['num']}}</td>

                            </tr>
                               @endforeach
                            </tbody>
                        </table>
                        <div class="order-amount">
                            商品金额小计:<span>￥{{$total}}.00</span> &nbsp;&nbsp;+&nbsp;&nbsp;运费:<span>￥0.00</span>
                            &nbsp;&nbsp;=&nbsp;&nbsp;应付:<em>￥{{$total}}.00</em>
                        </div>
                    </div>
                    <ul class="all-amount">
              <li><em>已支付：<label id="price-total" data-price-total="0.00">￥0.00</label>，您还需支付：<label id="price-total" data-price-total="{{$total}}">￥{{$total}}.00元</label></em></li>
                    </ul>

                    <div class="order-submit clearfix">
                        <input type="submit" id="submit-order-btn" value="提交订单" class="submit-order-btn track"
                               name="sp_cart_submit_order" />
                        <div style="border: 1px solid #EBE5BB; background: #FFFEF5; width: 60%; padding: 15px;
        margin: 0 10px 0 0; float: right; text-align: center; font-size: 14px;">
                            祝您下单愉快，普通商品签收之日起7天内，可享受7天无理由退换货
                        </div>
                        <span style="clear: both;"></span><span class="warn oprate"></span>
                    </div>

            <input type="hidden"  name="total" value="{{$total}}" >


                    <!--特惠品移除提示-->
                </form>

            </div>
        </div>
    </div>




    <div id="footer">
        <p class="copyrights">Copyright 2007 - 2017 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
        <p class="certs">
            <a class="ectrustprc" title="中国电子商务诚信单位" href="http://www.ectrustprc.org.cn/seal/splash/1000020.htm" target="_blank">
                <img alt="中国电子商务诚信单位" src="//ssl.vanclimg.com/shopping/cert-redlogo.gif" />
            </a>
            <span class="costumeorg" title="中国服装协会会员单位">
                            <img alt="中国服装协会会员单位" src="//ssl.vanclimg.com/shopping/cert-costumeorg.gif" />
                        </span>
            <a class="online315" href="http://www.315online.com.cn/member/315090053.html" title="网上交易保障中心" target="_blank">
                <img alt="网上交易保障中心" src="//ssl.vanclimg.com/shopping/cert-wsjybzzx.gif" />
            </a>
        </p>
    </div>
</div>

<!--[if ie 6]>
<script type="text/javascript" src="//js.vancl.com/js.ashx?href=/shopping/jquery/jquery.bgiframe.min.js&compress"></script>
<![endif]-->

<script type="text/javascript" src="//js.vancl.com/js.ashx?href=[/public/trace.js,ct.js]&compress"></script>

</body>
</html>

