				$(function() {
	window.onerror=function(h, k, g) {
		var b="/help/clienterr.aspx";
		var f=["counter.vanclimg.com", "vancl.com"];
		if(k.indexOf("vanclimg.com")>0&&k.indexOf("counter.vanclimg.com")<0&&k.indexOf("page.vanclimg.com")<0&&k.indexOf("vancl.com")<0) {
			var d=["存取被拒。", "这个系统不支持该功能。", "系统资源不足，无法完成请求的服务。", "内存不够", "内存不足", "磁盘空间不足。", "传递给系统调用的数据区域太小。", "系统找不到指定的路径。", "在 Microsoft Internet 扩展版本中发生内部错误", "拒绝访问。", "无法创建目录或文件。", "找不到指定的程序。", "There is not enough space on the disk.", "没有权限", "磁盘结构损坏且无法读取。", "Out of memory", "Permission denied", "Access is denied.", "当文件已存在时，无法创建该文件。"];
			for(var c=0;
			c<d.length;
			c++) {
				if(h.indexOf(d[c])>=0) {
					return
				}
			}
			var a= {
				clientX: -1, clientY:-1
			}
			;
			a=window.event||a;
			var j=document.body.scrollTop||document.documentElement.scrollTop;
			$.post(b, {
				url: window.location.href, msg:escape(h), jsfile:k, line:g, scrollTop:j, x:a.clientX, y:a.clientY
			}
			)
		}
	}
}

);
$(function() {
	$.fn.alert=function(d, a, e) {
		var f=$.extend(false, {}
		, $.fn.alert.defaults, e);
		$(".orderChangeTsk80EE8D67985E,#maskdiv80EE8D67985E").remove();
		var c='<div id="maskdiv80EE8D67985E"></div>';
		$(c).appendTo($("body"));
		var b=[];
		b.push('<div class="orderChangeTsk80EE8D67985E">');
		b.push("<h3><span>"+f.title+'</span><a href="#" class="close80EE8D67985E">关闭</a>');
		b.push('<a class="close80EE8D67985E" href="#"><img src="//i.vanclimg.com/Others/2011/2/15/dpbox_06.gif"></a></h3>');
		b.push('<p class="Word80EE8D67985E" style="text-align:center;">'+d+"</p>");
		b.push('<div id="buttons80EE8D67985E"><input type="submit" value="" class="queding80EE8D67985E"><span><a id="quxiao80EE8D67985E" href="#">取消</a></span></div></div>');
		$(b.join("")).appendTo($("body"));
		if(f.type==1) {
			$("#quxiao80EE8D67985E").hide();
			$("#buttons80EE8D67985E").attr("style", "margin-left:120px")
		}
		else {
			$("#quxiao80EE8D67985E").show();
			$("#buttons80EE8D67985E").attr("style", "margin-left:100px")
		}
		$(".orderChangeTsk80EE8D67985E").center();
		$(".orderChangeTsk80EE8D67985E, #maskdiv80EE8D67985E").show();
		$(".orderChangeTsk80EE8D67985E .close80EE8D67985E, #quxiao80EE8D67985E").click(function() {
			if(a) {
				a(false)
			}
			$(".orderChangeTsk80EE8D67985E, #maskdiv80EE8D67985E").hide();
			return false
		}
		);
		$(".queding80EE8D67985E").click(function() {
			if(a) {
				a(true)
			}
			$(".orderChangeTsk80EE8D67985E, #maskdiv80EE8D67985E").hide();
			return false
		}
		)
	}
	;
	$.fn.alert.defaults= {
		title: "提示", type:1
	}
	;
	$.fn.center=function() {
		var b=(($(window).height()-this.height())/2-80).toString()+"px";
		var a=(($(window).width()-this.width())/2).toString()+"px";
		if($.browser.msie&&$.browser.version=="6.0") {
			b=((($(window).height()-this.height())/2-80)+$(window).scrollTop()).toString()
		}
		return this.css( {
			top: b, left:a
		}
		).show()
	}
}

);
var isClickQucikTab=false;
function InitColor() {
	if($(".selColorArea .danpinColor_Select").css("display")=="none") {
		$(".quickbuy_selected,.quickbuy_selectColorNav,.quickbuy_selectSizeNav").hide();
		$(".Foot_buyselected,.Foot_buycolor,.Foot_buysize").hide()
	}
	else {
		$(".Foot_buyContent .Foot_buycolor span").first().html($(".selColorArea .danpinColor_Select .danpinColorTitle p").html());
		$(".Foot_buyContent .Foot_buycolor .Foot_buyselcolor").html($.trim($("#onlickColor .colorBlock p").html()));
		$(".quickBuy_Content .quickbuy_selectColorNav span").first().html($(".selColorArea .danpinColor_Select .danpinColorTitle p").html());
		$(".quickBuy_Content .quickbuy_selectColorNav .delectedcolor").html($.trim($("#onlickColor .colorBlock p").html()));
		var a="";
		var b=1;
		$(".selColorArea .danpinColor_Select .selColor ul li").each(function(c) {
			if($(this).hasClass("colorBlocksouqing")!=true) {
				var d=b%3==0?' class="Numthree" ': "";
				if(b<18) {
					a+="<li "+d+'><div class="quickbuy_coltab" index="'+c+'"><span class="quickcolor_img SpriteColors" style="'+$("span", this).attr("style")+'">&nbsp;</span><span class="quickcolor_title" >'+$("p", this).html()+"</span></div></li>";
					b++
				}
				else {
					if(b==18) {
						a+="<li "+d+'><div class="quickbuy_coltab"><a href="#colorlist">选择更多颜色</a></div></li>';
						return false
					}
				}
			}
		}
		);
		$(".quickBuy_Content .quickbuy_colorlist  ul").html(a)
	}
}

function InitSize() {
	$(".quickBuy_Content .quickbuy_selectSizeNav span").first().html($(".selColorArea .selSizeArea .danpinColorTitle p").html());
	var a=$.trim($("#onlickSelSize p").html())==""?"未选择": $.trim($("#onlickSelSize p").html());
	$(".quickBuy_Content .quickbuy_selectSizeNav .delectedcolor").html(a);
	$(".Foot_buyContent .Foot_buysize span").first().html($(".selColorArea .selSizeArea .danpinColorTitle p").html());
	var c="";
	var b="";
	$(".selColorArea .selSizeArea .selSize ul li").each(function(d) {
		if($(this).attr("id")=="onlickSelSize") {
			b+='<li class="selectedsize" index="'+d+'">'+$(this).html()+"</li>"
		}
		else {
			b+='<li index="'+d+'">'+$(this).html()+"</li>"
		}
		c+='<li  index="'+d+'">'+$(this).html()+"</li>"
	}
	);
	$(".quickBuy_Content .quick_Sizelist  ul").html(c);
	$(".Foot_buyContent .Foot_buysize ul").html(b)
}

function InitOptions() {
	$(".Foot_buyContent .Foot_buynum select").html($("#selectedAmount").html());
	$(".quickBuy_Content .quickbuy_selectNum select").html($("#selectedAmount").html());
	$(".Foot_buyContent .Foot_buynum select").attr("value", $("#selectedAmount").val());
	$(".quickBuy_Content .quickbuy_selectNum select").attr("value", $("#selectedAmount").val())
}

function InitColorEvent() {
	if($(".quickBuy_Content .quickbuy_colorlist  ul li").length>1) {
		$(".quickBuy_Content .quickbuy_selectColorNav").live("mouseenter", function() {
			$(this).addClass("quickbuy_selColhover");
			$(".quickBuy_Content .quickbuy_colorlist").show()
		}
		).live("mouseleave", function() {
			$(this).removeClass("quickbuy_selColhover");
			$(".quickBuy_Content .quickbuy_colorlist").hide()
		}
		);
		$(".quickBuy_Content .quickbuy_colorlist  ul li").live("mouseover", function() {
			$(this).addClass("hover")
		}
		).live("mouseout", function() {
			$(this).removeClass("hover")
		}
		).live("click", function() {
			$(".selColorArea .danpinColor_Select .selColor ul li").eq($(".quickbuy_coltab", this).attr("index")).click();
			$(".quickBuy_Content .quickbuy_selectColorNav").removeClass("quickbuy_selColhover");
			$(".quickBuy_Content .quickbuy_colorlist").hide()
		}
		)
	}
}

function InitSizeEvent() {
	$(".quickBuy_Content .quickbuy_selectSizeNav").live("mouseenter", function() {
		if($(".quickBuy_Content .quick_Sizelist ul li").length>1) {
			$(this).addClass("quickbuy_selSizehover");
			$(".quickBuy_Content .quick_Sizelist").show()
		}
	}
	).live("mouseleave", function() {
		$(this).removeClass("quickbuy_selSizehover");
		$(".quickBuy_Content .quick_Sizelist").hide()
	}
	);
	$(".quickBuy_Content .quick_Sizelist ul li").live("click", function() {
		$(".selColorArea .selSizeArea .selSize ul li").eq($(this).attr("index")).click();
		$(".quickBuy_Content .quickbuy_selectSizeNav").removeClass("quickbuy_selSizehover");
		$(".quickBuy_Content .quick_Sizelist").hide();
		$(".quickShoppingErrTips").fadeOut()
	}
	).live("mouseover", function() {
		$(this).addClass("hover")
	}
	).live("mouseout", function() {
		$(this).removeClass("hover")
	}
	);
	$(".Foot_buyContent .Foot_buysize ul li").live("mouseover", function() {
		if($(".Foot_buyContent .Foot_buysize ul li").length>1) {
			$(this).addClass("sizehover")
		}
	}
	).live("mouseout", function() {
		$(this).removeClass("sizehover")
	}
	).live("click", function() {
		$(".Foot_buyContent .Foot_buysize ul li").removeClass("selectedsize");
		$(this).siblings().find("span").remove();
		$(this).addClass("selectedsize");
		$("<span></span>").appendTo($(this));
		$(".selColorArea .selSizeArea .selSize ul li").eq($(this).attr("index")).click();
		$(".quickShoppingErrTips").fadeOut()
	}
	)
}

function InitOptionsEvent() {
	$(".Foot_buyContent .Foot_buynum select").live("change", function() {
		$(".quickBuy_Content .quickbuy_selectNum select").val($(this).val());
		$("#selectedAmount").val($(this).val())
	}
	);
	$(".quickBuy_Content .quickbuy_selectNum select").live("change", function() {
		$(".Foot_buyContent .Foot_buynum select").val($(this).val());
		$("#selectedAmount").val($(this).val())
	}
	);
	$("#selectedAmount").live("change", function() {
		$(".quickBuy_Content .quickbuy_selectNum select").val($(this).val());
		$(".Foot_buyContent .Foot_buynum select").val($(this).val())
	}
	)
}

function InitShoppingCarEvent() {
	$("#footShoopingCar").live("click", function() {
		$("#carposition").val("2");
		$("#addToShoppingCar").click();
		return false
	}
	);
	$("#topShoopingCar").live("click", function() {
		$("#carposition").val("1");
		$("#addToShoppingCar").click();
		return false
	}
	)
}

function InitSelectColor() {
	if($("#addToShoppingCar").length>0) {
		$(".quickBuy_Content,.Product_TypeList").show()
	}
	else {
		$(".Foot_buyContent,.quickBuy_Content,.Product_TypeList,.quickbuy_car").hide()
	}
	InitColor();
	InitSize();
	InitOptions()
}

function InitSelectSize() {
	InitSize();
	InitOptions()
}

function InitFloatDiv() {
	var a=$("#floatdiv");
	$(".quicktab").each(function() {
		var b=$(this).attr("anchor");
		if($("#"+b).length==0) {
			$(this).parent().hide()
		}
	}
	);
	if($(".quickBuy_Content").length>0) {
		$(".quicktab,.quicktab_other").live("click", function() {
			isClickQucikTab=true;
			var b=$(this).attr("anchor");
			if($("#"+b).length>0) {
				if($(a).css("position")!="static") {
					$("html,body").scrollTop($("#"+b).offset().top-$(a).height())
				}
				else {
					$("html,body").scrollTop($("#"+b).offset().top-2*$(a).height())
				}
				if($.browser.msie&&$.browser.version=="6.0") {
					$(a).css( {
						position: "relative", top:$(window).scrollTop()-$("#floatposition").offset().top
					}
					)
				}
				else {
					$(a).css( {
						position: "fixed", top:0
					}
					)
				}
			}
			return false
		}
		)
	}
}

function ScrollShopping() {
	var c=$(window).scrollTop();
	var b=$("#floatdiv");
	$(".quickShoppingErrTips").removeAttr("style").hide();
	$("#carbox").removeAttr("style").hide();
	if(c==0) {
		$(".quickBuy_box,.Foot_buyContent").fadeOut()
	}
	else {
		if($.browser.msie&&$.browser.version=="6.0") {
			var a=$(window).height()-$(".quickBuy_box").height()-20;
			var d=$(document).scrollTop();
			var e=a+d;
			$(".quickBuy_box").css("top", e+"px");
			$("#surveyID").css("top", (e-205)+"px")
		}
		$(".quickBuy_box").fadeIn()
	}
	$(".quickbuy_top").live("click", function() {
		$("html,body").scrollTop(0)
	}
	);
	if($("#addToShoppingCar").length>0&&$("#floatdiv").length>0) {
		$(".quickbuy_car").live("click", function() {
			$(".Foot_buyContent").fadeIn();
			$(".quickbuy_car").fadeOut()
		}
		);
		$(".Foot_buyclose").live("click", function() {
			$(".Foot_buyContent").fadeOut();
			$(".quickbuy_car").fadeIn()
		}
		);
		if(b.offset().top-c-$(window).height()<0) {
			if($(".quickbuy_car").css("display")=="none") {
				if($.browser.msie&&$.browser.version=="6.0") {
					var a=$(window).height()-$(".Foot_buyContent").height();
					var d=$(document).scrollTop();
					var e=a+d;
					$(".fixed_bottom").css("top", e+"px")
				}
				$(".Foot_buyContent").fadeIn()
			}
		}
		else {
			$(".Foot_buyContent").fadeOut()
		}
		if(isClickQucikTab==false) {
			if(c>=$("#floatposition").offset().top&&$(".quickBuy_Content").length>0) {
				if($.browser.msie&&$.browser.version=="6.0") {
					b.css( {
						position: "relative", top:$(window).scrollTop()-$("#floatposition").offset().top
					}
					)
				}
				else {
					b.css( {
						position: "fixed", top:0
					}
					)
				}
			}
			else {
				b.css( {
					position: "static"
				}
				)
			}
		}
		isClickQucikTab=false
	}
}

$(function() {
	try {
		InitSelectColor();
		InitColorEvent();
		InitSizeEvent();
		InitOptionsEvent();
		InitShoppingCarEvent();
		if($(".quickShoppingErrTips").length==0) {
			$("body").append('<p class="quickShoppingErrTips" style="display:none"></p>')
		}
	}
	catch(a) {}
}

);
var isIE6=false;
var starref=false;
$(document).ready(function() {
	var a=$("#starvancl").attr("name");
	if(typeof(a)!="undefined") {
		var c=new Date();
		var b=(c.getFullYear())+"-"+(c.getMonth()+1)+"-"+c.getDate();
		$.getJSON("http://counter.vanclimg.com/counter?key=staritemready-"+b+"&callback=?")
	}
	if(typeof(VA_GLOBAL)!="undefined") {
		if(parseInt($("#shopid").val())!=NaN) {
			VA_GLOBAL.shopid=$("#shopid").val();
			if($("#carposition").length>0) {
				VA_GLOBAL.pagetype="item-27532"
			}
			else {
				VA_GLOBAL.pagetype="item"
			}
		}
	}
}

);
(function(a) {
	a.fn.popwindow=function(c) {
		var c=a.extend( {}
		, c);
		if(this.context) {
			a(this).click(function() {
				d(this);
				return false
			}
			)
		}
		else {
			d(null)
		}
		function d(g) {
			var h=[];
			h.push();
			h.push('<div id="Overlay">');
			if(c.title) {
				var j=c.title;
				if(typeof(c.title)=="function") {
					j=c.title(g)
				}
				h.push('<div class="KmainBox">');
				h.push('<h2 class="msgboxhead">');
				h.push("    <span>"+j+"</span> ");
				h.push('    <a style="color: #fff;" href="#" class="close track" name="item-close">关闭</a><a href="#" class="close track" name="item-close"><img src="//i.vanclimg.com/Others/2011/2/15/dpbox_06.gif" /></a></h2>')
			}
			h.push('    <iframe id="LoadedContent" frameborder="0"></iframe>');
			if(c.title) {
				h.push("</div>")
			}
			h.push("</div>");
			a("body").prepend(h.join(""));
			if(!c.noOverlayClose) {
				a("#Overlay").click(function() {
					a(this).remove()
				}
				)
			}
			if(a.fn.decorateIframe) {
				a("#Overlay").decorateIframe()
			}
			var f=a("#LoadedContent");
			var k="";
			if(c.href) {
				k=c.href
			}
			else {
				k=a(g).attr("href")
			}
			f.attr("src", k);
			a("#Overlay").children().eq(0).css(c);
			b();
			a("#Overlay .close").click(function() {
				a("#Overlay").fadeOut().remove();
				return false
			}
			)
		}
	}
	;
	a.fn.popwindow.close=function() {
		a("#Overlay").fadeOut().remove()
	}
	;
	a.fn.popwindow.resize=function(c) {
		a("#LoadedContent").css(c)
	}
	;
	function b() {
		var c=a("#LoadedContent");
		if(isIE6) {
			ie6.windowresize()
		}
		else {
			a("#Overlay").css( {
				position: "fixed"
			}
			)
		}
		var d= {
			marginLeft: (a(window).width()-c.width())/2, marginTop:(a(window).height()-c.height())/2
		}
		;
		a("#Overlay").children().eq(0).css(d)
	}
	a(window).resize(b)
}

)(jQuery);
String.prototype.cut=function(b) {
	var d=0;
	var c=[];
	for(var a=0;
	a<this.length;
	a++) {
		if(this.charCodeAt(a)>128) {
			d+=2
		}
		else {
			d++
		}
		c.push(this.charAt(a));
		if(d>=b) {
			c.push("...");
			break
		}
	}
	return c.join("")
}

;
String.prototype.gblen=function() {
	var b=0;
	for(var a=0;
	a<this.length;
	a++) {
		if(this.charCodeAt(a)>128) {
			b+=2
		}
		else {
			b++
		}
	}
	return b
}

;
function getCloseCode() {
	if($(".selSize #onlickSelSize").length==0) {
		return null
	}
	return $(".selSize #onlickSelSize").attr("name")
}

function ajaxIsLogined(a, c) {
	var d="styles/IsLogined.aspx";
	var b=[];
	if(c!=null&&c.length>0) {
		b.push("productcode="+c)
	}
	if(b.length>0) {
		d=d+"?"+b.join("&")
	}
	$.getScript(d, a)
}

function global() {
	window.VANCL=window.VANCL|| {}
	;
	window.VANCL.Global=window.VANCL.Global|| {}
	;
	return window.VANCL.Global
}

var sizetitle="";
$(function() {
	isIE6=(typeof ie6!="undefined");
	if($.fn.decorateIframe) {}
	var d=$("#productcode").text().split("：")[1];
	$("#woyaoDingzhi").live("click", function() {
		var j=getCloseCode();
		if(j==null) {
			$(".danpin_xuanzeGMcm").show();
			return false
		}
		var m=[];
		m.push("http://www.teeume.com");
		m.push("/vendor/vancl.php");
		m.push("?id=");
		m.push(j);
		m.push("&price=");
		m.push($.trim($("#pricearea .cuxiaoPrice strong:eq(0)").text()));
		m.push("&qty=");
		m.push($("#selectedAmount").val());
		var l=m.join("");
		var k=$("#customizeurl");
		a(k);
		$("#customizeurlsrc").attr("src", l);
		$(k).fadeIn();
		$(k).find(".close").click(function() {
			$(k).hide();
			return false
		}
		)
	}
	);
	function a(j) {
		var n=$(window).width();
		var m=$(window).height();
		var k=$(j).height();
		var l=$(j).width();
		$(j).css( {
			position: "absolute", top:(m-k)/2+$(document).scrollTop(), left:(n-l)/2
		}
		)
	}
	$("#addToShoppingCar").live("click", function() {
		try {
			$(".shoppingErrTips , .shoppingErrTips2").remove();
			$(".quickShoppingErrTips").removeAttr("style").hide();
			$("#carbox").removeAttr("style").hide();
			$("#carboxloading,.CarBox_ProductList").html("").hide();
			var j=$("#carposition").val();
			$("#carposition").val("0");
			if(j=="1") {
				if(isIE6) {
					$("#carbox").css( {
						height: "95px", position:"absolute", top:$(".quickBuy_Content").offset().top+35, left:$(".quickBuy_Content").offset().left+$(".quickBuy_Content").width()-$("#carbox").width()
					}
					)
				}
				else {
					$("#carbox").css( {
						height: "105px", position:"fixed", top:$(".quickBuy_Content").offset().top-$(document).scrollTop()+35, left:$(".quickBuy_Content").offset().left+$(".quickBuy_Content").width()-$("#carbox").width()
					}
					)
				}
			}
			else {
				if(j=="2") {
					if(isIE6) {
						$("#carbox").css( {
							height: "95px", position:"absolute", top:$(".Foot_buyContent").offset().top-100, left:$(".Foot_buytab01").offset().left+$(".Foot_buytab01").width()-$("#carbox").width()
						}
						)
					}
					else {
						$("#carbox").css( {
							height: "105px", position:"fixed", bottom:"52px", left:$(".Foot_buytab01").offset().left+$(".Foot_buytab01").width()-$("#carbox").width()
						}
						)
					}
				}
				else {
					$("#carbox").css( {
						left: $(".danpinRight").offset().left, height:"295"
					}
					);
					$("#carboxloading").html('<img src="//i.vanclimg.com/logo/loading.gif" alt="loading">').show();
					if($("#carbox").css("display")!="none") {
						$("#collectbox").fadeOut()
					}
					else {
						$("#collectbox,#carbox").fadeOut()
					}
					$("#carbox").css( {
						top: $("#addToShoppingCar").offset().top-49
					}
					).show();
					if(isIE6) {
						$("#carbox").css( {
							left: ie6.setLeft(512)
						}
						)
					}
				}
			}
			var k=getCloseCode();
			if(k==null) {
				if(j=="1") {
					$(".quickShoppingErrTips").html("<span></span>请选择您要购买的商品尺码");
					if(isIE6) {
						$(".quickShoppingErrTips").css( {
							position: "absolute", top:$(".quickBuy_Content").offset().top+35, left:$(".quickBuy_Content").offset().left+$(".quickBuy_Content").width()-$(".quickShoppingErrTips").width()-6
						}
						)
					}
					else {
						$(".quickShoppingErrTips").css( {
							position: "fixed", top:$(".quickBuy_Content").offset().top-$(document).scrollTop()+35, left:$(".quickBuy_Content").offset().left+$(".quickBuy_Content").width()-$(".quickShoppingErrTips").width()-6
						}
						)
					}
					$(".quickShoppingErrTips").show()
				}
				else {
					if(j=="2") {
						$(".quickShoppingErrTips").html("<span></span>请选择您要购买的商品尺码");
						if(isIE6) {
							$(".quickShoppingErrTips").css( {
								position: "absolute", top:$(".Foot_buyContent").offset().top-12, left:$(".Foot_buytab01").offset().left+$(".Foot_buytab01").width()-$(".quickShoppingErrTips").width()-6
							}
							)
						}
						else {
							$(".quickShoppingErrTips").css( {
								position: "fixed", bottom:"52px", left:$(".Foot_buytab01").offset().left+$(".Foot_buytab01").width()-$(".quickShoppingErrTips").width()-6
							}
							)
						}
						$(".quickShoppingErrTips").show()
					}
					else {
						$(".danpin_xuanzeGMcm").show();
						$("#carbox").hide()
					}
				}
				return false
			}
			var o=[];
			o.push("http://shopping.vancl.com");
			o.push("/mycart/batchadd");
			o.push("?sku=");
			o.push(k);
			o.push("&price=");
			o.push($.trim($("#pricearea .cuxiaoPrice strong:eq(0)").text()));
			o.push("&qty=");
			o.push($("#selectedAmount").val());
			var m=(function(s) {
				var q=s.attr("href");
				var r=q.indexOf("#");
				if(r>-1&&r+1<q.length) {
					var q=q.substring(r+1, q.length);
					return"&"+q
				}
				else {
					var p=global();
					if(p.ref!=undefined&&p.ref.length>0) {
						return"&ref="+p.ref
					}
				}
			}
			)($(this));
			if(m) {
				o.push(m);
				if(starref) {
					o.push("|readstar")
				}
			}
			o.push("&async=true");
			o.push("&callback=?");
			$("#carbox").find(".close1,.jxgwbtn").click(function() {
				$("#carbox").hide();
				$("#carboxloading").show().next().hide();
				return false
			}
			);
			var n=o.join("");
			if($(".cuxiaoPrice").find("strong").length==1&&n.indexOf("&isPoint=true")>0) {
				n=n.replace("&isPoint=true", "")
			}
			$.getJSON(n, function(u) {
				if(!u.Type||u.Type=="") {
					$("#shopcarprice").text("￥"+(new Number(u.TotalPrice)).toFixed(2));
					$("#shopcarcount").text(u.TotalProducts);
					if(typeof(u.IsShowBuy)!="undefined"&&u.IsShowBuy=="1") {
						var w=[];
						w.push('<div class="CarBox_nowCheckout"><a class="track" name="item-buynow"  href="http://buy.vancl.com?from=item">立即结算</a></div>');
						if($("#continueshop").hasClass("CarBox_continueShopping")==false) {
							$("#continueshop").removeClass("CarBox_nowCheckout CarBox_nowContinueBuy").addClass("CarBox_continueShopping");
							$("#continueshop").before(w.join("")).show()
						}
						var z=new Date();
						var s=(z.getFullYear())+"-"+(z.getMonth()+1)+"-"+z.getDate();
						$.getJSON("http://counter.vanclimg.com/counter?key=item-"+s+"&callback=?")
					}
					if(j=="1"||j=="2") {
						$("#carbox").show();
						$("#carboxloading").fadeOut(function() {
							$(this).next().show()
						}
						)
					}
					else {
						var t="";
						if(typeof(u.clothes)!="undefined") {
							t=u.clothes
						}
						var x='[{Position:"rp_item_cart", ProductCodes:"'+d+'",Rows:"'+5+'",Remark:"NeedExclude",ClothesCodes:"'+t+'"}]';
						var p=$("#carbox").find(".CarBox_ProductList");
						recmApinew(x, p, "dp_add2cart_similarpurchase", "item-shopping-pap", "cart");
						$("#carboxloading").fadeOut(function() {
							$("#danpinRight").removeClass("danpinRightFixed");
							$(this).next().show()
						}
						)
					}
					var r=$("<img style='display:none;' src='//item.vancl.com/api/user.aspx?closeCode="+k+"' />");
					$("body").append(r);
					try {
						if(typeof(VA_GLOBAL)!=undefined) {
							VA_GLOBAL.va.track(null, "va_atc", n.substr(n.indexOf("?")+1))
						}
						if(typeof(VANCL)!=undefined&&typeof(VANCL.MiniCart.trackSBU)!=undefined) {
							VANCL.MiniCart.trackSBU()
						}
					}
					catch(v) {}
				}
				else {
					$("#carbox").hide();
					if($(".shoppingNews").length>0) {
						var q=$('<p class="shoppingErrTips2"><span></span>'+u.Content+"</p>");
						var y="<span></span>"+u.Content;
						if(u.Content.indexOf("请先登录")>0) {
							q=$('<p class="shoppingErrTips2"><span></span>本商品限购，<a href="javascript:location.href=\'https://login.vancl.com/login/login.aspx?\'+location.href"> 请先登录</a> 确认您的会员等级能否购买</p>');
							y="<span></span>本商品限购，<a href=\"javascript:location.href='https://login.vancl.com/login/login.aspx?'+location.href\"> 请先登录</a> 确认您的会员等级能否购买"
						}
						if(j=="1") {
							$(".quickShoppingErrTips").html(y);
							if(isIE6) {
								$(".quickShoppingErrTips").css( {
									position: "absolute", top:$(".quickBuy_Content").offset().top+35, left:$(".quickBuy_Content").offset().left+$(".quickBuy_Content").width()-$(".quickShoppingErrTips").width()-6
								}
								)
							}
							else {
								$(".quickShoppingErrTips").css( {
									position: "fixed", top:$(".quickBuy_Content").offset().top-$(document).scrollTop()+35, left:$(".quickBuy_Content").offset().left+$(".quickBuy_Content").width()-$(".quickShoppingErrTips").width()-6
								}
								)
							}
							$(".quickShoppingErrTips").show()
						}
						else {
							if(j=="2") {
								$(".quickShoppingErrTips").html(y);
								if(isIE6) {
									$(".quickShoppingErrTips").css( {
										position: "absolute", top:$(".Foot_buyContent").offset().top-12, left:$(".Foot_buytab01").offset().left+$(".Foot_buytab01").width()-$(".quickShoppingErrTips").width()-6
									}
									)
								}
								else {
									$(".quickShoppingErrTips").css( {
										position: "fixed", bottom:"52px", left:$(".Foot_buytab01").offset().left+$(".Foot_buytab01").width()-$(".quickShoppingErrTips").width()-6
									}
									)
								}
								$(".quickShoppingErrTips").show()
							}
							else {
								$(".SelectAreaItotal").after(q)
							}
						}
					}
				}
			}
			);
			return false
		}
		catch(l) {}
	}
	);
	$("#nowbuy").live("click", function() {
		$(".shoppingErrTips , .shoppingErrTips2").remove();
		$(".quickShoppingErrTips").removeAttr("style").hide();
		$("#carbox").removeAttr("style").hide();
		$("#carboxloading,.CarBox_ProductList").html("").hide();
		var j=$("#carposition").val();
		$("#carposition").val("0");
		var k=getCloseCode();
		if(k==null) {
			if(j=="1") {
				$(".quickShoppingErrTips").html("<span></span>请选择您要购买的商品尺码");
				if(isIE6) {
					$(".quickShoppingErrTips").css( {
						position: "absolute", top:$(".quickBuy_Content").offset().top+35, left:$(".quickBuy_Content").offset().left+$(".quickBuy_Content").width()-$(".quickShoppingErrTips").width()-6
					}
					)
				}
				else {
					$(".quickShoppingErrTips").css( {
						position: "fixed", top:$(".quickBuy_Content").offset().top-$(document).scrollTop()+35, left:$(".quickBuy_Content").offset().left+$(".quickBuy_Content").width()-$(".quickShoppingErrTips").width()-6
					}
					)
				}
				$(".quickShoppingErrTips").show()
			}
			else {
				if(j=="2") {
					$(".quickShoppingErrTips").html("<span></span>请选择您要购买的商品尺码");
					if(isIE6) {
						$(".quickShoppingErrTips").css( {
							position: "absolute", top:$(".Foot_buyContent").offset().top-12, left:$(".Foot_buytab01").offset().left+$(".Foot_buytab01").width()-$(".quickShoppingErrTips").width()-6
						}
						)
					}
					else {
						$(".quickShoppingErrTips").css( {
							position: "fixed", bottom:"52px", left:$(".Foot_buytab01").offset().left+$(".Foot_buytab01").width()-$(".quickShoppingErrTips").width()-6
						}
						)
					}
					$(".quickShoppingErrTips").show()
				}
				else {
					$(".danpin_xuanzeGMcm").show();
					$("#carbox").hide()
				}
			}
			return false
		}
		var n=[];
		n.push("http://shopping.vancl.com");
		n.push("/mycart/batchadd");
		n.push("?sku=");
		n.push(k);
		n.push("&price=");
		n.push($.trim($("#pricearea .cuxiaoPrice strong:eq(0)").text()));
		n.push("&qty=");
		n.push($("#selectedAmount").val());
		var l=(function(s) {
			var q=s.attr("href");
			var r=q.indexOf("#");
			if(r>-1&&r+1<q.length) {
				var q=q.substring(r+1, q.length);
				return"&"+q
			}
			else {
				var p=global();
				if(p.ref!=undefined&&p.ref.length>0) {
					return"&ref="+p.ref
				}
			}
		}
		)($(this));
		if(l) {
			n.push(l);
			if(starref) {
				n.push("|readstar")
			}
		}
		n.push("&async=true");
		n.push("&callback=?");
		$("#carbox").find(".close,.jxgwbtn").click(function() {
			$("#carbox").hide();
			$("#carboxloading").show().next().hide();
			return false
		}
		);
		var m=n.join("");
		if($(".cuxiaoPrice").find("strong").length==1&&m.indexOf("&isPoint=true")>0) {
			m=m.replace("&isPoint=true", "")
		}
		$.getJSON(m, function(p) {
			if(!p.Type||p.Type=="") {
				location.href="http://shopping.vancl.com/mycart"
			}
			else {
				$("#carbox").hide();
				if($(".shoppingNews").length>0) {
					var o=$('<p class="shoppingErrTips2"><span></span>'+p.Content+"</p>");
					var q="<span></span>"+p.Content;
					if(p.Content.indexOf("请先登录")>0) {
						o=$('<p class="shoppingErrTips2"><span></span>本商品限购，<a href="javascript:location.href=\'https://login.vancl.com/login/login.aspx?\'+location.href"> 请先登录</a> 确认您的会员等级能否购买</p>');
						q="<span></span>本商品限购，<a href=\"javascript:location.href='https://login.vancl.com/login/login.aspx?'+location.href\"> 请先登录</a> 确认您的会员等级能否购买"
					}
					if(j=="1") {
						$(".quickShoppingErrTips").html(q);
						if(isIE6) {
							$(".quickShoppingErrTips").css( {
								position: "absolute", top:$(".quickBuy_Content").offset().top+35, left:$(".quickBuy_Content").offset().left+$(".quickBuy_Content").width()-$(".quickShoppingErrTips").width()-6
							}
							)
						}
						else {
							$(".quickShoppingErrTips").css( {
								position: "fixed", top:$(".quickBuy_Content").offset().top-$(document).scrollTop()+35, left:$(".quickBuy_Content").offset().left+$(".quickBuy_Content").width()-$(".quickShoppingErrTips").width()-6
							}
							)
						}
						$(".quickShoppingErrTips").show()
					}
					else {
						if(j=="2") {
							$(".quickShoppingErrTips").html(q);
							if(isIE6) {
								$(".quickShoppingErrTips").css( {
									position: "absolute", top:$(".Foot_buyContent").offset().top-12, left:$(".Foot_buytab01").offset().left+$(".Foot_buytab01").width()-$(".quickShoppingErrTips").width()-6
								}
								)
							}
							else {
								$(".quickShoppingErrTips").css( {
									position: "fixed", bottom:"52px", left:$(".Foot_buytab01").offset().left+$(".Foot_buytab01").width()-$(".quickShoppingErrTips").width()-6
								}
								)
							}
							$(".quickShoppingErrTips").show()
						}
						else {
							$(".SelectAreaItotal").after(o)
						}
					}
				}
			}
		}
		);
		return false
	}
	);
	if(typeof($.fn.lazyload)=="function") {
		$("img[original]").lazyload()
	}
	var e=$("#pricearea").attr("name");
	var h=$("#styleinfo").attr("name");
	$("#imageMenu li span").live("mouseenter", function() {
		if($(this).parent().attr("id")!="onlickImg") {
			b($(this).attr("name").replace("small", "mid"));
			$("#imageMenu li").removeAttr("id");
			$(this).parent().attr("id", "onlickImg")
		}
		return false
	}
	);
	function b(j) {
		$("#midimg").attr("src", j)
	}
	$("#imageMenu").scrollTop(0);
	(function() {
		function p(w) {
			var s=$("#bigView");
			var t=$("#bigView img").css( {
				width: "800px", height:"800px;"
			}
			);
			var x=$("#midimg").attr("src")||"";
			var v=t.attr("src");
			if(x!=""&&x.replace("mid", "big")!=v) {
				t.attr("src", x).show();
				var u=new Image();
				u.src=x.replace("mid", "big");
				u.onload=function() {
					t.attr("src", u.src)
				}
			}
			q(w);
			w.stopPropagation();
			return false
		}
		function q(s) {
			if($("#winSelector").css("display")=="none") {
				$("#winSelector,#bigView").show()
			}
			$("#winSelector").css(o(s));
			s.stopPropagation();
			return false
		}
		function r(s) {
			if($("#winSelector").css("display")!="none") {
				$("#winSelector,#bigView").hide()
			}
			s.stopPropagation();
			return false
		}
		if(document.createTouch) {
			$("#midimg,#winSelector").live("touchmove", q).live("touchstart", p).live("touchend", r)
		}
		else {
			$("#midimg, #winSelector").live("mouseenter", p);
			$("#winSelector").live("mousemove", q);
			$("#midimg,#winSelector").live("mouseout", r)
		}
		var k=$("#winSelector").width();
		var j=$("#winSelector").height();
		var m=$("#midimg").width();
		var l=$("#midimg").height();
		var n=$viewImgHeight=$height=null;
		$("#bigView").scrollTop(0);
		function o(u) {
			if(u==null) {
				return
			}
			var w=u.clientX+$(document).scrollLeft();
			var x=u.clientY+$(document).scrollTop();
			if(document.createTouch) {
				w=event.touches[0].pageX;
				x=event.touches[0].pageY
			}
			var s=$("#midimg").offset().left;
			var t=$("#midimg").offset().top;
			X=w-s-k/2;
			Y=x-t-j/2;
			X=X<0?0:X;
			Y=Y<0?0:Y;
			X=X+k>m?m-k:X;
			Y=Y+j>l?l-j:Y;
			if(n==null) {
				n=$("#bigView img").outerWidth();
				$viewImgHeight=$("#bigView img").height();
				if(n<200||$viewImgHeight<200) {
					n=$viewImgHeight=800
				}
				$height=j*$viewImgHeight/l;
				$("#bigView").width(k*n/m);
				$("#bigView").height($height)
			}
			var y=X*n/m;
			var z=Y*$viewImgHeight/l;
			$("#bigView img").css( {
				left: y*-1, top:z*-1
			}
			);
			var C=document.documentElement.clientHeight==0?document.body.clientHeight:document.documentElement.clientHeight;
			var B=((C-$height)/2)+$(document).scrollTop();
			B=B<240?240:B;
			var A=557;
			if($("#main").hasClass("full")==false) {
				A=487
			}
			var v=$(".danpinBox").offset().left+A;
			if(isIE6) {
				v=ie6.setLeft(v)
			}
			$("#bigView").css( {
				top: B, left:v
			}
			);
			return {
				left: X, top:Y
			}
		}
	}
	)();
	$("#saleout").live("click", function() {
		var j=$("#productcode").text().split("：")[1];
		var l=466;
		var k=208;
		ajaxIsLogined(function() {
			if(!isLogined) {
				l=451;
				k=156
			}
			$.fn.popwindow( {
				width: l, height:k, title:"到货通知我", href:"http://www.vancl.com/Product/ProductSaleOutNotify.aspx?oper=1&productCode="+j+"&r="+Math.random()
			}
			)
		}
		);
		return false
	}
	);
	$(".selColor li:not(.colorBlocksouqing),.selSize li").live("mouseover", function() {
		$(this).addClass("hover")
	}
	).live("mouseout", function() {
		$(this).removeClass("hover")
	}
	);
	if(jQuery.fn.jscroll) {
		$(".selColorPolo").jscroll( {
			W:"7px", Bg:"#DDD", Bar: {
				Bd: {
					Out: "#A10000", Hover:"#A10000"
				}
				, Bg: {
					Out: "#A10000", Hover:"#A10000", Focus:"#A10000"
				}
			}
			, Btn: {
				btn: false
			}
		}
		)
	}
	if(global()!=undefined&&global().screenResize!=undefined&&window.location.host.indexOf("item.vancl.com")>-1) {
		global().screenResize(function() {
			$("body").addClass("dpWidescreen")
		}
		, function() {
			$("body").removeClass("dpWidescreen")
		}
		)
	}
	$(".MemberGrade").live("mouseover", function() {
		$(".MemberGrade").addClass("MemberGrade_Line");
		$(".MemberGradeList").show()
	}
	).live("mouseout", function() {
		$(".MemberGrade").removeClass("MemberGrade_Line");
		$(".MemberGradeList").hide()
	}
	);
	function g() {
		var j=parseFloat($("#selectedAmount").val());
		re=/\d/g;
		var k=$(".cuxiaoPrice span").text().replace(/[\d|\.]+/g, function(l, m) {
			if(m==1) {
				m=2
			}
			else {
				m=0
			}
			return(parseFloat(l)*j).toFixed(m)
		}
		)
	}
	$("#selectedAmount").live("click", g);
	g();
	(function() {
		var j=["sina", "sohu", "qq", "qqzone", "kaixin", "renren", "douban"];
		$("#share a").live("click", function() {
			var m=$(this).prevAll("a").length;
			var l=[];
			$.each($("#imageMenu li span"), function(p, q) {
				if(j[m]=="qqzone") {
					l[p]=$(q).attr("name")
				}
				else {
					l[p]=$(q).attr("name").replace("small", "mid")
				}
			}
			);
			var o="@VANCL粉丝团";
			if(j[m]=="qq") {
				o="@VANCL"
			}
			var n="我在凡客诚品看到了一个非常不错的商品："+$.trim($("#styleinfo").text())+"，仅售"+$.trim($("#pricearea .cuxiaoPrice strong:eq(0)").text())+"元； "+$.trim($(".danpin_YhTsBox").find("li:first").text())+o+" ，地址："+getQueryString(document.location.href.replace(/(demo|my)item/ig, "item"))+" ";
			$.fn.share( {
				api: j[m], title:n, url:k(), pic:l
			}
			);
			return false
		}
		);
		function k() {
			return encodeURIComponent(getQueryString(document.location.href.replace(/(demo|my)item/ig, "item")))
		}
	}
	)();
	$(".question a").live("mouseover", function() {
		var j=$("#vipiframe");
		if(j.length==0) {
			var j=$("<iframe />");
			j.attr("id", "vipiframe").attr("frameborder", "0").appendTo("body")
		}
		j.attr("src", $(this).attr("href")).css( {
			width: 340, height:125, top:$(this).offset().top+20, left:$(this).offset().left-226
		}
		).show()
	}
	).live("mouseout", function() {
		$("#vipiframe").hide()
	}
	).live("click", function() {
		return false
	}
	);
	if($("#onlickColor .colorBlock").attr("name")=="True") {
		$("#comeon").fadeIn();
		$(".NowHasGoods").text("库存紧张")
	}
	$(".dp_scbtn").live("click", function() {
		$("#collectbox,#carbox").hide();
		ajaxIsLogined(function() {
			if(!isLogined) {
				openLoginDiv("addFavorite()")
			}
			else {
				addFavorite()
			}
		}
		);
		return false
	}
	);
	(function() {
		$(".RsetTabMenu li").click(function() {
			var k=$(".RsetTabMenu li");
			k.removeClass("hover").addClass("down");
			$(this).addClass("hover").removeClass("down");
			var j=$(this).prevAll().length;
			var l=$(".RsetTabCon");
			l.hide();
			if($.trim(l.eq(j).html())==""&&$(this).find("a").attr("href").length>0) {
				$.get($(this).find("a").attr("href"), function(m) {
					l.eq(j).html(m)
				}
				).success(function() {
					l.eq(j).show()
				}
				)
			}
			else {
				l.eq(j).show()
			}
			if(j>0) {
				$(".RsetTabArea>.liketabfg,.RsetTabArea>.blank20,.RsetTabArea>.blank15,#starvancl").hide()
			}
			else {
				$(".RsetTabArea>.liketabfg,.RsetTabArea>.blank20,.RsetTabArea>.blank15,#starvancl").show();
				l.eq(1).show();
				l.eq(2).show()
			}
			return false
		}
		)
	}
	)();
	$("#tiwen").click(function() {
		ajaxIsLogined(function() {
			if(!isLogined) {
				$.fn.alert("此操作需要登录，您现在要登录吗？", function(j) {
					if(j) {
						location.href="https://login.vancl.com/login/login.aspx?"+location.href
					}
				}
				, {
					type: 2
				}
				)
			}
			else {
				$(".Askquestion").show()
			}
		}
		)
	}
	);
	$(document).ready(function() {
		var k=$("#starvancl").attr("name");
		if(typeof(k)!="undefined") {
			var l=null;
			var j=null;
			$(window).bind("scroll", function(n) {
				if($(window).scrollTop()>$("#starvancl").offset().top&&$("#starvancl").offset().top+$("#starvancl").height()>$(window).scrollTop()) {
					if(l==null) {
						var m=new Date();
						l=m.getTime()
					}
				}
				else {
					if(!($(window).scrollTop()>$("#starvancl").offset().top)||!($("#starvancl").offset().top+$("#starvancl").height()>$(window).scrollTop())) {
						if(l!=null&&j==null) {
							var o=new Date();
							j=o.getTime();
							if(j-l>3000) {
								starref=true;
								var p=(o.getFullYear())+"-"+(o.getMonth()+1)+"-"+o.getDate();
								$.getJSON("http://counter.vanclimg.com/counter?key=staritem-"+p+"&callback=?")
							}
							else {
								l=null;
								j=null
							}
						}
					}
				}
			}
			)
		}
	}
	);
	function f(k) {
		if(typeof(k)!="undefined"&&k.List.length>0) {
			var j=[];
			j.push('<div class="onlyPageX"><h3>');
			j.push(k.Title);
			j.push("</h3><ul>");
			if(typeof(k.Myself)!="undefined"&&k.Myself.length>0) {
				j.push('<p class="ZuizGoum0328"><span>'+k.Myself+"%</span>的用户购买本商品，还有：</p>")
			}
			$.each(k.List, function(l, m) {
				j.push("<li>");
				j.push('<a name="'+m.Ref+'" class="track" rel="'+m.Ref+'" title="'+m.ProductName+'" href="/'+m.ProductCode+'.html" target="_blank">');
				j.push('<img original="'+m.Image+'" alt="'+m.ProductName+'" style="display: inline;"></a>');
				if(typeof(m.RateCss)!="undefined"&&m.RateCss.length>0) {
					j.push('<p class="bfbimg"><span style="'+m.RateCss+'" class="proportionTb sprites"></span><strong>'+m.Rate+"%</strong><strong>购买</strong></p>")
				}
				j.push('<p><a name="'+m.Ref+'" class="track" rel="'+m.Ref+'" href="/'+m.ProductCode+'.html" target="_blank">'+m.ProductName+"</a></p>");
				j.push("<span>市场价￥"+m.MarketPrice+"<em>售价￥"+m.Price+"</em></span></li>")
			}
			);
			j.push('</ul><span class="blank15"></span></div><span class="blank20"></span>');
			return j.join("")
		}
		return""
	}
	$(window).one("scroll", function() {
		var j=$("#productcode").text().split("：")[1]
	}
	);
	(function() {
		var j=$("#relatedPager").find("a[id*='relatedPager_']").length;
		if(j>0) {
			$("#relatedLeft").hide();
			$("#relatedPager").find("a[id*='relatedPager_']").click(function() {
				var k=$(this).attr("id");
				setRelatedCurent(k);
				window.location.hash="relatedshow";
				return false
			}
			);
			$("#relatedRight").click(function() {
				relatedPageStep(1);
				window.location.hash="relatedshow";
				return false
			}
			);
			$("#relatedLeft").click(function() {
				relatedPageStep(-1);
				window.location.hash="relatedshow";
				return false
			}
			)
		}
	}
	)();
	(function() {
		$(window).load(function() {
			LimitPurchase();
			var j=$("#styleinfo").attr("name");
			$.getJSON("/SizeCalculate/IniColorBox.aspx?styleID="+j, function(k) {
				if(typeof(k)!=undefined&&k!=null) {
					sizeCalObj=k;
					if(sizeCalObj.isHave) {
						$("#sizeCal_text").show();
						if(sizeCalObj.start) {
							$("#showSizeCalculate").attr("href", "/SizeCalculate/PageRedirect.aspx?pageName="+sizeCalObj.start)
						}
						$("#showSizeCalculate").popwindow( {
							width: "530px", height:"354px", noOverlayClose:true
						}
						)
					}
				}
			}
			)
		}
		)
	}
	)();
	if($("#onlickSelSize").attr("title")) {
		var c=$("#onlickSelSize").attr("title");
		selectTip(c)
	}
	$(".SelectName").text($("#onlickColor").attr("title"));
	showSize()
}

);
function bindShowStarWindow() {
	var a=$("#productcode").text().split("：")[1];
	$("#showstar").attr("href", "//seller.vancl.com/suit/show?productid="+a);
	$("#showstar").unbind("click");
	$("#showstar").click(function() {
		ajaxIsLogined(function() {
			if(!isLogined) {
				$.fn.alert("此操作需要登录，您现在要登录吗？", function(c) {
					if(c) {
						location.href="https://login.vancl.com/login/login.aspx?"+location.href
					}
				}
				, {
					type: 2
				}
				);
				return false
			}
			else {
				if(isPurchased&&isPurchased>0) {
					if(trialproductcode!="") {
						$("#showstar").attr("href", "http://seller.vancl.com/suit/show?productid="+trialproductcode)
					}
					$.fn.popwindow( {
						href: $("#showstar").attr("href"), width:"821px", height:"500px", title:"我要晒单"
					}
					)
				}
				else {
					$.fn.alert("您尚未购买此商品，或订单未完成，还不能晒单。");
					return false
				}
			}
		}
		, a);
		return false
	}
	);
	$("#starItemPager a").live("click", function(c) {
		var d=$(this).attr("href");
		if(!d) {
			return false
		}
		else {
			d=d+"&normalstarcount="+$("#starvancl").attr("name")
		}
		b(d);
		return false
	}
	);
	function b(c) {
		$.get(c, function(d) {
			$("#starItem .bask").html($(".baskcontainer", d).html());
			$("#starItemPager").html($(".pagercontainer", d).html())
		}
		)
	}
}

function relatedPageStep(f) {
	var b=$("#relatedPager").find("strong").parent();
	var c=b.attr("id");
	var a=c.split("_");
	var e=Number(a[1])+f;
	var d=a[0]+"_"+e;
	setRelatedCurent(d)
}

function setRelatedCurent(e) {
	var b=$("#relatedPager").find("strong");
	var f=b.html();
	b.parent().html(f);
	$("#"+e).html("<strong>"+$("#"+e).html()+"</strong>");
	$(".relatedshow").removeClass("relatedshow").addClass("relatedhide");
	var d=0;
	var a=5;
	var g=Number(e.split("_")[1])*a;
	var j=Number($("#relatedTotal").html());
	if(g+a>=j) {
		a=j-g;
		$("#relatedRight").hide()
	}
	else {
		$("#relatedRight").show()
	}
	if(g==0) {
		$("#relatedLeft").hide()
	}
	else {
		$("#relatedLeft").show()
	}
	while(d<a) {
		var h=g+d;
		$("#relatedImage_"+h).removeClass("relatedhide").addClass("relatedshow");
		d++
	}
}

function selectTip(a) {
	$(".SelectName").text($("#onlickColor").attr("title"));
	if($(".shoppingErrTips2").length>0) {
		$(".shoppingErrTips2").remove()
	}
	var b=$("#onlickSelSize p");
	if(b.length==1) {
		if(a>=10) {
			$(".NowHasGoods").text("现在有货")
		}
		else {
			$(".NowHasGoods").text("库存紧张")
		}
		$("#sizetip").show()
	}
	else {
		$("#sizetip").hide()
	}
	$(".SelectGoods").show()
}

function ChooseThisSize(a, d, c) {
	$(".danpin_xuanzeGMcm").hide();
	$(".shoppingErrTips").remove();
	if(c<10) {
		$("#comeon").fadeIn()
	}
	else {
		$("#comeon").fadeOut()
	}
	$(".selSize li").removeAttr("id");
	$(a).attr("id", "onlickSelSize");
	c=parseInt(c);
	$(a).siblings().find("span").remove();
	$("<span></span>").appendTo($(a));
	var e=$("#selectedAmount option").length-c;
	if(e>0) {
		$("#selectedAmount option").eq(c-1).nextAll().remove()
	}
	else {
		if(e<0) {
			e=Math.abs(e);
			var b=new Array(e);
			$.map(b, function(g, f) {
				var h=parseInt($("#selectedAmount option:last-child").val())+1;
				$("#selectedAmount").append('<option value="'+h+'">'+h+"</option>")
			}
			)
		}
	}
	showSize();
	selectTip(c);
	if(typeof InitSelectSize!="undefined"&&InitSelectSize!=null&&InitSelectSize instanceof Function) {
		InitSelectSize()
	}
}

var preUrlArr=["/SizeCalculate/PageRedirect.aspx?pageName=HWCompute"];
var sizeCalObj;
var preParam= {}

;
function setTab(e, b, d) {
	for(i=1;
	i<=d;
	i++) {
		var c=document.getElementById(e+i);
		var a=document.getElementById("con_"+e+"_"+i);
		c.className=i==b?"hover": "";
		a.style.display=i==b?"block": "none"
	}
}

function recmApinew(b, a, d, e, c) {
	if(a.length>0) {
		var f="http://recom-s.vancl.com/product/GetCurrentRecommendProducts";
		$.ajax( {
			type:"get", async:false, url:f, cache:false, dataType:"jsonp", jsonp:"callback", success:function(g) {
				var o, p, q, r, s, u, n, v="", h;
				var t=$("#productcode").text().split("：")[1];
				var k=[];
				k.push("<h2>");
				k.push("推荐产品");
				k.push("</h2>");
				k.push("<ul class='CarBox_ProductListTab'>");
				if(g.length>5) {
					h=5
				}
				else {
					h=g.length
				}
				for(var l=0;
				l<h;
				l++) {
					r=g[l].ProductName;
					n=g[l].ProductCode;
					s=g[l].SPrice;
					u=g[l].ItemUrl;
					p=g[l].Photos;
					if(p.length>1) {
						for(var m=0;
						m<p.length;
						m++) {
							if(p[m].IsMain) {
								o=p[m].FileName
							}
						}
					}
					else {
						o=p[0].FileName
					}
					q="http://p5.vanclimg.com/product/";
					if(n.length>3) {
						q+=n.substring(0, 1)+"/"+n.substring(1, 2)+"/"+n.substring(2, 3)+"/"
					}
					q=q+n+"/mid/"+o;
					k.push("<li style='text-align: center;'>");
					k.push('<div class="ygmPic">');
					k.push("<a class='track' name='"+e+"' href=\""+u+'" target="_blank" >');
					k.push('<img src="'+q+'" /></a></div>');
					k.push('<a class="ygmName track" name=\''+e+"' href=\""+u+'" target="_blank" style=\'display: inline;word-break: break-all;\'>'+r+"</a>");
					k.push('<p class="ygmPrice">');
					k.push("<span>售价￥"+s+"</span>");
					k.push("</p>");
					k.push("</li>")
				}
				k.push("</ul>");
				a.html(k.join("")).show()
			}
			, error:function(g) {
				a.hide()
			}
		}
		)
	}
}

function recmApi(b, a, d, e, c) {
	if(a.length>0) {
		$.getJSON("//app-recm.vancl.com/RecmService/GetProductByPosition?jsoncallback=?", {
			strJson: b
		}
		, function(f) {
			if(f.Success) {
				var h=$("#productcode").text().split("：")[1];
				var g=[];
				g.push("<h2>");
				g.push("<a href='/favourate?productcode="+h+"&p="+c+"' class='track' name='"+e+"' target='_blank'>您可能喜欢的商品>></a>");
				g.push(f.Title);
				g.push("</h2>");
				g.push("<ul class='CarBox_ProductListTab'>");
				$.each(f.Items, function(j, k) {
					var m="//item.vancl.com/"+k.ProductCode+".html";
					var l=k.Ref+"-"+h;
					g.push("<li>");
					g.push('<div class="ygmPic">');
					g.push("<a class='track' name='"+e+"' href=\""+m+'" target="_blank" rel="'+l+'">');
					g.push('<img src="'+k.ImageUrl+'" /></a></div>');
					g.push('<a class="ygmName track" name=\''+e+"' href=\""+m+'" target="_blank" rel="'+l+'">'+k.ProductName+"</a>");
					g.push('<p class="ygmPrice">');
					g.push("<span>售价￥"+k.Price+"</span>");
					g.push("</p>");
					g.push("</li>")
				}
				);
				g.push("</ul>");
				a.html(g.join("")).show()
			}
			else {
				a.hide()
			}
		}
		)
	}
}

function recmApibyFavorite(b, a, d, e, c) {
	if(a.length>0) {
		$.getJSON("//app-recm.vancl.com/RecmService/GetProductByPosition?jsoncallback=?", {
			strJson: b
		}
		, function(f) {
			if(f.Success) {
				var h=$("#productcode").text().split("：")[1];
				var g=[];
				g.push("<h6>");
				g.push(f.Title);
				g.push("<a href='/favourate?productcode="+h+"&p="+c+"' style='color:#A10000;margin-left:120px;' class='track' name='"+e+"' target='_blank'>更多您可能喜欢的商品>></a></h6>");
				g.push("<ul>");
				$.each(f.Items, function(j, k) {
					var m="//item.vancl.com/"+k.ProductCode+".html";
					var l=k.Ref+"-"+h;
					g.push("<li>");
					g.push('<div class="ygmPic">');
					g.push("<a class='track' name='"+e+"' href=\""+m+'" target="_blank" rel="'+l+'">');
					g.push('<img src="'+k.ImageUrl+'" /></a></div>');
					g.push('<a class="ygmName track" name=\''+e+"' href=\""+m+'" target="_blank" rel="'+l+'">'+k.ProductName+"</a>");
					g.push('<p class="ygmPrice">');
					g.push("<span>售价￥"+k.Price+"</span>");
					g.push("</p>");
					g.push("</li>")
				}
				);
				g.push("</ul>");
				a.html(g.join("")).show()
			}
			else {
				a.hide()
			}
		}
		)
	}
}

function addFavorite() {
	$("#collectboxloaging").html('<img src="//i.vanclimg.com/logo/loading.gif" alt="loading">');
	$.fn.popwindow.close();
	$("#collectbox").css( {
		top: $(".dp_scbtn").offset().top-100, left:$(".danpinRight").offset().left
	}
	).show();
	if(isIE6) {
		$("#collectbox").css( {
			left: ie6.setLeft(539)
		}
		)
	}
	isLogined=true;
	var b=global();
	if(typeof(b.setLoginInfo)!="undefined") {
		b.setLoginInfo()
	}
	var e=$("#productcode").text().split("：")[1];
	var d='[{Position:"rp_item_favorite", ProductCodes:"'+e+'",Rows:"'+5+'",Remark:"NeedExclude"}]';
	var a=$(".collectbox").find(".gmlist");
	var c= {
		productcode: e
	}
	;
	c.price=$.trim($("#pricearea .cuxiaoPrice strong:eq(0)").text());
	c.endcatename=$.trim($(".breadNav a:last").text());
	$.getJSON("/api/likethis.aspx", c, function(f) {
		if(typeof(f)!="undefined"&&f!=null&&typeof(f.msg)!="undefined"&&f.msg=="Y") {
			$("#collectbox").find(".msgboxhead2 a").click(function() {
				$("#collectbox").hide();
				$("#collectboxloaging").show().nextAll().hide();
				$(".fonttext,.tishi, .baocun").hide();
				$(".icte").val("");
				$(".inCti").find("span").removeClass().addClass("inCti_img02");
				return false
			}
			);
			recmApibyFavorite(d, a, "dp_collect_SimilarWatching", "item-favorite-pab", "favorite");
			$("#collectboxloaging").hide().nextAll().show();
			$.getJSON("/api/FavoriteMark.aspx?styleid="+$("#styleinfo").attr("name"), function(g) {
				if(g.Success=="Y") {
					var j=g.CommonRemarks||[];
					if(j.length==0) {
						var h=$.map($(".breadNav a:gt(0)"), function(k) {
							return $.trim($(k).text())
						}
						);
						h.reverse().splice(3-j.length);
						if(h.length>3) {
							h.length=3
						}
						$.merge(j, h)
					}
					else {
						if(j.length>3) {
							j.length=3
						}
					}
					$("#commonmarks").hide();
					if(j.length>0) {
						$("#commonmarks").show().html("常用标签："+$.map(j, function(k) {
							return'<label><input type="checkbox" class="input" />'+k+"</label>"
						}
						).join(" "))
					}
				}
			}
			)
		}
		else {
			$.fn.alert("添加错误。");
			$(".queding80EE8D67985E").click(function() {
				$("#collectbox").hide()
			}
			)
		}
	}
	)
}

function openLoginDiv(b) {
	var c="http://login.vancl.com/popup/js.ashx";
	var a="http://item.vancl.com/styles/closeit.aspx?func="+encodeURIComponent(b);
	$.getScript(c, function() {
		showLoginDialog(a, false)
	}
	)
}

function CommentVote(c) {
	$.fn.popwindow.close();
	isLogined=true;
	var b=global();
	if(typeof(b.setLoginInfo)!="undefined") {
		b.setLoginInfo()
	}
	c=c.replace("#mvc", ".mvc");
	var a=$(".new-btn").find("a[href='"+c+"']").find("span");
	if(!a.html()) {
		a=$(".new-btn[href='"+c+"']").find("strong em")
	}
	$.ajax( {
		url: c+"&t="+Math.random(), dataType:"text"
	}
	).success(function(d) {
		if(d=="Y") {
			a.fadeOut(function() {
				var e="("+(parseInt(a.text().replace("(", "").replace(")", ""))+1)+")";
				a.text(e).fadeIn()
			}
			).closest(".new-comment, .plDYinfo").find(".new-btn, .new-btn a").attr("href", "")
		}
		else {
			$.fn.alert(d)
		}
	}
	).error(function(d) {
		$.fn.alert(d)
	}
	)
}

function LimitPurchase() {
	function b(f, g, h) {
		var d=$("#selectedAmount");
		var e=$("#selectedAmount option");
		d.after("<span id='limitinfo' style='margin-left:5px;'>"+g+"</span>");
		var c=e.eq(h-1).prevAll();
		if(f=="down") {
			c=e.eq(h-1).nextAll()
		}
		c.attr("disabled", true);
		if($.browser.msie&&$.browser.version<=7) {
			c.css( {
				color: "graytext"
			}
			);
			d.unbind("focus").focus(function() {
				$(this).data("f", this.selectedIndex)
			}
			);
			d.unbind("change").change(function() {
				var j=f=="down"?this.selectedIndex>h-1: this.selectedIndex<h-1;
				if(j) {
					this.selectedIndex=$(this).data("f")
				}
				else {
					$(this).data("f", this.selectedIndex)
				}
			}
			)
		}
		if($.browser.msie&&$.browser.version==8) {
			d.unbind("keypress").keypress(function(k) {
				var l=k.keyCode;
				var j=f=="down"?l>(h+48): l<(h+48);
				if(l>48&&l<58&&j) {
					if(l==49&&f=="down") {
						this.selectedIndex=0
					}
					return false
				}
			}
			)
		}
	}
	$("#selectedAmount").next("#limitinfo").remove();
	var a=$("#productcode").text().split("：")[1];
	$.getJSON("api/LimitPurchase.aspx?productcode="+a, function(c) {
		if(typeof(c)!="undefined"&&c!=null&&typeof(c.msg)!="undefined"&&c.msg=="Y"&&typeof(c.direction)!="undefined") {
			b(c.direction, c.err, c.num)
		}
	}
	)
}

$(function() {
	$("input[name=yes]").click(function(b) {
		var c=$(this).index("input[name=yes]");
		if(c==0) {
			$("#recommendarea").slideUp();
			$(".SubmitOk :button").eq(0).show()
		}
		else {
			$(".SubmitOk :button").eq(0).hide();
			$("#recommendarea").slideDown();
			$("#recommendarea textarea").data("forid", (c==1?"textbox26382": "textbox26379"))
		}
	}
	);
	var a=true;
	$(".Comment0903 textarea").keyup(function(b) {
		if(this.value.length>=1000) {
			$(".reachWord").show();
			this.value=this.value.substr(0, 1000)
		}
		else {
			$(".reachWord").hide()
		}
		$(".OrderZifu em").text(this.value.length)
	}
	).focus(function(b) {
		if(a) {
			this.value="";
			this.style.color="black";
			a=false
		}
	}
	);
	$(".SubmitOk :button").click(function() {
		var b= {
			textbox26373: "单品页", textbox26382:"", textbox26379:""
		}
		;
		b.p4182=$(".Comment0903 :checked").val();
		var c=$("#recommendarea textarea");
		if(c.data("forid")) {
			b[c.data("forid")]=c.val()
		}
		$.post("/api/survey.aspx", b);
		$(".yijianTJ").replaceAll(".Comment0903").show();
		return false
	}
	)
}

);
function getQueryString(f) {
	var a=["ref=",
	"source="];
	for(var b=0;
	b<a.length;
	b++) {
		var e=f.indexOf(a[b]);
		if(e>-1) {
			var d=f.substring(e, f.length);
			f=f.substring(0, e);
			if(d.indexOf("&")>-1) {
				f+=d.substring(d.indexOf("&")+1)
			}
		}
	}
	var c=f.length-1;
	if(f[c]=="&") {
		f=f.substring(0, c);
		c=f.length-1
	}
	if(f[c]=="?") {
		f=f.replace(f[c], "")
	}
	return f
}

function askSubmit() {
	if($("#content").val()==0) {
		alert("请填写内容");
		return
	}
	if(typeof($("input[name='questionType']:checked").val())=="undefined") {
		$("#qtype").show();
		return
	}
	var c=$("#title").val();
	var a=$("#content").val();
	var b=$("input[name='questionType']:checked").val();
	var d="/styles/AjaxSendQuiz.aspx?styleid="+$(window.parent.document.body).find("#styleinfo").attr("name");
	$.ajax( {
		async:true, cache:false, type:"POST", dataType:"html", url:d, timeout:5000, data:"title="+escape(c)+"&addtext="+escape(a)+"&quizType="+b, success:function(e) {
			if(e=="ok") {
				alert("问题提交成功！请等待审核。")
			}
			else {
				if(e=="no") {
					alert("问题提交失败！")
				}
				else {
					alert(e)
				}
			}
			$("#content").val("");
			$(".Askquestion").hide()
		}
		, error:function(e) {
			alert("服务器内部错误，请与管理员联系！");
			$("#content").val("");
			$(".Askquestion").hide()
		}
	}
	)
}

$(document).ready(function() {
	$("#content").keyup(function() {
		if(this.value.length>=300) {
			this.value=this.value.substring(0, 300)
		}
	}
	);
	$("#tijiao").click(askSubmit);
	$("#quiztype").click(function() {
		$("#qtype").hide()
	}
	)
}

);
function showSize() {
	var a=$("#onlickSelSize p");
	if($(".selSize").css("display")!="none"&&a.length==1) {
		$(".SelectPoint").show();
		$(".SelectSize").show();
		$(".SelectSize").text($.trim($("#onlickSelSize p").text()))
	}
	else {
		$(".SelectPoint").hide();
		$(".SelectSize").hide()
	}
}

;
(function(a) {
	a.fn.share=function(e) {
		var e=a.extend( {}
		, e);
		var l=e.windowSize||"scrollbars=no,width=600,height=450,left=75,top=20,status=no,resizable=yes";
		var k=e.target||"_blank";
		var i="http://v.t.sina.com.cn/share/share.php";
		var c="http://www.kaixin001.com/rest/records.php?style=11&stime=&sig=";
		var h="http://share.renren.com/share/buttonshare/post/1004";
		var b="http://shuo.douban.com/!service/share";
		var f="http://share.v.t.qq.com/index.php?c=share&a=index&appkey=801276851";
		var g="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey";
		var j="http://t.sohu.com/third/post.jsp";
		d();
		function d() {
			switch(e.api) {
				case"sina": window.open(i+"?pic="+e.pic[0]+"&title="+encodeURIComponent(e.title)+"&url="+encodeURIComponent(e.url)+"&rcontent=&appkey=2821020708", k, l);
				break;
				case"sohu": window.open(j+"?url="+encodeURIComponent(e.url)+"&pic="+e.pic.join(",")+"&title="+encodeURIComponent(e.title)+"&content=utf8", k, l);
				break;
				case"qq": window.open(f+"&title="+encodeURIComponent(e.title)+"&url="+encodeURIComponent(e.url)+"&pic="+e.pic.join("|")+"&rcontent=", k, l);
				break;
				case"qqzone": window.open(g+"?title="+encodeURIComponent(e.title)+"&url="+e.url+"&pics="+e.pic.join("|")+"&rcontent=", k, l);
				break;
				case"kaixin": window.open(c+"&url="+encodeURIComponent(e.url)+"&content="+encodeURIComponent(e.title)+"&pic="+e.pic.join(","), k, l);
				break;
				case"renren": window.open(h+"?title="+encodeURIComponent(e.title)+"&url="+encodeURIComponent(e.url)+"&pic="+e.pic[0]+"&rcontent=", k, l);
				break;
				case"douban": window.open(b+"?image="+e.pic[0]+"&href="+e.url+"&name="+encodeURIComponent(e.title), k, l);
				break
			}
		}
	}
}

)(jQuery);
$(function() {
	function d(g) {
		if(history&&history.pushState) {
			var h= {
				productcode: g
			}
			;
			window.history.pushState(h, document.title, window.location.href.replace(/\d {
				7, 8
			}
			\.html/, g+".html"))
		}
	}
	window.onpopstate=function(g) {
		if(g.state) {
			a(g.state.productcode, c, false)
		}
		else {
			var h=document.location.toString().match(/(\w {
				7, 8
			}
			).html/);
			if(h!=null&&h.length==2) {
				var i=h[1];
				if($("#productcode").text().split("：")[1]!=i) {
					a(i, c, false)
				}
			}
		}
	}
	;
	function b(g) {
		var q=new Date();
		var v=new Date(2014, 6, 11, 13, 0, 0);
		var l=(document.location.search+"").indexOf("cansibeiyidonggoumaiicon=1")!=-1;
		var j=new Date(2014, 6, 12, 15, 0, 0);
		if(!l&&(q<v||q>=j)) {
			return
		}
		var r=g.trim((g("#productcode").html()+"").replace("商品编号：", ""));
		var u=",1954344,1971176,";
		if(u.indexOf(","+r+",")==-1) {
			return
		}
		var h="http://catalog.vancl.com/home/cansibei.html";
		var p="http://i4.vanclimg.com/tuan/635217545218638836_d.png";
		var w="http://i1.vanclimg.com/tuan/635171935165532540_icon10.14.png";
		var o=p;
		var m=g(".cuxiaoPrice .MemberGrade").size()>0?260:218;
		var k="<div id='divFaLanRongAd' style='position: absolute; top: 37px; left: "+m+"px'><div id='divFaLanRongAdInner'><a href='"+h+"' target='_blank' alt=''><img src='"+o+"'/></a></div></div>";
		g("#pricearea .cuxiaoPrice").after(k);
		var i=g("#addToShoppingCar");
		var t=w;
		if(i.size()>0) {
			i.parent().html("<a href='"+h+"' target='_blank' alt=''><img src='"+t+"'/></a>")
		}
	}
	function f(g) {
		b(g);
		var m=g("#styleinfo").attr("name");
		if(m!="439656") {
			return
		}
		var h="http://catalog.vancl.com/shirts/20140310.html";
		var l="http://i2.vanclimg.com/tuan/635332604608076411_buy.png";
		var n="http://i1.vanclimg.com/tuan/635171935165532540_icon10.14.png";
		var k=l;
		var j=g(".cuxiaoPrice .MemberGrade").size()>0?260:218;
		var i="<div id='divFaLanRongAd' style='position: absolute; top: 37px; left: "+j+"px'><div id='divFaLanRongAdInner'><a href='"+h+"' target='_blank' alt=''><img src='"+k+"'/></a></div></div>";
		g("#pricearea .cuxiaoPrice").after(i)
	}
	f($);
	function a(j, i, g) {
		$("#loading").html('<img src="//i.vanclimg.com/logo/loading.gif" alt="loading">');
		var h=$(".danpinBox").offset().left;
		if(isIE6) {
			$("#loading").css( {
				left: ie6.setLeft(h)
			}
			)
		}
		else {
			$("#loading").css( {
				left: h
			}
			)
		}
		$("#loading").css( {
			top: $(".bigImg").position().top, height:260, width:$(".danpin_colLef").width()
		}
		).show();
		$.get("/styles/AjaxChangeProduct.aspx?productcode="+j+"&point="+i+"&ref="+e("ref")+"&source="+e("source")+"&fresh="+Math.random(), function(o) {
			$this=$(".selColor li[name='"+j+"']");
			var q=$("#allcolor li[name='"+j+"']").attr("group");
			$("#productTitle h2").html($("#title h2", o).html());
			var p=$("#catefortitle", o).html();
			if(p!=undefined&&p!=null&&p!="") {
				document.title=p
			}
			$("#productTitle .brandNumArea").html($("#title .brandNumArea", o).html());
			var t=$("#pricearea").children(".pingfen").html();
			$("#pricearea").html($("#price", o).html()).children(".pingfen").html(t);
			$(".selSizeArea").html($("#size", o).html());
			$("#tj").html($("#tj", o).html());
			var r=$(".colorHoverok").remove()[0];
			if(typeof(q)!="undefined") {
				$("#"+q).trigger("mouseenter");
				$(".ColorGroupactive").removeClass("ColorGroupactive");
				$("#"+q).append($(r).clone()).addClass("ColorGroupactive");
				$this=$(".selColor li[name='"+j+"']")
			}
			$this.append($(r).clone());
			$(".bigImg").html($(".bigImg", o).html());
			var m=$("#midimg", o).attr("src");
			if(m!=null&&m!="") {
				$("#danpinFixedLeftContentImg").attr("src", m)
			}
			var n=$("#midimg", o).attr("title");
			$("#danpinFixedLeftContentImg").attr("title", n);
			$("#ProductTitleHide h2").html($("#productTitle h2", o).html());
			$("#loading").fadeOut("slow").hide(0);
			$(".smallImg").html($(".smallImg", o).html());
			$("#promotion").html($("#promotion", o).html());
			if((typeof checkMenuStatus=="undefined"||checkMenuStatus==null||!(checkMenuStatus instanceof Function))&&$("#imageMenu").children("li").length>5) {
				$.getScript("//js.vanclimg.com/item/smallimg.js", function() {
					checkMenuStatus()
				}
				)
			}
			$(".goodsNum, .goodsAddArea, .AreaItotal,.shoppingNews,.shoppingErrTips").remove();
			$(".cityAdd").removeClass("notallowed");
			$("#citystatus").text("");
			$(".SelectGoods").hide();
			if($(".goodsNum", o).length!=0) {
				$(".selSizeArea + .blank8ie").after($("#shoppingcar", o).html());
				$(".goodsAddArea").show()
			}
			$("#onlickColor").removeAttr("id");
			var l=$this.find(".colorBlock");
			if(l.attr("name")=="True"&&l.hasClass("colorBlocksouqing")==false) {
				$("#comeon").show()
			}
			else {
				$("#comeon").hide()
			}
			var k=$.trim($this.text());
			var u=$("#productcode").text().split("：")[1];
			$this.attr("id", "onlickColor");
			showSize();
			var s=$("#onlickSelSize").attr("title");
			selectTip(s);
			$("#imageMenu").scrollTop(0).scrollLeft(0);
			if(typeof checkMenuStatus!="undefined"&&checkMenuStatus instanceof Function) {
				$("#imageMenu").scrollTop(0);
				checkMenuStatus()
			}
			$(".fangda a").attr("href", "/Styles/BigImg.aspx?ProductCode="+u);
			$("#product_set").html($("#product_set", o).html());
			$(".dpShuXing ul li.ajaxchange").remove();
			$(".dpShuXing ul").append($("#productporperty", o).html());
			if($(".dpShuXing ul li").length>0) {
				$("#attr").show()
			}
			else {
				$("#attr").hide()
			}
			$("#starvancl").html($("#starvancl", o).html());
			bindShowStarWindow();
			LimitPurchase();
			var v=location.href.replace(/\d {
				7, 8
			}
			/, u);
			if(g) {
				d(u)
			}
			$lazyload=$(".danpin_TJtaozTab,#starvancl,#tj").find("img[original]").not("[src])");
			if($lazyload.length>0&&typeof($.fn.lazyload)=="function") {
				$lazyload.lazyload()
			}
			if(typeof InitSelectSize!="undefined"&&InitSelectSize!=null&&InitSelectSize instanceof Function) {
				InitSelectColor()
			}
			f($)
		}
		)
	}
	$(".selColorArea .selColor li[name]").live("click", function() {
		if($(this).attr("id")!="onlickColor") {
			$(".selSize li").removeAttr("onclick");
			var g=$(this).attr("name");
			a(g, c, true)
		}
		return false
	}
	);
	var c=(function() {
		var i=document.location.toString();
		var h=i.indexOf("point=");
		if(h>-1) {
			h+=6;
			var g=i.indexOf("&");
			if(g==-1) {
				g=h.length
			}
			return i.substring(h, g)
		}
		return 0
	}
	)();
	function e(h) {
		var j=document.location.search;
		if(j.indexOf(h+"=")>-1) {
			var g=j.indexOf(h+"=");
			var i=j.substring(g+h.length+1, j.length);
			if(i=="") {
				return null
			}
			if(i.indexOf("&")>-1) {
				i=i.substring(0, i.indexOf("&"))
			}
			return i
		}
		return""
	}
}

);
$(function() {
	function c() {
		$(".rightborder2").height($(".cltboxcon").height()-2)
	}
	function b(e, j) {
		var k="", f=false;
		var l="171";
		if(!$.trim(j)) {
			k=" 请输入标签";
			f=true
		}
		else {
			var h=/^[\u4E00-\u9FA50-9_a-zA-Z, ，]+$/i;
			var d=j.split(/[, ，]/);
			var g=d.length;
			if(!h.test(j)) {
				k="请输入中英文、数字或下划线";
				l="190";
				f=true
			}
			else {
				if($.unique(d).length<g) {
					k="请不要设置重复标签";
					f=true
				}
				else {
					if(d.length>3) {
						k="最多3个标签";
						f=true
					}
					else {
						$.each(d, function(m, o) {
							if(o.gblen()>10) {
								f=true;
								k="单个标签最多10个字符";
								return false
							}
						}
						)
					}
				}
			}
		}
		if(f) {
			$(".tishi").eq(e).width(l).empty().html("<span></span>"+k+"！").show(c);
			return false
		}
		else {
			$(".tishi").eq(e).hide(c)
		}
		return true
	}
	function a(e, f) {
		var g="", d=true;
		if(!(d=!!$.trim(f))) {
			g="Email不能为空"
		}
		else {
			if(!(d=/^[a-z0-9]([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z] {
				2, 3
			}
			([\.][a-z] {
				2
			}
			)?$/i.test(f))) {
				g="Email格式不正确"
			}
		}
		if(!d) {
			$(".tishi").eq(e).empty().html("<span></span>"+g+"！").show(c)
		}
		return d
	}
	$(".addsubscribe,.addmark").click(function(f) {
		var g=$(this).attr("class").indexOf("addmark")==-1?1: 0;
		$(".fonttext").eq(g).toggle();
		var d=$(".inCti").eq(g).find("span").attr("class");
		$(".inCti").eq(g).find("span").removeClass().addClass(d=="inCti_img02"?"inCti_img01": "inCti_img02");
		c();
		if($(this).text()=="取消") {
			$(".fonttext").eq(g).find(":text").val("");
			$(".fonttext").eq(g).find(":checkbox").attr("checked", false);
			$(".tishi").eq(g).hide()
		}
		return false
	}
	);
	$(".icte:eq(0)").blur(function() {
		var d=$(this).val();
		if(d!=""&&typeof(d)!="undefined"&&d!=null) {
			$(this).val(d.replace(/[, ，] {
				2,
			}
			/g, ",").replace(/^[, ，]/, "").replace(/[, ，]$/, ""))
		}
	}
	);
	$(".submitdiv").click(function(d) {
		var j=$("#styleinfo").attr("name");
		var h=$("#productcode").text().split("：")[1];
		var f=$(this).index(".submitdiv");
		var k=$(".icte").eq(f).val();
		var g= {
			productcode: h
		}
		;
		var l="";
		if(f==0) {
			if(!b(f, k)) {
				return false
			}
			g.styleid=j;
			g.marks=k;
			l="/api/SaveFavoriteMark.aspx"
		}
		else {
			if(!a(f, k)) {
				return false
			}
			g.email=k;
			l="/api/AddSubscribe.aspx"
		}
		$.getJSON(l, g, function(e) {
			if(typeof(e)!="undefined"&&e!=null&&typeof(e.Success)!="undefined") {
				var i=e.Success?"成功": "失败";
				$(".baocun").eq(f).html("保存"+i+"！").show("fast", function() {
					var m=$(this);
					setTimeout(function() {
						m.hide("fast")
					}
					, 3000);
					$(".tishi").eq(f).hide(c)
				}
				)
			}
		}
		);
		return false
	}
	);
	$("#commonmarks input").live("click", function(f) {
		var g=$(".icte").eq(0);
		var i=g.val();
		var h=$(this).closest("label").text();
		if(!$.trim(i)&&this.checked) {
			g.val(h)
		}
		else {
			var d=$.grep(i.split(/[, ，]/), function(j, e) {
				return j!=$.trim(h)
			}
			);
			if(this.checked) {
				d.push(h)
			}
			g.val(d.join(","))
		}
		b(0, g.val())
	}
	)
}

);
document.domain="vancl.com";
var ColorBoxTitle="计算您的尺码";
var PreUrl=window.parent.preUrlArr;
var sizeCalObj=window.parent.sizeCalObj;
var preParam=window.parent.preParam;
var isSizeList=false;
function IniSlider(styleID, SDVFIDs, arrSDVFID, isJYW) {
	var t=encodeURI(SDVFIDs.toString());
	jQuery.get("/SizeCalculate/IniSlider.mvc?styleID="+styleID+"&SDVFIDs="+t+"&r="+Math.random(), function(data) {
		if(data=="") {
			iframeClose();
			return
		}
		var r="var arr = "+data;
		eval(r);
		for(var i=0;
		i<arr.length;
		i++) {
			var id=arr[i].Name;
			for(var j=0;
			j<arrSDVFID.length;
			j++) {
				if(id==arrSDVFID[j].SDVFID) {
					arrSDVFID[j].min=arr[i].min;
					arrSDVFID[j].max=arr[i].max;
					var bgImage=arr[i].backImage;
					if(isJYW) {
						bgImage=bgImage.replace(".gif", "_2.gif")
					}
					$("#"+arrSDVFID[j].divID).css("background-image", "url("+bgImage+"?1234)");
					$("#"+arrSDVFID[j].outputID).attr("name", arr[i].SDVFID);
					if(preParam[arrSDVFID[j].outputID]) {
						var v=preParam[arrSDVFID[j].outputID];
						arrSDVFID[j].value=v.split(",")[0]
					}
					Slider(arrSDVFID[j])
				}
			}
		}
	}
	)
}

function Slider(a) {
	this.range="min";
	this.min=0;
	this.max=100;
	this.value=0;
	this.sliderID="";
	this.outputID="";
	this.step=1;
	if(a.sliderID!="undefined"&&a.sliderID!="") {
		if(typeof(a.range)!="undefined") {
			this.range=a.range
		}
		if(typeof(a.min)!="undefined") {
			this.min=parseFloat(a.min)
		}
		if(typeof(a.max)!="undefined") {
			this.max=parseFloat(a.max)
		}
		if(typeof(a.value)!="undefined") {
			this.value=a.value
		}
		else {
			this.value=this.min
		}
		if(typeof(a.step)!="undefined") {
			this.step=a.step
		}
		var b= {
			range: this.range, value:this.value, step:this.step, min:this.min, max:this.max
		}
		;
		if(typeof(a.outputID)!="undefined"&&a.outputID!="") {
			$("#"+a.outputID).val(this.value);
			b.slide=function(c, d) {
				$("#"+a.outputID).val(0+d.value)
			}
			;
			$("#"+a.outputID).data("max", this.max);
			$("#"+a.outputID).data("min", this.min);
			$("#"+a.outputID).focusout(function() {
				var c=$("#"+a.outputID).val();
				if(/^[0-9]+(.[0-9] {
					2
				}
				)?$/.test(c)||/^[0-9]+(.[0-9] {
					1
				}
				)?$/.test(c)) {
					$("#"+a.sliderID).slider("option", "value", c)
				}
				else {
					alert("请输入两位位小数或整数！！");
					$("#"+a.outputID).focus()
				}
			}
			)
		}
		$("#"+a.sliderID).slider(b)
	}
}

function ShowHWCompute() {
	ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName=HWCompute.html")
}

function ShowSizeList() {
	if(sizeCalObj.sizelist) {
		ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName="+sizeCalObj.sizelist)
	}
}

function ShowExactCompute() {
	if(sizeCalObj.exact) {
		ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName="+sizeCalObj.exact)
	}
}

function ShowButtocks() {
	if(sizeCalObj.second) {
		ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName="+sizeCalObj.second)
	}
	return false
}

function ShowContFind() {
	if(sizeCalObj.nofind) {
		ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName="+sizeCalObj.nofind)
	}
}

function ShowContFind_E() {
	if(sizeCalObj.nofind_e) {
		ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName="+sizeCalObj.nofind_e)
	}
}

function ShowResult() {
	if(sizeCalObj.result) {
		ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName="+sizeCalObj.result)
	}
}

function ShowResult_E() {
	if(sizeCalObj.result_e) {
		ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName="+sizeCalObj.result_e)
	}
}

function showResult4Exact() {
	if(sizeCalObj.result4exact) {
		ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName="+sizeCalObj.result4exact)
	}
}

function ShowResult_EYW() {
	ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName=ResultExactYW")
}

function ShowError() {
	if(sizeCalObj.error) {
		isSizeList=true;
		ColorboxReload("/SizeCalculate/PageRedirect.mvc?pageName="+sizeCalObj.error)
	}
}

function GoPrevious() {
	if(PreUrl.length>0) {
		var a=PreUrl.pop();
		ColorboxReload(a)
	}
}

function ColorboxReload(d) {
	var a=$(window.parent.document.body);
	var b=a.find("#LoadedContent");
	b.attr("src", d)
}

function LoadLookList(a, e, c) {
	if(typeof(c)!="undefined") {
		var d="";
		var b="";
		if(sizeCalObj.sizelist) {
			d='<a href="#" id="sizeList" title="">查看尺码对照表</a>'
		}
		if(c) {
			if(sizeCalObj.exact) {
				b='<a id="exactCompute" href="#" title="">精确计算</a>'
			}
			else {
				if(typeof($(".Men-JXWbtnUp"))!="undefined") {
					$(".Men-JXWbtnUp").css("margin-left", "297px")
				}
				if(typeof($(".Men-GXbtnUp")!="undefined")) {
					$(".Men-GXbtnUp").css("margin-left", "162px")
				}
			}
		}
		$("."+a).html(d+b+$("."+a).html())
	}
	$("."+a).find("a").each(function() {
		var f=$(this).attr("id");
		if(f=="sizeList") {
			$(this).click(function() {
				pushInputParm();
				PreUrl.push(e);
				ShowSizeList();
				return false
			}
			)
		}
		if(f=="exactCompute") {
			$(this).click(function() {
				pushInputParm();
				PreUrl.push(e);
				ShowExactCompute();
				return false
			}
			)
		}
	}
	)
}

function pushInputParm() {
	$("input[type='text']").each(function() {
		window.parent.preParam[$(this).attr("id")]=$(this).val()+","+$(this).attr("name")
	}
	)
}

function pushRaidoChecked() {
	$("input[type='radio']").each(function() {
		if($(this).attr("checked")) {
			window.parent.preParam.statureRadio=$(this).attr("id")
		}
	}
	)
}

function setRadioChecked() {
	var a="standard";
	if(typeof(window.parent.preParam.statureRadio)!="undefined") {
		var a=window.parent.preParam.statureRadio
	}
	$("#"+a).attr("checked", "checked")
}

function UnitSelect(d) {
	var b=d.val();
	var a=b.split(",");
	if(a.length==2) {
		$("#div_"+a[0]).removeClass("hide").addClass("show");
		$("#div_"+a[1]).removeClass("show").addClass("hide");
		var g=$("#"+a[1]).val();
		var f=d.find("option:selected").text();
		var c="";
		if(f=="CM") {
			c=g*33.33333
		}
		else {
			c=g/33.33333
		}
		var e=c.toFixed(1);
		if(e>$("#"+a[0]).data("max")) {
			e=$("#"+a[0]).data("max")
		}
		if(e<$("#"+a[0]).data("min")) {
			e=$("#"+a[0]).data("min")
		}
		$("#"+a[0]).val(e);
		$("#"+a[0]).focusout()
	}
}

function setColorBoxTitle() {
	var a=$(window.parent.document.body);
	a.find("#boxTitle").html(ColorBoxTitle)
}

function validate(e, d) {
	var a=$(window.parent.document.body);
	var b=$("#"+e).slider("option", "max");
	var c=$("#"+e).slider("option", "min");
	var f=$("#"+d).val();
	errMess=a.find("#sizeCalErrMessage").val();
	if(f=="") {
		if(errMess=="") {
			a.find("#sizeCalErrMessage").val($("#"+d).attr("title"))
		}
		else {
			a.find("#sizeCalErrMessage").val(errMess+"和"+("#"+d).attr("title"))
		}
		return false
	}
	else {
		if(b<f||c>f) {
			if(errMess=="") {
				a.find("#sizeCalErrMessage").val($("#"+d).attr("title"))
			}
			else {
				a.find("#sizeCalErrMessage").val(errMess+"和"+$("#"+d).attr("title"))
			}
			return false
		}
		else {
			return true
		}
	}
}

function iframeClose() {
	ChooseSize();
	parent.$.fn.popwindow.close();
	return false
}

function colorBoxResize(b) {
	var a= {
		width: "0px", height:"0px", overflow:"hidden"
	}
	;
	if(typeof(b.innerHeight)!="undefined") {
		a.height=b.innerHeight
	}
	else {
		a.height=b.height
	}
	if(typeof(b.innerWidth)!="undefined") {
		a.width=b.innerWidth
	}
	else {
		a.width=b.width
	}
	parent.$.fn.popwindow.resize(a)
}

function reSizeC() {
	ResizeCBbody("cboxMiddleLeft");
	ResizeCBbody("cboxContent");
	ResizeCBbody("cboxMiddleRight")
}

function ResizeCBbody(b) {
	var e=$(window.parent.document.body);
	var d=e.find("#"+b);
	var a=d.css("height");
	if(a.indexOf("px")>0) {
		a=a.replace("px", "");
		var c=parseInt(a);
		var c=c>28?c-28: c;
		d.css("height", c.toString()+"px")
	}
}

function ChooseSize() {
	var b=$(window.parent.document.body);
	var a=b.find("#CalculateResult").val();
	if(a&&a!="") {
		var c=b.find(".selSize").find("ul");
		c.find("li").each(function() {
			var d=$.trim($(this).html());
			if(d==a) {
				$(this).click()
			}
		}
		)
	}
}

function setSelectParValue() {
	$("select").each(function() {
		var b=$(this).find("option:selected").text();
		var a=$(this).attr("id");
		sizeCalObj[a]=b
	}
	)
}

function getSelectValue() {
	$("select").each(function() {
		var a=$(this).attr("id");
		var b="尺";
		if(typeof(sizeCalObj[a])!="undefined") {
			b=sizeCalObj[a]
		}
		$(this).find("option").each(function() {
			if($(this).text()==b) {
				$(this).attr("selected", "selected");
				var c=$(this).val().split(",");
				if(c.length==2) {
					$("#div_"+c[0]).removeClass("hide").addClass("show");
					$("#div_"+c[1]).removeClass("show").addClass("hide")
				}
			}
		}
		)
	}
	)
}

;
$(document).ready(function() {
	var c=$(".selSize li:first");
	if(c.length==1) {
		var a=c.attr("name");
		var b=$("#productcode").text().split("：")[1];
		$("body").append($('<iframe style="display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;" src="http://page.vanclimg.com/dsp/iframe.html?from=item&pagetype=item&productcode='+b+"&sku="+a+'"></iframe>"'))
	}
}

);
var VANCL=VANCL|| {}

;
VANCL.Global= {
	setLoginInfo:function() {
		var a=this.getCookie("nickname");
		if(a!=null&&a!=""&&a.length>0) {
			a=decodeURI(a);
			a=this._sub(a, 10);
			$("#welcome").html("您好, <a href='http://my.vancl.com' class='top track' name='head-denglu' style='color: rgb(51, 51, 51);'>"+a+"</a> <span style='color: #a10000'><a class='top track' style='color: #a10000'  href='https://login.vancl.com/Login/UserLoginOut.aspx' target='_parent' name='head-tcdl' >退出登录</a>&nbsp;|&nbsp;<a class='track' name='head-ghyh' href='javascript:VANCL.Global.login();' style='color: #a10000'>更换用户</a></span>")
		}
	}
	,
	getCookie:function(c) {
		var a="";
		var e=c+"=";
		if(document.cookie.length>0) {
			var d=document.cookie.indexOf(e);
			if(d!=-1) {
				d+=e.length;
				var b=document.cookie.indexOf(";", d);
				if(b==-1) {
					b=document.cookie.length
				}
				a=document.cookie.substring(d, b)
			}
		}
		return a
	}
	,
	_sub:function(e, c) {
		var d=/[^\x00-\xff]/g;
		if(e.replace(d, "mm").length<=c) {
			return e
		}
		var b=Math.floor(c/2);
		for(var a=b;
		a<e.length;
		a++) {
			if(e.substr(0, a).replace(d, "mm").length>=c) {
				return e.substr(0, a)+"..."
			}
		}
		return e
	}
	,
	screenResize:function(c, b) {
		$(window).bind("resize", {
			wideCallBack: c, narrowCallback:b
		}
		, function() {
			try {
				if($(window).width()>=1250) {}
				else {}
			}
			catch(d) {}
		}
		);
		try {
			if($(window).width()>=1250) {}
			else {}
		}
		catch(a) {}
	}
	,
	bookmarksite:function(a, b) {
		if(document.all) {
			window.external.AddFavorite(b, a)
		}
		else {
			if(window.sidebar&&window.sidebar.addPane) {
				window.sidebar.addPanel(a, b, "")
			}
		}
	}
	,
	login:function() {
		location.href="https://login.vancl.com/login/login.aspx?"+encodeURIComponent(location.href)
	}
	,
	register:function() {
		location.href="https://login.vancl.com/login/reg.aspx?"+encodeURIComponent(location.href)
	}
}

;
VANCL.MiniCart= {
	config: {
		triggerId: "#shoppingCarNone", mcShoppingCartUrl:"http://shopping.vancl.com/mycart", mcProductTotalCount:'span[car_product_total="shoppingCar_product_totalcount"]', gettting:0, trackSBUSetting:0
	}
	,
	init:function() {
		var a=this.config,
		b=this;
		b.setCartNum();
		$(a.triggerId).mouseenter(function() {
			if(!$(this).hasClass("hover")) {
				$(this).attr("class", "hover");
				b.getCart()
			}
		}
		).mouseleave(function() {
			$(this).attr("class", "active")
		}
		)
	}
	,
	setCartNum:function() {
		var e=this,
		a=this.config,
		d=0;
		var c=e._getCartCookie();
		if(c) {
			var b=c.split("$");
			if(b.length>1&&b[1]!=null) {
				d=parseInt(b[1])
			}
		}
		if(isNaN(d)) {
			d=0
		}
		$(a.mcProductTotalCount).html(d+"")
	}
	,
	getCart:function() {
		var b=this,
		a=this.config;
		if(a.gettting==false||b._isChangeProductCount()==true) {
			b._ajaxProductJsonData()
		}
		if(a.trackSBUSetting==false) {
			b.trackSBU()
		}
	}
	,
	_showNoProductStatus:function() {
		var c=this,
		a=this.config;
		var b='<div class="shopnopru">';
		b=b+'<div class="SCtotalpageno">您的购物车中没有任何商品</div>';
		b=b+'<div class="SCtotalpageBottom"></div>';
		b=b+"</div>";
		$(".shopDropList", a.triggerId).html(b);
		$(a.mcProductTotalCount).html("0")
	}
	,
	_showLoading:function() {
		var c=this,
		a=this.config;
		var b='<div class="shopnopru">';
		b=b+'<div class="SCtotalpageno" style="text-align:center; vertical-align:middle;"><img src="http://i.vanclimg.com/alterorder/loading.gif" alt="购物车数据加载中" /></div>';
		b=b+'<div class="SCtotalpageBottom"></div>';
		b=b+"</div>";
		$(".shopDropList", a.triggerId).html(b)
	}
	,
	_formatterPrice:function(d) {
		var b=d.indexOf("."),
		c=d.length,
		a="";
		if(b>0) {
			while(true) {
				a=d.substr(c-1, 1);
				if(a=="0") {
					c--
				}
				else {
					if(a==".") {
						c--;
						break
					}
					else {
						break
					}
				}
			}
		}
		return d.substr(0, c)
	}
	,
	_ajaxProductJsonData:function() {
		var c=this,
		a=this.config;
		c._showLoading();
		c._log("_ajaxProductJsonData");
		var b= {
			userId: "", indexPage:1, pageSize:7, shoppingcart:"", shoppingpointcart:"", shoppingPresent:""
		}
		;
		var d="http://minicart.vancl.com/DealMiniShoppingServer.asmx/GetMiniJsonDataByPage?callback=?";
		$.ajax( {
			contentType: "application/json;utf-8", url:d, data:b, dataType:"json", success:function(e) {
				c._callbackProductJsonData(e)
			}
			, error:function(e) {
				c._showNoProductStatus();
				$("#"+a.mcCountId).html("0")
			}
		}
		)
	}
	,
	_callbackProductJsonData:function(d, f, e) {
		var j=0,
		k=0,
		g=this,
		a=this.config,
		c=[],
		h="http://i.vanclimg.com/36";
		g._log("_callbackProductJsonData");
		if(d&&d.data&&d.data.length>0) {
			j=parseInt(d.TotalCount);
			if(isNaN(j)) {
				j=0
			}
			k=d.TotalPrice;
			k=g._formatterPrice(k);
			c.push('<div class="havepru">');
			c.push('<div class="havepruTop"></div>');
			c.push('<div class="havepruMid">');
			c.push("<h2>最近加入的商品：</h2>");
			c.push("<ul>");
			$.each(d.data, function(m) {
				var n=this["productImageUrl"], s=this["ProductUrl"], o=this["ProductName"], q=this["ProductPrice"], v=this["Qty"], l=this["clothesCode"], r=this["productType"], t=this["PromoteeId"], u=this["PromoteeIndex"], p=o;
				if(o.length>14) {
					p=o.substring(0, 14)+"…"
				}
				if(n.indexOf("https://sslimg.vancl.com")) {
					n=h+n.substring(23)
				}
				else {
					if(n.indexOf("https://sslimg.vanclimg.com")) {
						n=h+n.substring(26)
					}
					else {
						if(n.indexOf("http://images.vancl.com")) {
							n=h+n.substring(22)
						}
						else {
							if(n.indexOf("http://i.vanclimg.com")) {
								n=h+n.substring(20)
							}
						}
					}
				}
				c.push("<li>");
				c.push('<div class="carListLeft">');
				c.push('    <a href="'+s+'"><img src="'+n+'" alt="'+o+'" width="36" heigth="36" /></a>');
				c.push("</div>");
				c.push('<div class="carListRight">');
				c.push('    <h3><a href="'+s+'" title="'+o+'">'+p+"</a></h3>");
				c.push('    <span class="blank0"></span>');
				c.push('    <div class="priceArea">');
				c.push("        <strong>￥"+q+"</strong><em>×"+v+"</em>");
				c.push("    </div>");
				c.push("</div>");
				c.push('<div class="carListDelect">');
				c.push('    <a class="track" name="head-minicart-delproduct" style="cursor:pointer;" onclick="VANCL.MiniCart.deleteProduct(this,\''+l+"','"+r+"','"+t+"','"+u+"','"+v+"','"+q+"')\">删除</a>");
				c.push("</div>");
				c.push('<span class="blank0"></span>');
				c.push("</li>")
			}
			);
			c.push("</ul>");
			c.push('<div class="ShopCarPageLine"></div>');
			var b=function(l) {
				g._log("defaultCallcack:"+l);
				c.push('<div class="ShopCarPage">');
				c.push('    <div class="SCtotalpage">');
				c.push("        <div>共计(未计算促销折扣)<span>￥"+k+"</span></div>");
				c.push('        <strong><a class="track" name="head-minicart-shopping" href="'+a.mcShoppingCartUrl+'" rel="nofollow">查看购物车(<span car_product_total="shoppingCar_product_totalcount">'+j+"</span>件)</a></strong>");
				c.push('        <span class="blank0"></span>');
				c.push("    </div>");
				c.push("</div>");
				c.push("</div>");
				c.push('<div class="havepruBom"></div>');
				c.push("</div>");
				$(".shopDropList", a.triggerId).html(c.join(""))
			}
			;
			var i=function(l) {
				g._log("successCallback"+l);
				c.push('<div class="ShopCarPage">');
				c.push('    <div class="SCtotalpage">');
				c.push("        <div>共计(未计算促销折扣)<span>￥"+k+"</span></div>");
				c.push('        <a class="track settleMent" name="head-minicart-buynow" href="//buy.vancl.com/?from=minicart" rel="nofollow">立即结算</a>');
				c.push('        <strong><a class="track" name="head-minicart-shopping" href="'+a.mcShoppingCartUrl+'" rel="nofollow">查看购物车(<span car_product_total="shoppingCar_product_totalcount">'+j+"</span>件)</a></strong>");
				c.push('        <span class="blank0"></span>');
				c.push("    </div>");
				c.push("</div>");
				c.push("</div>");
				c.push('<div class="havepruBom"></div>');
				c.push("</div>");
				$(".shopDropList", a.triggerId).html(c.join(""))
			}
			;
			if(d.IsShowBuy&&d.IsShowBuy=="1") {
				g.statisticsCheckoutNowPV();
				i()
			}
			else {
				b()
			}
			a.gettting=!0
		}
		else {
			g._showNoProductStatus()
		}
		$(a.mcProductTotalCount).html(j+"")
	}
	,
	deleteProduct:function(c, b, g, h, i, j, f) {
		var k=this,
		a=this.config,
		d=$(c).parent();
		d.html("删除中");
		d.parent().css( {
			opacity: 0.6
		}
		);
		var e= {
			userId: "", indexPage:1, pageSize:7, clotheCode:b, productType:g, PromoteeId:h, PromoteeIdIndex:i, shoppingcart:"", shoppingpointcart:"", shoppingPresent:""
		}
		;
		var l="http://minicart.vancl.com/DealMiniShoppingServer.asmx/DelMiniJsonProduct?callback=?";
		$.ajax( {
			contentType: "application/json;utf-8", data:e, dataType:"json", url:l, success:function(m) {
				d.parent().slideUp("slow", function() {
					k._callbackProductJsonData(m)
				}
				)
			}
			, error:function(m) {
				k._showNoProductStatus();
				$("#"+a.mcCountId).html("0")
			}
		}
		)
	}
	,
	_isChangeProductCount:function() {
		var d=this,
		a=this.config;
		var c=d._getCartCookie();
		if(c) {
			var b=c.split("$");
			if(b.length>1) {
				var e=$(a.mcProductTotalCount).html();
				if(parseInt(b[1])==parseInt(e)) {
					return false
				}
			}
		}
		return true
	}
	,
	_getCartCookie:function() {
		this._log("_getCartCookie");
		return this._getShoppingCookie("ShoppingCarInfo", false)
	}
	,
	_getShoppingCookie:function(b, d) {
		if(document.cookie.length>0) {
			var c=document.cookie.indexOf(b+"=");
			if(c!=-1) {
				c=c+b.length+1;
				var a=document.cookie.indexOf(";", c);
				if(a==-1) {
					a=document.cookie.length
				}
				var e=document.cookie.substring(c, a);
				return d?unescape(e):e
			}
		}
		return""
	}
	,
	trackSBU:function() {
		this._log("trackSBU");
		this.config.trackSBUSetting=!0;
		var j=VANCL.Global.getCookie("_vuca");
		if(j!=null) {
			var h=document.location.href;
			var d=["ref=",
			"source="];
			for(var b=0;
			b<d.length;
			b++) {
				var f=h.indexOf(d[b]);
				if(f>-1) {
					var g=h.substring(f, h.length);
					h=h.substring(0, f);
					if(g.indexOf("&")>-1) {
						h+=g.substring(g.indexOf("&")+1)
					}
				}
			}
			var c=h.length-1;
			if(h[c]=="#") {
				h=h.substring(0, c);
				c=h.length-1
			}
			if(h[c]=="&") {
				h=h.substring(0, c);
				c=h.length-1
			}
			if(h[c]=="?") {
				h=h.replace(h[c], "")
			}
			try {
				$.getScript("http://counter.vanclimg.com/kv/sbu_"+j+"/?value="+encodeURIComponent(h))
			}
			catch(a) {}
		}
	}
	,
	statisticsCheckoutNowPV:function() {
		this._log("statisticsCheckoutNowPV");
		var b=function() {
			var f=function(i) {
				if(i<10) {
					return"0"+i
				}
				return i
			}
			;
			var c=new Date();
			var h=c.getFullYear();
			var g=f(c.getMonth()+1);
			var e=f(c.getDate());
			var d=h+""+g+""+e;
			return d
		}
		;
		try {
			$.get("http://counter.vanclimg.com/counter?key=head_minicart_pv_"+b())
		}
		catch(a) {}
	}
	,
	_log:function(a) {}
}

;
VANCL.Header=VANCL.Header|| {}

;
VANCL.Header.Category= {
	_config: {}
	,
	init:function(a) {
		this._config=jQuery.extend( {
			mainMenu: "#V_Category_01", viewId:"#V_SubCategory_01", subViewCls:".vanclSubNav", triggers:"li.item", hideDelay:0.1
		}
		, a);
		this._config.container=$(this._config.mainMenu);
		this._bindMainMenu()
	}
	,
	_bindMainMenu:function() {
		var a=this._config,
		b=this;
		$(a.triggers).each(function(c) {
			$(this).mouseenter(function() {
				a.status="visiable";
				a.index=c;
				if(!a.viewer) {
					if(!a.subViewerHtml) {
						b._getSubViewerHtmlData();
						return
					}
					b._initSubViewerContainer()
				}
				a.showTimer&&clearTimeout(a.showTimer);
				a.showTimer=setTimeout(function() {
					b._show(a.index)
				}
				, a.hideDelay*1000);
				a.hideTimer=clearTimeout(a.hideTimer)
			}
			).mouseleave(function() {
				b._log("mouseleave"+c);
				a.status="hidden";
				a.showTimer&&clearTimeout(a.showTimer);
				if(a.hideTimer) {
					return
				}
				a.hideTimer=setTimeout(function() {
					b._hide();
					a.hideTimer=clearTimeout(a.hideTimer)
				}
				, a.hideDelay*1000)
			}
			)
		}
		);
		a.container.mouseenter(function() {
			a.status="visiable";
			$(this).addClass("mainNavHover")
		}
		).mouseleave(function() {
			a.status="hidden";
			$(this).removeClass("mainNavHover");
			a.showTimer&&clearTimeout(a.showTimer);
			b._hide()
		}
		)
	}
	,
	_initSubViewerContainer:function() {
		var a=this._config,
		b=this;
		b._log("_initSubViewerContainer");
		a.viewer||$(a.viewId).length||(a.viewer=$(a.subViewerHtml).hide(), $("img[original]", a.viewer).lazyload( {
			placeholder: "http://i.vanclimg.com/search/color3.gif", skip_invisible:true
		}
		), a.container.append(a.viewer), b._initSubView())
	}
	,
	_initSubView:function() {
		var a=this._config,
		b=this;
		b._log("_initSubView");
		a.subViews=$(a.subViewCls);
		a.subViews.each(function() {
			var c=this;
			$(c).mouseenter(function() {
				a.hideTimer=clearTimeout(a.hideTimer);
				a.selectedSubView=c
			}
			).mouseleave(function() {
				a.hideTimer=setTimeout(function() {
					b._hide();
					a.hideTimer=clearTimeout(a.hideTimer)
				}
				, a.hideDelay*1000)
			}
			)
		}
		)
	}
	,
	_show:function(c) {
		var d=this,
		a=this._config,
		b=a.subViews.eq(c);
		$(a.triggers).removeClass("itemSelected").eq(c).addClass("itemSelected");
		a.subViews.addClass("disnone").removeClass("disshow");
		a.viewer.addClass("disshow").removeClass("disnone");
		$("img[original]", b).trigger("appear");
		b.addClass("disshow").removeClass("disnone");
		d._resetPosition(c);
		d._log("_show:"+c)
	}
	,
	_hide:function() {
		var b=this,
		a=this._config;
		if(a.viewer) {
			a.viewer.addClass("disnone").removeClass("disshow")
		}
		$(a.triggers).removeClass("itemSelected");
		b._log("_hide")
	}
	,
	_resetPosition:function(e) {
		var h=this,
		c=h._config,
		d=$(c.triggers).eq(e),
		g=d.offset().left,
		f=$(c.container).offset(),
		b=g-f.left;
		var a=$(d).hasClass("itempic");
		if(a) {
			$(c.viewer).css( {
				left: "260px"
			}
			)
		}
		else {
			$(c.viewer).css( {
				left: b+"px"
			}
			)
		}
	}
	,
	_getSubViewerHtmlData:function() {
		var a=this._config,
		b=this;
		b._log("_getSubViewerHtmlData");
		if($(a.viewId).length>0&&$(a.viewId).html()!=="") {
			a.viewer=$(a.viewId);
			b._initSubView();
			a.getting=!0;
			if("hidden"==a.status) {
				return
			}
			b._show(a.index)
		}
		if(a.getting) {
			return
		}
		window._subCatCallback=function() {}
		;
		var c="http://page.vanclimg.com/common_sub_cat_asyn.ashx";
		$.ajax( {
			cache:true, url:c, dataType:"JSONP", data:jQuery.param( {
				area: (window.area||""), timespan:"20170525144327"
			}
			), jsonp:"jsoncallback", jsonpCallback:"_subCatCallback", success:function(d) {
				if(d&&d.subcats) {
					a.subViewerHtml=d.subcats;
					b._initSubViewerContainer();
					a.getting=!0;
					if("hidden"==a.status) {
						return
					}
					b._show(a.index)
				}
			}
		}
		)
	}
	,
	_log:function(a) {}
}

;
VANCL.Header.Search= {
	init:function(a) {
		function b() {
			var c=this;
			c.config=jQuery.extend( {
				barNavCls: "#searchBar", txtKeyId:"#skey", btnSearchId:"#btnHeaderSearch"
			}
			, a);
			c._initTab();
			$(c.config.btnSearchId).click(function() {
				c._gotoSearch($(c.config.txtKeyId).val(), null, 3)
			}
			);
			c._getAutoCompleteData();
			c._bindTxt()
		}
		b.prototype= {
			_initTab:function() {
				var c=this.config,
				d=this;
				$(c.barNavCls).children().each(function() {
					var e=this;
					$(e).click(function() {
						var f=$(e).attr("class"), g=$(e).attr("key");
						if(f==="hover") {
							return
						}
						$(e).siblings().removeClass("hover");
						$(e).attr("class", "hover");
						c.selectedTabIndex=$(e).index();
						d._getAutoCompleteData(c.selectedTabIndex);
						d._bindTxt()
					}
					)
				}
				)
			}
			,
			_bindTxt:function() {
				var d=this,
				c=d.config;
				$(c.txtKeyId).click(function() {
					d._onEnter(this)
				}
				).keyup(function(e) {
					d._onKeyUp(e, this)
				}
				).mouseover(function() {
					d._onMouseOver(this)
				}
				).blur(function() {
					d._onExit(this)
				}
				)
			}
			,
			_onEnter:function(e) {
				var c=this.config,
				d=$.trim($(e).attr("defaultkey")),
				f=$(e).val();
				if(c.onEnter) {
					c.onEnter(e);
					return
				}
				if(typeof(d)!=="undefined"&&d!=="") {
					if($.trim(f)===$.trim(e.defaultValue)) {
						$(e).val("")
					}
				}
			}
			,
			_onExit:function(d) {
				var c=this.config;
				if(c.onExit) {
					c.onExit(d);
					return
				}
			}
			,
			_onKeyUp:function(e, f) {
				var c=this.config,
				d=$.trim($(f).attr("defaultkey"));
				if(c.onKeyUp) {
					c.onKeyUp(e, f);
					return
				}
				if(typeof(d)!=="undefined"&&d!=="") {
					$(f).attr("defaultkey", "")
				}
			}
			,
			_onMouseOver:function(d) {
				var c=this.config;
				if(c.onMouseOver) {
					c.onMouseOver(d);
					return
				}
				d.select()
			}
			,
			_gotoSearch:function(h, d, i, g) {
				var j=this,
				e=j.config,
				f=$.trim($(e.txtKeyId).attr("defaultkey")),
				k="",
				l="search",
				c="";
				if(typeof(f)!=="undefined"&&f!=="") {
					h=f
				}
				h=$.trim(h);
				if(typeof(g)!="undefined"&&g!=null) {
					k="s-hp_s-0_keyword_auto-";
					if(typeof(d)!="undefined"&&d!=null) {
						k+=d
					}
					else {
						k+="0"
					}
					k+="-"+g
				}
				else {
					k="s-hp_s-0_keyword-0"
				}
				if(typeof(d)!="undefined"&&d!=null) {
					l=d+".html"
				}
				if(typeof(i)!="undefined"&&i!=null) {
					c="&orig="+i
				}
				j._traceHelper(k, "http://s.vancl.com/"+l+"?k="+h+c);
				window.location.href="http://s.vancl.com/"+l+"?k="+encodeURIComponent(h)+c
			}
			,
			_traceHelper:function(e, f) {
				e=e||"";
				f=f||"";
				var c="",
				g="http://vamr.vancl.com/click.ashx?";
				try {
					if(VA_GLOBAL&&VA_GLOBAL.Lang&&VA_GLOBAL.Lang.timeSeq32&&typeof(VA_GLOBAL.Lang.timeSeq32)=="function") {
						c=VA_GLOBAL.Lang.timeSeq32()
					}
				}
				catch(d) {}
				g+="version=excall_1.0";
				g+="&trackurl="+encodeURIComponent(f);
				g+="&trackname="+encodeURIComponent(e.replace(/[\r\n\t\'\"]/g," "));$.getScript(g)},_getAutoCompleteData:function(e){e=e||0;var d=this.config,f=this;if($.fn.autocomplete){var c="http://page.vanclimg.com/autocompletehandler.ashx";$(d.txtKeyId).unautocomplete();$(d.txtKeyId).autocomplete(c,{delay:10,dataType:"jsonp",minChars:1,max:13,width:$(d.txtKeyId).outerWidth(),matchContains:false,selectFirst:false,formatItem:function(k,g,j){var h='<span class="ks-suggest-key">'+k.name;if(k.categoryname){h+=' 在 <font color="#A10000"><b>'+k.categoryname+"</b></font> 中搜索"}h+="</span>";if(k.count&&parseInt(k.count)>0){h+='<span class="ks-suggest-result">约'+k.count+"条</span>"}return h},formatMatch:function(j,g,h){return j.name},highlight:null}).result(function(h,g,j,i){f._gotoSearch(g.name,g.categoryid,3,i)}).noresult(function(g){f._gotoSearch($(this).val(),null,3)})}}};return new b(a)}};$(function(){function a(){VANCL.Global.setLoginInfo();$("#vanclFavorite").attr("href","javascript:VANCL.Global.bookmarksite('VANCL 凡客诚品: 互联网快时尚品牌', 'http: //www.vancl.com');");$("#myVancl, #vanclMap, #vanclHelp, #vanclCustomer").mouseenter(function(){$(this).attr("class","hover")}).mouseleave(function(){$(this).attr("class","active")});$("#headerTopArea .payattention .vweixinbox").mouseenter(function(){$(".vweixinTip",this).show()}).mouseleave(function(){$(".vweixinTip",this).hide()});VANCL.Header.Search.init();VANCL.MiniCart.init();VANCL.Header.Category.init()}if($("#Head").html()===""){$.ajax({dataType:"text",url:"/public/common.aspx",success:function(e){var d=document.createElement("DIV");d.innerHTML=e;var b=$(d);var c=b.find("#Head");$("#Head").html(c.children());$("#footer").html(b.find("#bottom"));a()},error:function(b){}})}else{a()}});var feedbacktype=0;$(function(){var c=$("#styleinfo").attr("name");var b=10;$(".hzcTitle li").click(function(){$(".hzcTitle li").removeClass();feedbacktype=$(this).index();if(feedbacktype==0){$(this).addClass("commonPL")}else{$(this).addClass("hzcHover");$(".hzcTitle li").eq(0).addClass("commonPL2")}a(1)});$("#pinglundetail").hover(function(){if($(".zwsBoxPl").length>0){$(".zwsBoxPl").show()}else{var d=$("<div class='zwsBoxPl'><div class=\"zwscondiv\"><ul><div style='text-align:center; margin-top:20px;'><img src=\"//i.vanclimg.com/logo/loading.gif\" /></div></ul></div></div>");$("#pinglundetail").after(d);$.get(this.name,function(e){d.remove();$("#pinglundetail").after($(e))})}},function(){$(".zwsBoxPl").hide()});function a(e,d){window.location.hash="anchorPinglun";window.location=window.location;$(".NewCommentDetail").html("<div style='text-align:center; margin-top:20px;'><img src=\"//i.vanclimg.com/logo/loading.gif\" /></div>");var f="";if(typeof(e)!="undefined"){f="/styles/AjaxStyleAssesses.aspx?styleId="+c+"&pageindex="+e+"&type="+feedbacktype+"&total="+$("#feedbackcount"+feedbacktype).text()+"&ispic=0"}if(typeof(d)!="undefined"){f=d.href+"&total="+$("#hidPlCount").val()}$.get(f,function(g){if($.trim($("#comments",g).html())==""){g="<div style='text-align:center;padding-top:10px;color:#999'>还没有最新的此类评论，<a href='#' id='nocomment' style='display:none;'><<返回全部评论</a></div>";$(".NewCommentDetail").html(g);$("#feedbackpagerarea").hide();return}$(".NewCommentDetail").html($("#comments",g).html());$("#feedbackpagerarea").html($("#page",g).html());$("#feedbackpagerarea").show()})}$("#styleAssessesPager ul li a").live("click",function(){a(1,this);return false});$("#nocomment").live("click",function(){$(".hzcTitle li:eq(0)").click();return false})});function search(f){var g=f;var k=0,j=10,d=0;if(g==undefined){g={};return}else{if(g.code!=null){}else{if(g.style!=null){}else{if(g.cates!=null){var i=$("#q").val().split(":");g.q=$("#q").val();if(i.length==1){g.change=i[0]}else{g[i[0]]=i[1]}$("#ct").attr("value","cates:"+g.cates);$(".keyword.keych").attr("class","keyword");$("#"+g.cates).addClass("keych")}else{if(g.type!=null){var i=$("#q").val().split(":");g.q=$("#q").val();if(i.length==1){g.change=i[0]}else{g[i[0]]=i[1]}$("#ct").attr("value","type:"+g.type);$("#"+g.type).addClass("choosed")}else{if(g.start!=null){var i=$("#q").val().split(":");g.q=$("#q").val();if(i.length==1){g.change=i[0]}else{g[i[0]]=i[1]}var b=$("#ct").val().split(":");g[b[0]]=b[1];if(g.cates!=null){$("#"+g.cates).addClass("keych")}if(g.type!=null){$("#"+g.type).addClass("choosed")}}}}}}}if(g.start==undefined){g.start=k}else{k=g.start}if(g.rows==undefined){g.rows=j}else{j=g.rows}if(g==undefined||(g.cates==null&&g.type==null)){$("#numFound").addClass("choosed")}var c=(g.cates==null)?false:true;var a="/styles/AjaxImpression";$.get(a,g,function(m,n,o){if(n=="success"){h(m)}else{if(n=="error"){alert("Error: "+o.status+": "+o.statusText)}}});function h(q){var m=jQuery.parseJSON(q);$.each(m,function(r,s){if(r.valueOf()=="responseHeader"){$.each(s,function(t,u){if(t.valueOf()=="params"){$.each(u,function(v,w){if(v.valueOf()=="start"){k=parseInt(w)}})}})}else{if(r.valueOf()=="response"){$.each(s,function(t,u){if(t.valueOf()=="docs"){n(u)}else{if(t.valueOf()=="numFound"){d=parseInt(u)}}})}else{if(r.valueOf()=="facet_counts"){$.each(s,function(t,u){if(t.valueOf()=="facet_queries"){$.each(u,function(v,w){p(v,w)})}else{if(t.valueOf()=="facet_fields"){$(".outline").html("");$.each(u,function(v,w){o(v,w)})}}})}}}});e(j,k,d);function p(r,s){}function n(t){$(".NewCommentDetail").html("");for(var s=0;s<t.length;s++){var r=$(l(t[s]));$(".NewCommentDetail").append(r);$(".NewCommentDetail").append($("<hr>"))}}function o(t,w){if(t.valueOf()=="good"){var u,r;var v;for(var s=0;s<w.length;s++){v=w[s].indexOf(")")+1;u=w[s].substring(0,v);r=w[s].substring(v);$(".outline").append("<a href=\"javascript:search({cates:'"+r+"'})\"><span id='"+r+"' class='keyword'><font color='#F9842A'>"+u+"</fon></span></a>")}}else{if(t.valueOf()=="bad"){var u,r,v;for(var s=0;s<w.length;s++){v=w[s].indexOf(")")+1;u=w[s].substring(0,v);r=w[s].substring(v);$(".outline").append("<a href=\"javascript:search({cates:'"+r+"'})\"><span id='"+r+"' class='keyword'><font color='#A1A1A1'>"+u+"</fon></span></a>")}}}}}function l(n){var r="<div class='doc'>";r+="<div class='time'>";r+=$.format.date(n.addtime,"yyyy/MM/dd HH:mm:ss");r+="</div><br/>";r+="[star:"+n.colligation+"]<br/>";r+="[said:"+n.said+"]<br/>";r+="[productcode:"+n.productcode+"]<br/>";if(c==true){var p=n.realpos;var m=n.content;for(var o=p.length-1;o>0;o-=2){var q=m.slice(p[o-1],p[o]);m=m.replace(q,"<font color='red'>"+q+"</font>")}r+=m}else{r+=n.content}r+="</div>";return r}function e(s,w,o){$("#paging").html("");var m=w/s+1;var r=Math.max(1,m-5);var q=Math.ceil(o/s);var v=Math.min(9,q-r);var p=r+v;var t=(m==1)?false:true;var u=(m>=p)?false:true;if(t){$("#paging").append("<a href='javascript:search({start:"+(w-s)+'});\'><span class="n">上一页</span></a>')}for(var n=r;n<=p;n++){if(m==n){$("#paging").append("<a href='javascript:search({start:"+((n-1)*s)+"});'><span class='pc curpage'>"+n+"</span></a>")}else{$("#paging").append("<a href='javascript:search({start:"+((n-1)*s)+'});\'><span class="pc">'+n+"</span></a>")}}if(u){$("#paging").append("<a href='javascript:search({start:"+(w+s)+'});\'><span class="n">下一页</span></a>')}$("#paging").append("<span id='total'>一共找到 "+o+"条结果 ,共"+q+"页.</span>")}}function load(b){var a=$("#base").val();$.get(a+"vancl/pc_show.txt",{limit:25},function(d,e,f){var c=jQuery.parseJSON(d);$.each(c,function(h,j){if(h.valueOf()=="pc"){for(var g=0;g<j.length;g++){$("#code_show").append("<a href=\"javascript:search({code:'"+j[g].toString()+"'})\">"+j[g]+"</a><br/>")}}})});$.get(a+"vancl/style_show.txt",{limit:25},function(d,e,f){var c=jQuery.parseJSON(d);$.each(c,function(h,j){if(h.valueOf()=="styleId"){for(var g=0;g<j.length;g++){$("#style_show").append('<a href="javascript:search({style:'+j[g].toString()+'})">'+j[g]+"</a><br/>")}}})})}function parse(a){$("#numFound").addClass("choosed");var e=10,f=0;$.each(a,function(g,h){if(g.valueOf()=="responseHeader"){$.each(h,function(i,j){if(i.valueOf()=="params"){$.each(j,function(k,l){if(k.valueOf()=="change"){$("#q").attr("value",l)}else{if(k.valueOf()=="code"){$("#q").attr("value","code:"+l)}else{if(k.valueOf()=="style"){$("#q").attr("value","style:"+l)}else{if(k.valueOf()=="start"){f=parseInt(l)}}}}})}})}else{if(g.valueOf()=="response"){$.each(h,function(i,j){if(i.valueOf()=="docs"){b(j)}else{if(i.valueOf()=="numFound"){numFound=parseInt(j)}}})}else{if(g.valueOf()=="facet_counts"){$.each(h,function(i,j){if(i.valueOf()=="facet_queries"){$.each(j,function(k,l){d(k,l)})}else{if(i.valueOf()=="facet_fields"){$(".outline").html("");$.each(j,function(k,l){c(k,l)})}}})}}}});paging(e,f,numFound);function d(g,h){$("#numFound").html("全部评论 ("+numFound+")");if(g.valueOf()=="colligation:[4 TO 5]"){$("#good").html("好评 ("+h+")")}else{if(g.valueOf()=="colligation:[2 TO 3]"){$("#medium").html("中评 ("+h+")")}else{if(g.valueOf()=="colligation:[* TO 1]"){$("#bad").html("差评 ("+h+")")}}}}function b(j){$(".docs").html("");for(var h=0;h<j.length;h++){var g=$(wrapdoc(j[h]));$(".docs").append(g);$(".docs").append($("<hr>"))}}function c(j,m){if(j.valueOf()=="good"){var k,g;var l;for(var h=0;h<m.length;h++){l=m[h].indexOf(")")+1;k=m[h].substring(0,l);g=m[h].substring(l);$(".outline").append("<a href=\"javascript:search({cates:'"+g+"'})\"><span id='"+g+"' class='keyword'><font color='#F9842A'>"+k+"</fon></span></a>")}}else{if(j.valueOf()=="bad"){var k,g,l;for(var h=0;h<m.length;h++){l=m[h].indexOf(")")+1;k=m[h].substring(0,l);g=m[h].substring(l);$(".outline").append("<a href=\"javascript:search({cates:'"+g+"'})\"><span id='"+g+"' class='keyword'><font color='#A1A1A1'>"+k+"</fon></span></a>")}}}}}function wrapdoc(a){var b="<div class='doc'>";b+="<div class='time'>";b+=$.format.date(a.addtime,"yyyy/MM/dd HH:mm:ss");b+="</div><br/>";b+="[star:"+a.colligation+"]<br/>";b+="[said:"+a.said+"]<br/>";b+="[productcode:"+a.productcode+"]<br/>";b+=a.content;b+="</div>";return b}function paging(g,l,c){$("#paging").html("");var a=l/g+1;var f=Math.max(1,a-5);var e=Math.ceil(c/g);var k=Math.min(9,e-f);var d=f+k;var h=(a==1)?false:true;var j=(a>=d)?false:true;if(h){$("#paging").append("<a href='javascript:search({start:"+(l-g)+'});\'><span class="n">上一页</span></a>')}for(var b=f;b<=d;b++){if(a==b){$("#paging").append("<a href='javascript:search({start:"+((b-1)*g)+"});'><span class='pc curpage'>"+b+"</span></a>")}else{$("#paging").append("<a href='javascript:search({start:"+((b-1)*g)+'});\'><span class="pc">'+b+"</span></a>")}}if(j){$("#paging").append("<a href='javascript:search({start:"+(l+g)+'});\'><span class="n">下一页</span></a>')}$("#paging").append("<span id='total'>一共找到 "+c+"条结果 ,共"+e+"页.</span>")}(function(c){var a=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];var e=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];var d=["January","February","March","April","May","June","July","August","September","October","November","December"];var f={Jan:"01",Feb:"02",Mar:"03",Apr:"04",May:"05",Jun:"06",Jul:"07",Aug:"08",Sep:"09",Oct:"10",Nov:"11",Dec:"12"};var g,h,i,b;c.format=(function(){function n(q){return a[parseInt(q,10)]||q}function p(r){var q=parseInt(r,10)-1;return e[q]||r}function o(r){var q=parseInt(r,10)-1;return d[q]||r}var l=function(q){return f[q]||q};var m=function(t){var s=t;var r="";if(s.indexOf(".")!==-1){var q=s.split(".");s=q[0];r=q[1]}i=s.split(":");if(i.length===3){b=i[0];minute=i[1];second=i[2];return{time:s,hour:b,minute:minute,second:second,millis:r}}else{return{time:"",hour:"",minute:"",second:"",millis:""}}};var k=function(t,r){var s=r-String(t).length;for(var q=0;q<s;q++){t="0"+t}return t};var j=function(){return(/\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}\.?\d{0,3}[Z\-+]?(\d{2}:?\d{2})?/)};return{date:function(D,v){try{var r=null;var E=null;var y=null;var s=null;var t=null;var B=null;if(typeof D=="number"){return this.date(new Date(D),v)}else{if(typeof D.getFullYear=="function"){E=D.getFullYear();y=D.getMonth()+1;s=D.getDate();t=D.getDay();B=m(D.toTimeString())}else{if(D.search(j())!=-1){g=D.split(/[T\+-]/);E=g[0];y=g[1];s=g[2];B=m(g[3].split(".")[0]);r=new Date(E,y-1,s);t=r.getDay()}else{g=D.split(" ");switch(g.length){case 6:E=g[5];y=l(g[1]);s=g[2];B=m(g[3]);r=new Date(E,y-1,s);t=r.getDay();break;case 2:h=g[0].split("-");E=h[0];y=h[1];s=h[2];B=m(g[1]);r=new Date(E,y-1,s);t=r.getDay();break;case 7:case 9:case 10:E=g[3];y=l(g[1]);s=g[2];B=m(g[4]);r=new Date(E,y-1,s);t=r.getDay();break;case 1:h=g[0].split("");E=h[0]+h[1]+h[2]+h[3];y=h[5]+h[6];s=h[8]+h[9];B=m(h[13]+h[14]+h[15]+h[16]+h[17]+h[18]+h[19]+h[20]);r=new Date(E,y-1,s);t=r.getDay();break;default:return D}}}}var z="";var A="";var C="";var x=false;for(var w=0;w<v.length;w++){var q=v.charAt(w);if(x){if(q=="'"){A+=(z==="")?"'":z;z="";x=false}else{z+=q}continue}z+=q;C="";switch(z){case"ddd":A+=n(t);z="";break;case"dd":if(v.charAt(w+1)=="d"){break}A+=k(s,2);z="";break;case"d":if(v.charAt(w+1)=="d"){break}A+=parseInt(s,10);z="";break;case"D":if(s==1||s==21||s==31){s=parseInt(s,10)+"st"}else{if(s==2||s==22){s=parseInt(s,10)+"nd"}else{if(s==3||s==23){s=parseInt(s,10)+"rd"}else{s=parseInt(s,10)+"th"}}}A+=s;z="";break;case"MMMM":A+=o(y);z="";break;case"MMM":if(v.charAt(w+1)==="M"){break}A+=p(y);z="";break;case"MM":if(v.charAt(w+1)=="M"){break}A+=k(y,2);z="";break;case"M":if(v.charAt(w+1)=="M"){break}A+=parseInt(y,10);z="";break;case"y":case"yyy":if(v.charAt(w+1)=="y"){break}A+=z;z="";break;case"yy":if(v.charAt(w+1)=="y"&&v.charAt(w+2)=="y"){break}A+=String(E).slice(-2);z="";break;case"yyyy":A+=E;z="";break;case"HH":A+=k(B.hour,2);z="";break;case"H":if(v.charAt(w+1)=="H"){break}A+=parseInt(B.hour,10);z="";break;case"hh":b=(B.hour===0?12:B.hour<13?B.hour:B.hour-12);A+=k(b,2);z="";break;case"h":if(v.charAt(w+1)==="h"){break}b=(B.hour===0?12:B.hour<13?B.hour:B.hour-12);A+=parseInt(b,10);z="";break;case"mm":A+=k(B.minute,2);z="";break;case"m":if(v.charAt(w+1)=="m"){break}A+=B.minute;z="";break;case"ss":A+=k(B.second.substring(0,2),2);z="";break;case"s":if(v.charAt(w+1)=="s"){break}A+=B.second;z="";break;case"S":case"SS":if(v.charAt(w+1)=="S"){break}A+=z;z="";break;case"SSS":A+=B.millis.substring(0,3);z="";break;case"a":A+=B.hour>=12?"PM":"AM";z="";break;case"p":A+=B.hour>=12?"p.m.":"a.m.";z="";break;case"'":z="";x=true;break;default:A+=q;z="";break}}A+=C;return A}catch(u){return D}},prettyDate:function(t){var q;var s;var r;if(typeof t==="string"||typeof t==="number"){q=new Date(t)}if(typeof t==="object"){q=new Date(t.toString())}s=(((new Date()).getTime()-q.getTime())/1000);r=Math.floor(s/86400);if(isNaN(r)||r<0){return}if(s<60){return"just now"}else{if(s<120){return"1 minute ago"}else{if(s<3600){return Math.floor(s/60)+" minutes ago"}else{if(s<7200){return"1 hour ago"}else{if(s<86400){return Math.floor(s/3600)+" hours ago"}else{if(r===1){return"Yesterday"}else{if(r<7){return r+" days ago"}else{if(r<31){return Math.ceil(r/7)+" weeks ago"}else{if(r>=31){return"more than 5 weeks ago"}}}}}}}}}},toBrowserTimeZone:function(r,q){return this.date(new Date(r),q||"MM/dd/yyyy HH:mm:ss")}}}())}(jQuery));jQuery.format.date.defaultShortDateFormat="dd/MM/yyyy";jQuery.format.date.defaultLongDateFormat="dd/MM/yyyy HH:mm:ss";jQuery(document).ready(function(){jQuery(".shortDateFormat").each(function(b,a){if(jQuery(a).is(":input")){jQuery(a).val(jQuery.format.date(jQuery(a).val(),jQuery.format.date.defaultShortDateFormat))}else{jQuery(a).text(jQuery.format.date(jQuery(a).text(),jQuery.format.date.defaultShortDateFormat))}});jQuery(".longDateFormat").each(function(b,a){if(jQuery(a).is(":input")){jQuery(a).val(jQuery.format.date(jQuery(a).val(),jQuery.format.date.defaultLongDateFormat))}else{jQuery(a).text(jQuery.format.date(jQuery(a).text(),jQuery.format.date.defaultLongDateFormat))}})});$(function(){var c=$("#styleinfo").attr("name");var b=5;$(".myAsk a").live("click",function(){var d=$(this);ajaxIsLogined(function(){if(!isLogined){$.fn.alert("此操作需要登录，您现在要登录吗？",function(e){if(e){location.href="https://login.vancl.com/login/login.aspx?"+location.href}},{type:2})}else{$.fn.popwindow({href:d.attr("href"),width:"821px",height:"470px",title:"我要回答"})}});return false});function a(e,d){window.location.hash="anchorQuiz";window.location=window.location;var g="";if(e!="undefined"){g="styles/AjaxStyleQuestions.aspx?styleId="+c+"&pageindex="+e+"&orderType="+$("#questionOrderType").val()}if(typeof(d)!="undefined"){g=d.href+"&orderType="+$("#questionOrderType").val()}var f=$(".area3[name]").attr("name");if(f){g=g+"&totalcount="+f}$("#stylequestionslist").html("<div style='text-align:center'><img src=\"//i.vanclimg.com/logo/loading.gif\" /></div>");$.get(g,function(h){$("#stylequestionslist").html($("#quiz",h));$("#stylequestionsPager").html($("#page",h))})}$("#stylequestionsPager ul li a").live("click",function(){a(1,this);return false});$("#questionOrderType").change(function(){a(1)});$(".sizeList table tr:first td").each(function(d){$(this).addClass("col0"+(d+1))})});$(function(){$(".showfile").live("click",function(){var a=$(this).closest(".plConr,.area3Con").find(".notesNewpl");a.find(".pl0727Hfk").remove();if(a.css("display")=="none"){$(this).closest(".root").find(".notesNewpl").hide()}if($.trim(a.html())==""){$.ajax({url:$(this).attr("href"),dataType:"html"}).success(function(b){a.html(b);a.toggle("normal")}).error(function(b){$.fn.alert(b)})}else{a.toggle("normal")}if(!window.replyfunction){$.getScript("http://jsy.vanclimg.com/item/reply.js?v=20130305")}return false});$(".new-btn a, .new-btn").removeAttr("onclick").live("click",function(){var a=$(this).find("span");var b=$(this).attr("href");if(b==""){$.fn.alert("您已经投过票了。");return false}ajaxIsLogined(function(){if(isLogined==false){openLoginDiv("CommentVote('"+escape(escape(b))+"')");return false}CommentVote(b)});return false})});var smallImgData=[];smallImgData.downHover={direction:1,target:"last-child",className:"downer",visible:function(){var a=$("#imageMenu");if(a.length==1){return a.scrollTop()+a.height()==a.get(0).scrollHeight}else{return false}},span:function(a){return a.position().top},scrollSpan:function(a){return a.scrollTop()},animateParam:function(a){return{scrollTop:a}}};smallImgData.upHover={direction:-1,target:"first",className:"upper",visible:function(){return $("#imageMenu").scrollTop()==0},span:function(a){return a.position().top},scrollSpan:function(a){return a.scrollTop()},animateParam:function(a){return{scrollTop:a}}};function checkMenuStatus(){for(key in smallImgData){if(smallImgData[key]!=undefined&&typeof(smallImgData[key].visible)!="undefined"&&smallImgData[key].visible()){$("."+key).removeClass(key).addClass(smallImgData[key].className)}else{$("."+smallImgData[key].className).addClass(key).removeClass(smallImgData[key].className)}}}$(function(){$(".smallImgDown,.smallImgUp").live("click",function(){var b=$(this).attr("class");if(b.indexOf("downHover")>-1){b="downHover"}if(b.indexOf("upHover")>-1){b="upHover"}if(b=="downHover"||b=="upHover"){var d=smallImgData[b];var e=0;while(d.span($("#imageMenu"))>d.span($("#imageMenu li").eq(e))){e++}e+=5*d.direction;var a=$("#imageMenu li").eq(e);if(a.length==0||e<0){a=$("#imageMenu li:"+d.target)}var c=d.scrollSpan($("#imageMenu"))+d.span(a)-d.span($("#imageMenu"));$("#imageMenu").animate(d.animateParam(c),500,checkMenuStatus)}})});