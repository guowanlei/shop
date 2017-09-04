<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>凡客诚品-会员免费注册</title>

		<!--从电脑里面拿的引入-->
		<link rel="shortcut icon" href="//ssl.vanclimg.com/common/favicon/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="//css.vancl.com/css.ashx?href=[/index/global.css,vanclcommon2012.css],[/login/footer.css]&amp;v=121211">
		<script type="text/javascript" language="javascript" src="//js.vancl.com/js.ashx?href=[/jquery/jquery-1.8.3.min,jquery.fn.alert],[/public/cookies_oper.js,trace.js]&amp;compress"></script>
		<link href="https://login.vancl.com/Css/login/reg.css" type="text/css" rel="stylesheet">
	</head>

	<body class="wrapper" id="body">
		<!--顶部开始-->
		<div id="top" style="margin:10px 0 0 0;padding:0 0 10px 0; border-bottom:solid 1px #919191;">
			<img src="http://i1.vanclimg.com/cms/20160119/logo_new.jpg" alt="凡客诚品" title="凡客诚品" onclick="javascript:window.location.href='http://www.vancl.com'" style="cursor:pointer"></div>
		<!--顶部结束-->

		<!--注册表开始-->
		<form method="post" action="/register/cheack" id="myform">
			{{csrf_field()}}
			<div class="aspNetHidden">
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTI2NDk4ODUyMGRkjukFnF0HIzatMwwY3WjD37gso+o=">
			</div>

			<div class="aspNetHidden">

				<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="02DF65DF">
			</div>
			<span class="box15"></span>
			<div class="regist">
				<h1>
            注册新用户 <span>我已经注册，现在就<a href="/login">登录</a></span>
        </h1>
				<div style="width: 100%; height: 10px; overflow: hidden; clear: both;">
				</div>
				<div class="content_left">

					<style type="text/css">
						.newtxt {
							*overflow: visible;
							*z-index: 100;
						}
					</style>
					<!--tag-->
					<div class="infor clearfix" style="overflow: inherit">

						<div class="email">
							<ul id="v2regListInfo_bar">
								<li id="lipiccode" style="zoom: 1; display: block;" class="v2reg_bg1">
									<div id="_quickcode" class="newtxt" style="border: 0 none; width: 415px; overflow: inherit;
                                zoom: 1;">
										<label for="_quickpiccode" style="width: 260px; height: 43px; line-height: 43px;
                                    border: 1px solid rgb(203, 203, 203); z-index: 10;">
											验证码
											</label>
											<input id="_quickpiccode" name="code" type="text" value="" style="width: 260px;
                                    border: solid 1px #cbcbcb; height: 43px; line-height: 43px;">
												<img id="_quickpiccodeimg" oldsrc="/Controls/CalculateValidateCode.ashx?key=reg" src="{{Captcha::src()}}"      style="cursor: pointer; vertical-align: middle; width: 140px; height: 45px; position: absolute; top: 0; left: 272px;">

													<span class="v2reg_tips02" style="display: none;">请输入图片验证码</span>
						</div>
						</li>
						<li id="liemail" style="display: none;" class="v2reg_bg1">

							<span class="Rclear"></span></li>
						<li id="liphone" style="zoom: 1; display: list-item;" class="v2reg_bg1">
							<div class="v2regListInfo_rtCont" style="position: relative; zoom: 1;">

								<div id="_umobile" class="newtxt" style="width:100%; float: left;">
									<label>
                                        请输入手机号
                                    </label>
									<input maxlength="11" type="text" value="" name="username"     id="input_phone" tabindex="1">
								</div>


								<span class="box3" style="display: none;"></span><span class="v2reg_tips02" style="display: none;"></span><span class="box5" style="display: none;"></span>
							</div>
							<span class="Rclear"></span></li>

						<li class="v2reg_bg1">

							<div class="v2regListInfo_rtCont" style="position: relative;">

								<div id="_mpassword" class="newtxt" style="width: 410px;">
									<label>
                                        设定登录密码
                                    </label>
									<input maxlength="16" type="password" name="password" id="input_password" value="" tabindex="3">
								</div>
								<span class="box3" style="display: none;"></span>
								<div class="v2reg_Safetyinfo" style="display: none;">
									<span class="v2regfl">安全强度：</span>
									<div class="v2regimg_03">
									</div>
									<span class="v2reg_Class">高</span>
								</div>
								<span class="v2reg_tips01" style="display: none;"></span><span class="box5" style="display: none;"></span>
							</div>
							<span class="Rclear"></span></li>
						<li class="v2reg_bg1">

							<div class="v2regListInfo_rtCont" style="position: relative;">

								<div id="_mpassword2" class="newtxt" style="width: 410px;">
									<label>
                                        再次输入密码
                                    </label>
									<input maxlength="16" type="password" name="textfield" id="input_repassword" value="" tabindex="4">
								</div>
								<span class="box3" style="display: none;"></span><span class="v2reg_tips01" style="display: none;"></span><span class="box5" style="display: none;"></span>
							</div>
							<span class="Rclear"></span></li>
						<li id="livalidatecode" style="height: 75px; display: none;" class="v2reg_bg1">
							<!-- display: none; -->

							<span class="Rclear"></span></li>
						<li class="v2reg_bg1">
							<div class="v2reg_bt">
								<span>
                                    <input id="chk_agreen" type="checkbox" onclick="chkfn.call(this)">
                                    <label for="chk_agreen" style="width: 100%; float: none;">
                                        请阅读<a target="_blank" href="http://help.vancl.com/Category/69-1.html" class="reda10_ft12">《VANCL凡客诚品服务条款》</a></label></span>
								<span class="box10"></span>
								<a href="javascript:">
									<div id="submitRegister_false" class="submitStyle" style="background: #9A9A9A; color: #FFFFFF;">
										立即注册</div>
								</a>
								<a href="javascript:" onclick="$('#submitRegister').click();return false;" style="display: none;">


									<button type="submit"  id="submitRegister" class="submitStyle"  >立即注册</button>
								</a>

							</div>
						</li>
						</ul>
					</div>
					<!--email-->
				</div>
				<!--infor-->
			</div>
			<!--content_left-->
			<div class="content_right">
				<img src="https://ssl.vanclimg.com/cms/20140829/login120412_newlogo.jpg" id="ContentPlaceHolder1__advertImage" style="width: 465px; display: none">
				<img src="http://i1.vanclimg.com/cms/20160902/login120412_newlogo.jpg" style="width: 465px">
			</div>
			<!--content_right-->
			<div class="clear">
			</div>
			</div>
			<!--regist-->
			<input name="hdn_RegisterType" id="hdn_RegisterType" type="hidden" value="phone">
			<input name="hdn_ResourceHref" id="hdn_ResourceHref_name" type="hidden" value="http://www.vancl.com?http%3A%2F%2Fcatalog.vancl.com%2Fxpdfgp.html%23ref%3Dhp-hp-xptj-9_2-v%3An">
			<!--wrapper-->
		</form>

		<!--注册表结束-->

		<!--引入js-->
		<script type="text/javascript">
			function hoverinput(id, fun) {
				var jqobj = $("#" + id);
				//            $(jqobj).hover(function () {
				//                var _value = $(this).find("input").val();
				//                $(this).find("input").focus();
				//                if (_value == "") {
				//                    $(this).find("label").css({ "z-index": "8" });
				//                    $(this).find("input").removeClass("hoverinput").addClass("hoverinput");
				//                }
				//            }, function () {
				//                var _value = $(this).find("input").val();
				//                if (_value != "") {
				//                    $(this).find("input").removeClass("hoverinput");
				//                } else {
				//                    $(this).find("label").css({ "z-index": "10" });
				//                }
				//                $(this).find("input").blur();
				//            });
				$(jqobj).bind("click", function() {
					var _value = $(this).find("input").val();
					$(this).find("input").focus();
					if(_value == "") {
						$(this).find("label").css({ "z-index": "8" });
						$(this).find("input").removeClass("hoverinput").addClass("hoverinput");
					}

					if(typeof fun != "undefined") {
						fun();
					}
				});

				$(jqobj).find("input").focus(function() {
					var _value = $(this).val();
					if(_value == "") {
						$(this).parent().find("label").css({ "z-index": "8" });
						$(this).parent().find("input").removeClass("hoverinput").addClass("hoverinput");
					}
				});

				$(jqobj).find("input").blur(function() {
					var _value = $(this).val();
					if(_value != "") {
						$(this).removeClass("hoverinput");
					} else {
						$(this).parent().find("label").css({ "z-index": "10" });
					}
					//$(this).blur();
				});

				$(jqobj).find("input").keyup(function() {
					var _value = $(this).val();
					if(_value != "") {
						$(this).removeClass("hoverinput");
					}
				});

				$(jqobj).find("input").keydown(function() {
					var _value = $(this).val();
					if(_value != "") {
						$(this).removeClass("hoverinput");
					}
				});
			}

			$(document).ready(function() {
				$('#_quickpiccodeimg').click(function() {
					$("#_quickpiccodeimg").attr('src', '{{Captcha::src()}}&t=' + new Date().getTime());
				});

				$("#_quickpiccode").blur(function() {
					var sender = $(this);
					var piccode = sender.val();
					if(piccode == null || piccode == '') {
						$("#_quickcode span").html("请输入图片验证码");
						$("#_quickcode span").show();
					} else {
						$("#_quickcode span").hide();
					}
				});

//				setTimeout(function() { TabChange('phone'); }, '10');

				hoverinput("_umobile");
				hoverinput("_mcode");
				hoverinput("_mpassword");
				hoverinput("_mpassword2");
				hoverinput("_quickcode");
				setTimeout(function() {
					$(".v2reg_tips02").removeClass("ssss");
				}, 500);

				hoverinput("_yanzhenma", function() {
					$("#_yanzhenma label").css("margin-top", "15px");
					$("#_yanzhenma img").css("margin-top", "15px");
				});
			});

			function chkfn() {
				var _checked = $(this).attr("checked");
				if(_checked == "checked") {
					$("#submitRegister_false").parent().hide();
					$("#submitRegister").parent().show();
				} else {
					$("#submitRegister_false").parent().show();
					$("#submitRegister").parent().hide();
				}
			}
		</script>


		@include('public.message')
		@include('flash::message')
		<!--引入js结束-->

		<!--底部内容开始-->
		<center>
			<div id="bottom" align="center">
				<div id="bottoms">
					<p class="bZp3">Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
					<div id="footerArea">
						<div class="subFooter">
							<a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a><span class="costumeOrg"></span>
							<a rel="nofollow" href="http://www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a>
							<a rel="nofollow" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a>
						</div>
					</div>
				</div>
			</div>
		</center>
		<!--底部内容结束-->

		<!--引入js-->
		{{--<script type="text/JavaScript" src="https://js.vancl.com/js.ashx?href=[/login/reg.js]&amp;v=2017073101&amp;compress" language="javascript"></script>--}}
		<!--引入js结束-->


		<!--引入js-->
		<script type="text/javascript" language="javascript" src="//js.vanclimg.com/js.ashx?href=[public/union_websource.js]&amp;compress"></script>
		<!--引入js结束-->
	</body>

</html>