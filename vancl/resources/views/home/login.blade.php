<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/vancl/Css/denglu/denglu.css" />
		<link rel="stylesheet" type="text/css" href="/vancl/Css/denglu/denglu1.css" />
		<link rel="stylesheet" type="text/css" href="/vancl/Css/denglu/denglu2.css" />
		<link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
		<script src="/vancl/js/denglu/denglu.js" type="text/javascript"></script>
		<script src="/vancl/js/denglu/denglu1.js" type="text/javascript"></script>
		<script src="/vancl/js/denglu/denglu2.js" type="text/javascript"></script>
		<script src="/vancl/js/denglu/denglu3.js" type="text/javascript"></script>

	</head>
	<body>
		<!--顶部开始-->
		<center>
	        <div id="Head" align="left">
	            <a class="logo" href="http://www.vancl.com"></a>
	            <p>
	                <a href="http://help.vancl.com/" target="_blank">帮助</a>
	            </p>
	        </div>
    	</center>
		<!--顶部结束-->
		
		<!--整体表开始-->
		<div class="wrapper">
		        <div style="width: 100%; height: 25px; position: relative;">
		            <h3 style="font-size: 22px; color: #979797; font-weight: bolder; text-align: left;
		                height: 25px; line-height: 25px; float: right; margin: 0 100px 0 0; width: 400px;
		                position: relative;">
		                凡客 Vancl 登录 <span style="font-size: 14px; font-weight: normal; position: absolute;
		                    right: 0px; bottom: 0px;">没有账户免费<a  href="/register" style="color: #b42025;
		                        margin: 0px;">注册</a> </span>
		            </h3>
		        </div>
		        <div class="login">
		            <div class="tag">
		                <ul id="tags">
		                    <li class="on">普通登录</li>
		                    <li class="">快速登录</li>
		                </ul>
		            </div>
		            <!--tag-->
		            <div id="shows">

						<form action="/login/cheack"  method="post"  >

		                <div class="user_infor" style="display: block;">
		                    <div id="vanclLoginError" class="tips">
		                        用户名或者密码错误!
		                    </div>
							{{csrf_field()}}
							<div class="form-group">
								<label for=""></label>
								<input type="text"   style="width: 90%;height:45px;margin-left: 10px;margin-top: 15px; "  class="form-control" name="username" id="" placeholder="请输入用户名">
							</div>

							<div class="form-group">
								<label for=""></label>
								<input type="password"   style="width: 90%;height:45px;margin-left: 10px;margin-top: 15px; "  class="form-control" name="password" id="" placeholder="请输入密码">
							</div>
							@if(session('error'))
								<div class="alert alert-danger"    style="width: 90%;height:45px;margin-left: 10px;margin-top: 15px; ">
									{{session('error')}}
								</div>
							@endif
						            <button  type="submit" style="width:90%;height:45px;margin-left: 10px;margin-top: 15px;font-size: 25px;background: #B42025;border: none;color: white; ">登 录</button>

		                </div>

					</form>
		                <!--
		                ****************************************************
		                快速登录区域----开始
		                ****************************************************
		                 -->
		                <div class="user_infor" style="display: none">
		                    <div id="_quickmobile" class="newtxt" style="width: 250px; float: left;">
		                        <label style="z-index: 10;">
		                            输入手机号
		                        </label>
		                        <input id="_quickmobilenumber" maxlength="11" name="vanclUserName" type="text" value="">
		                    </div>
		                    <a href="javascript:void(0);" class="asPhoneregBtn" id="getSmsCode" style="display: block">
		                        获取短信验证码</a>
		                    <div class="asPhoneregBtn" style="display: none" id="sendedSmsCode">
		                        已发送
		                    </div>
		                    <div class="asPhoneregBtn" style="display: none" id="sendingSmsCode">
		                        正在发送验证码
		                    </div>
		                    <div id="err_phone" class="tips" style="width: 80%;">
		                    </div>
		                    <div id="_quickcode" class="newtxt" style="border: 0 none;">
		                        <label style="width: 142px; height: 43px; line-height: 43px; border: 1px solid rgb(203, 203, 203); z-index: 10;">
		                            验证码
		                        </label>
		                        <input id="_quickpiccode" name="vanclUserName" type="text" value="" style="width: 142px;
		                            border: solid 1px #cbcbcb; height: 43px; line-height: 43px;">
		                        <img id="_quickpiccodeimg" oldsrc="/Controls/CalculateValidateCode.ashx?key=Login" src="/Controls/CalculateValidateCode.ashx?key=quicklogin&amp;t=1502977724039" style="vertical-align: middle; width: 140px; height: 45px; position: absolute;
		                            top: 0; left: 137px;">
		                        <a style="cursor: pointer; float: right; line-height: 18px;" href="javascript:void(0)">
		                            看不清?换一张</a>
		                    </div>
		                    <div id="_quickpiccodevalidmsg" class="tips">
		                        验证码不能为空!
		                    </div>
		                    <div id="_quickmobilecode" class="newtxt">
		                        <label style="z-index: 10;">
		                            请输入手机验证码
		                        </label>
		                        <input id="_quickmobilevalidcode" name="vanclUserName" type="text" value="">
		                    </div>
		                    <div id="_quickmobilecodemsg" class="tips">
		                        请输入有效的手机号码!
		                    </div>
		                    <div class="bt">
		                        <a id="_btnquicklogin" class="log" href="javascript:void(0);">登 录</a>
		                    </div>
		                </div>
		                <!-- 横线 -->
		                <div class="lines">
		                </div>
		                
		                
		                <div class="glup">
		                    <span class="blank10"></span>
		                    <h2 class="hezuo">
		                        使用合作网站账号登录凡客</h2>
		                    <span class="blank10"></span>
		                    <p class="qkimg">
		                        <a href="/login/wxlogin.aspx?http%3A%2F%2Fshopping.vancl.com%2Fmycart" id="a_wxlogin" class="weixin">
		                        </a><a class="xiaomi" onclick="openUrl('xiaomi')" href="javascript:void(0)"></a>
		                        <a href="javascript:void(0)" onclick="openUrl('alipay')" class="zhifubao"></a><a class="qq" href="javascript:void(0)" onclick="openUrl('qq')"></a><a class="qihu360" href="javascript:void(0)" onclick="openUrl('qihoo360')"></a><a class="weibo" href="javascript:void(0)" onclick="openUrl('sinaweibo')"></a>
		                        
		                        </p><div class="clear">
		                        </div>
		                        <div class="blank10">
		                        </div>
		                    <p></p>
		                </div>
		                <!--tishi-->
		            </div>
		            <!--user_infor-->
		            <div class="user_infor" style="display: none">
		                <div id="vjiaLoginError" class="tips">
		                    用户名或者密码错误!
		                </div>
		                <p>
		                    <label>
		                        用户名：</label><input id="PartnerUserName" name="PartnerUserName" type="text" value="Email/手机号">
		                </p>
		                <div id="vjiaUserNameError" class="tips">
		                    用户名不能为空!
		                </div>
		                <p>
		                    <label>
		                        密 码：</label><input id="PartnerPassword" name="PartnerPassword" type="password" class="inputtextcolor" value="">
		                </p>
		                <div id="vjiaPasswordError" class="tips">
		                    密码不能为空!
		                </div>
		                <p id="pVjiaValidate" style="display:none">
		                    <label>
		                        验证码：</label><input maxlength="6" style="width: 65px;" id="vjiacalculatevalidate" name="vjiacalcultatevalidate" type="text" class="inputtextcolor" value="">
		                    <img id="img_vjiaValidate" oldsrc="/Controls/CalculateValidateCode.ashx?key=VjiaLogin" src="" style="vertical-align: middle; width: 145px; height: 53px; cursor: pointer;"><a style="cursor: pointer;
		                            float: right; line-height: 18px;" href="javascript:void(0)">看不清?换一张</a>
		                </p>
		                <div id="vjiaValidateError" style="display: none" class="tips">
		                    验证码不能为空!
		                </div>
		                
		                <div class="bt">
		                    <a id="vjiaLogin" class="log" href="#">登 录</a> <a class="forget" href="http://www.vjia.com/Login/GetPwdStep1.aspx">
		                        忘记密码啦？</a>
		                </div>
		                <div class="tishi">
		                    <span>提示：</span>使用V+账户登录后系统会自动为您注册一个与V+帐户相关联的VANCL帐户。帐户关联后您可共享V+的会员积分和累积消费金额。
		                </div>
		            </div>
		        </div>
		        <div class="advert">
		            <img src="https://ssl.vanclimg.com/cms/20140829/login120412_newlogo.jpg" id="_advertImage" style="width: 465px; display: none">
		            <img src="http://i1.vanclimg.com/cms/20160902/login120412_newlogo.jpg" style="width: 465px">
		        </div>
		        <!--shows-->
		        <div style="clear: both;">
		        </div>
    </div>
		<!--整体表结束-->
		
		<!--底部开始-->
		<center>
			<div id="bottom" align="center">
					<div id="bottoms">
						<p class="bZp3">Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
						<div id="footerArea">
			            <div class="subFooter"><a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a><span class="costumeOrg"></span><a rel="nofollow" href="http://www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a><a rel="nofollow" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a></div>
			            </div>
					</div>
				</div>
   		 </center>
		<!--底部结束-->
	</body>
</html>
