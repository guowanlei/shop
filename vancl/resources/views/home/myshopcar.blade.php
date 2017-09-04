
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="zh-CN" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>购物车 - VANCL 凡客诚品</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="Stylesheet" type="text/css" charset="utf-8" href="//css.vancl.com/css.ashx?href=/shopping/plugins/dialog.css,/shopping/global.css&v=201703101109&compress" />
    {{--<script type="text/javascript" charset="utf-8" src="//js.vancl.com/js.ashx?href=[/shopping/jquery/jquery-1.5.1.min.js,jquery.ui.dialog-1.1.js],/shopping/vancl/vancl-1.1.js&compress"></script>--}}
    <!--[if IE 6]>




    <!--<script type="text/javascript">document.execCommand("BackgroundImageCache", false, true);</script>-->
    <![endif]-->
    <script type="text/javascript">
        var staticResourcePath = { "img": "http://i.vanclimg.com/", "sslimg": "https://ssl.vanclimg.com/" };
        var staticSitePath ={"isOpened":"false","checkOut":"https://shopping.vancl.com/checkout"};
    </script>

    <link rel="stylesheet" type="text/css" charset="utf-8" href="//css.vancl.com/css.ashx?href=/shopping/mycart.css&v=201703101109&compress" />


    <link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <script src="/node_modules/axios/dist/axios.js"></script>
    <script src="/node_modules/vue.js"></script>

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
<body class="mycart">
<div class="shade"></div>
<div id="wrapper">
    <div id="header" class="clearfix">
        <a class="logo" href="/" title="凡客诚品" target="_blank">
            <img alt="凡客诚品"  src ="http://i2.vanclimg.com/cms/20140829/vancl-logo.png" />
        </a>
        <div class="help-center">
            <a href="http://help.vancl.com/" target="_blank">帮助中心</a>
        </div>
        <div class="account">
            <p>您好，<span class="username">{{Auth::guard('homelogin')->user()->username}}</span>
                <a class="" href="/loginout">退出登录</a>
                |<a class="switch" href="/myvancl/{{Auth::guard('homelogin')->user()->id}}">个人中心</a>
            </p>

        </div>
    </div>
    <div id="location">
        <em>1.我的购物车</em> <span>2.填写核对信息单</span> <span>3.成功提交订单</span>
    </div>
    <div id="content" >
       <hd-header v-bind:lists="goods" ></hd-header>
    </div>
    <script type="text/x-template"  id="lists"  >
<div>
        {{--@{{lists}}--}}
        <form action="/shopcar/makeSure" method="post" role="form">
            {{csrf_field()}}
            <input type="hidden" name="address" value="1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="100">id</th>
                    <th>商品名称</th>
                    <th>尺码，颜色</th>
                    <th>单价</th>
                    <th>数量</th>
                    <th>小计</th>
                    <th width="150">操作</th>
                </tr>
                </thead>
                <tbody>


                    <tr   v-for="(v , key ) in lists">
                        <td> @{{v.id}}</td>
                        <td> <img :src="v.thumb"  style="width: 40px;height: 40px;">@{{v.title}}</td>
                        <td>@{{v.attrs}}</td>
                        <td>@{{v.price}}</td>


                        <td>
                            <button  v-on:click.prevent="add(v)" style="width: 30px;height: 30px; ">+</button>
                            <input type="text"  v-model="v.num"  :value="v.num" style="width: 50px;height:30px;text-align: center"  v-on:blur="cheack(v)"  >
                            <button    v-if="v.num >1"      v-on:click.prevent="del(v)"  style="width: 30px;height: 30px; ">-</button>
                            <button    v-else  disabled="disabled" v-on:click.prevent="del(v)"  style="width: 30px;height: 30px;">-</button>
                        </td>

                        <td> @{{sum(v)}}元</td>
                        <td>
                            <div class="btn-group">
                                <button href="" v-on:click.prevent="delshopcar(v)"  type="button" class="btn btn-default">删除</button>
                            </div>
                        </td>
                    </tr>

                </tbody>

            </table>
            <input type="hidden" name="total" :value="Total()">
            <h2>总价：￥@{{ Total() }}元</h2>
            <button type="submit" class="btn btn-primary">去结算</button>
        </form>
        </div>
    </script>

    <script>
        //声明局部子组件
        var  hdHeader ={
            template:'#lists',
            props:['lists'],
            methods:{
                cheack(v) {
                    axios.get('/myshopcar/addnum/' + v.num + '/' + v.id).then(function (res) {
                        console.log(res.data);
                        if(res.valid == 0){
                            alert('修改购买数量失败');
                        }
                    });

                    var reg = /^\d*$/;
                    var stat = reg.test(v.num);

                    if(stat == false){
                         alert('请输入正确的数字');
                    }

                },
                add:function (v) {
                    v.num= v.num*1 + 1*1;
                    axios.get('/myshopcar/addnum/' + v.num + '/' + v.id).then(function (res) {
                        console.log(res.data);
                        if(res.valid == 0){
                            alert('修改购买数量失败');
                        }

                    })
                },
                del:function (v) {
                    v.num= v.num*1 - 1*1;
                    axios.get('/myshopcar/addnum/' + v.num + '/' + v.id).then(function (res) {
                        console.log(res.data);
                        if(res.valid == 0){
                            alert('修改购买数量失败');
                        }
                    })
                },
                sum(v){
                    return totalPrice  = v.price*v.num;
                },

                Total(){
                    var totalPrice = 0;
                    this.lists.forEach((v)=>{
                            totalPrice  += v.price*v.num;
                        }
                    )
                    return totalPrice;
                },
                delshopcar:function (v) {
                    var id = v.id;
                    require(['util'], function (util) {
                        util.confirm('确定删除吗?',function(){
                            $.ajax({
                                url:'/del/shopcargoods/'+id,
                                type:'get',
                                success:function (res) {
                                    util.message(res.message,'refresh');
                                }
                            })
                        })
                    })

                },

            }
        }

        //声明父组件
        var app =    new Vue({
            el:'#content',
            components:{hdHeader},
            data: {
                goods: [

                ],

            },
            methods:{
                sum(){
                    var totalPrice = 0;
                    this.goods.forEach((v)=>{
                            totalPrice  += v.price*v.num;
                        }
                    )
                    return totalPrice;
                },

                shops(){
                    axios.get('/myshopcar/getgoods').then(function (res) {
                        console.log(res.data);
                        app.goods = res.data;
                    })
                }
            },

            mounted(){
                this.shops();
            }

        })

    </script>


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

{{--<script type="text/javascript" src="https://login.vancl.com/popup/js.ashx"></script>--}}
<script type="text/javascript">
    var google_conversion_id = 1045274787;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "666666";
    var google_conversion_label = "VFEPCI3L4QEQo8G28gM";
    var google_conversion_value = 0;
</script>
<noscript>
    <div style="display: inline;"><img height="1" width="1" style="border-style: none;" alt="" src="https://www.googleadservices.com/pagead/conversion/1045274787/?label=VFEPCI3L4QEQo8G28gM&amp;guid=ON&amp;script=0" /></div>
</noscript>
<iframe style="display:none" src="../../MediaV.htm"></iframe>
<iframe id="vizury" style="display:none" src="http://page.vanclimg.com/mediav/vizuryiframe.htm"></iframe>
<iframe id="MediaV" style="display:none" src=""></iframe>
<iframe style="display: none" src="http://page.vanclimg.com/dsp/iframe.html?from=shopping&pagetype=shopping"></iframe>


</body>
</html>

