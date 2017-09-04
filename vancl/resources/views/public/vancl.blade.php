<div id="headerTopArea" class="headerTopAreaBox">
    <div class="headerTopArea"><div class="headerTop">
            <div class="headerTopRight" style="width: 126px;">
                <div class="active notice" id="vanclCustomer">
                    <a class="mapDropTitle" href="//catalog.vancl.com/zhuanti/tg_20100510.html"  style="width: 75px;"   target="_blank">网站公告</a>
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
                            <a href="#" name="hp-hp-head-signin-v:n" class="top track">{{Auth::guard('homelogin')->user()->username}}</a> &nbsp;|&nbsp;
                            <a href="/loginout" name="hp-hp-head-register-v:n" class="track">退出登录</a>
                        </span>
                    @else
                        <span>
                            <a href="/login" name="hp-hp-head-signin-v:n" class="top track">登录</a>&nbsp;|&nbsp;
                            <a href="/register" name="hp-hp-head-register-v:n" class="track">注册</a>
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
            <p> 热门搜索：<a name="hp-hp-classhotsearch-1_1-v:n" class="track" href="//vt.vancl.com/" target="_blank">T恤</a>
                <a name="hp-hp-classhotsearch-1_2-v:n" class="track" href="//s.vancl.com/search?k=%E5%85%8D%E7%83%AB%E8%A1%AC%E8%A1%AB&orig=3" target="_blank">免烫衬衫</a>
                <a name="hp-hp-classhotsearch-1_3-v:n" class="track" href="//catalog.vancl.com/hbx.htm" target="_blank">C9</a>
                <a name="hp-hp-classhotsearch-1_4-v:n" class="track" href="//catalog.vancl.com/vanclxbx.html"target="_blank">熊本熊</a>
                <a name="hp-hp-classhotsearch-1_5-v:n" class="track" href="//catalog.vancl.com/polo.html"target="_blank">POLO</a>
                <a name="hp-hp-classhotsearch-1_6-v:n" class="track" href="//catalog.vancl.com/njf.html" target="_blank">牛津纺</a>
                <a name="hp-hp-classhotsearch-1_7-v:n" class="track" href="//catalog.vancl.com/fkkts.html" target="_blank">针织衫</a>
                <a name="hp-hp-classhotsearch-1_8-v:n" class="track" href="//s.vancl.com/27537-s1.html?k=%E8%A2%9C#" target="_blank">袜品</a>
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

                <a href="/categorygoods/{{$v['id']}}" class="track" name="hp-hp-head-nav_1-v:n" target="_blank">{{$v['catname']}}
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
                                <a href="/categorylistgoods/{{$value['id']}}" class="track" name="hp-hp-head-nav_1-1-v:n"target="_blank">{{$value['labelcatname']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
        @endforeach
    </ul>
</div>