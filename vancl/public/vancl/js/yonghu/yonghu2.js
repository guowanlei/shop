(function(a, c, b) { a(function() { var e = vancl.dialog.alert,
			m = a("#content .wrapper"),
			d = a("#addr"),
			f = a("#delivery"),
			j = a("#pay"),
			g = a("#gift-card"),
			l = a("#virtual-account"),
			i = a("#order-info-panel"); var k = { tipStr: "提示", sureTxt: "确定删除", cancelTxt: "取消", delTips: "您要删除该地址吗？", defaultMsg: "好像出现了点小意外，请您稍后再试一次，或者请您与客服坐席400-650-7099联系。", addrMsg: "请选择一个地址！", defaultPostalCodeTxt: "参考邮编：", defaultAreaCodeTxt: "参考区号：", tmpWarn: "请先确认", addrWarn: "“收货地址”", deliveryWarn: "“配送方式”", payWarn: "“支付方式”", invioceWarn: "“发票信息”", submitOrderLoadingTxt: "正在提交订单...", GATarr: ["香港", "澳门", "台湾"], TaiWanArr: ["台湾"], constTen: 10, constEleven: 11, constTwenty: 20, constThirty: 30, constFifty: 50, constOneHundred: 100, constTwoHundred: 200, constFiveHundred: 500, addresseeLengthError: "收货人姓名过长，请您最多输入20个字符。", addrDetailLengthError: "详细地址过长，请您最多输入100个字符。", invoiceTitleLengthError: "发票抬头过长，请您最多输入50个字符", fFirstNameLengthError: "最多输入200个英语字符。", fLastNameLengthError: "最多输入200个英语字符。", fFirstAddrLengthError: "收货地址1填写过长，请您最多输入500个英语字符。", fSecondAddrLengthError: "收货地址2填写过长，请您最多输入500个英语字符。", fCityLengthError: "城市填写过长，请您最多输入200个英语字符。", fStateLengthError: "州/省/地区填写过长，请您最多输入200个英语字符。", fPostalCodeLengthError: "邮政编码填写过长，请您最多输入30个英语字符。", mobilePhoneLengthError: "手机号码必须11位", fPhoneLengthError: "电话号码填写过长，请您最多输入20个英语字符。", illegalStrError: "包含非法字符，请重新输入。", invoiceStrError: "您选择了需要发票，请填写发票抬头。", invoiceTaxNoError: "您的发票税务登记号错误，请您重新核对一下。", verifyCodeRequiredError: "请输入答案", submitOrderSevenDays: "您的订单中部分商品不支持7天无理由退换货，请确认是否全部购买？", submitOrderOverSea: "您的订单中包含海外购商品，请确认是否全部购买？", optHtml: "<option value='#val#'>#txt#</option>", tipHtml: '<div class="order-tip">   <div class="order-tip-text">       <p>           #txt#</p>   </div>   <span class="order-tip-close"></span></div>', PaypwdUnOpened: '您尚未开启支付密码，请您<lable><a id="open-password" href="http://my.vancl.com/SafeCenter" target="_blank">开启支付密码</a></lable>', PaypwdLocked: '支付密码已被锁定，建议您通过<lable><a id="open-password" href="http://my.vancl.com/SafeCenter" target="_blank">找回支付密码</a></lable> ，进行密码重置。', PaypwdRetryFourTimes: '支付密码输入错误，您还可以尝试输入4次，或者通过<lable><a id="open-password" href="http://my.vancl.com/SafeCenter" target="_blank">找回支付密码</a></lable> ，进行密码重置。', PaypwdRetryThreeTimes: '支付密码输入错误，您还可以尝试输入3次，或者通过<lable><a id="open-password" href="http://my.vancl.com/SafeCenter" target="_blank">找回支付密码</a></lable> ，进行密码重置。', PaypwdRetryTwoTimes: '支付密码输入错误，您还可以尝试输入2次，或者通过<lable><a id="open-password" href="http://my.vancl.com/SafeCenter" target="_blank">找回支付密码</a></lable> ，进行密码重置。', PaypwdRetryOneTime: '支付密码输入错误，您还可以尝试输入1次，或者通过<lable><a id="open-password" href="http://my.vancl.com/SafeCenter" target="_blank">找回支付密码</a></lable> ，进行密码重置。', modalLoadHtml: "<span class='modal-loading'></span>", addrRadioHtml: '<input type="radio" id="hidden-addr" checked="checked" name="AddressId" value="#val#" />', setUserDefAddrTipHtml: "<span class='user-def-addr-tip'>默认收货地址</span><span class='set-user-def-success'>设置成功</span>", setUserDefAddrFailHtml: "<span class='set-user-def-fail'>设置失败</span>", setUserDefAddrLoadingHtml: "<span class='set-user-def-loading'></span>", allPayByVirtualAccountHtml: '<input type="radio" name="identifier" checked="checked" class="hidden" value="06$-1$false" />', areaInfoUrl: "/checkout/areainfo", deliveryUrl: "/checkout/delivery", payUrl: "/checkout/payment", giftCardUrl: "checkout/GiftCard", virtualAccountUrl: "checkout/VirtualAccount", getOrderInfoUrl: "/checkout/orderinfo", cancelVirtualAccountUrl: "/checkout/cancelvirtualaccount", setSplitTypeUrl: "/checkout/setsplittype", nextPageTagaHtml: "<a title='下一页' class='addr-next' style='bottom:1px' href='/checkout/ShowAddressList?pageindex=3&amp;isForeign=false'></a>", nextPageTagSpanHtml: "<span title='下一页' class='addr-next' style='bottom:1px'></span>" }; var h = { isSupportPlaceHolder: function() { return "placeholder" in document.createElement("input") }, placeholder: function() { a(".wrapper :input[placeholder]").each(function() { var n = a(this),
						o = n.val(); if(!h.isSupportPlaceHolder() && n.val() == "") { n.val(n.attr("placeholder")) } if(o != "" && o != n.attr("placeholder")) { n.removeClass("place-holder") } }) }, go2TopWithAnimate: function() { this.go2WithAnimate(0) }, go2WithAnimate: function(o) { try { a("html,body").animate({ scrollTop: o }, 1000) } catch(n) { a(c).scrollTop(o) } }, setmodalLoadTip: function(o, n) { if(o.length > 0) { if(typeof n === "undefined") { o.empty().append(k.modalLoadHtml) } else { if(typeof n === "string") { o.empty().append(n) } } } }, showOrderTips: function() { var n = a("#all-tips").data("tips"); if(n instanceof Array) { var o = new stringBuilder();
					a.each(n, function(p, q) { o.append(k.tipHtml.replace(/#txt#/gi, q)) });
					a("#content .wrapper div.order-tip").remove();
					m.find("#submit-order-form .order-submit").after(o.toString());
					a(".order-tip").slideDown() } }, setRowBg: function(n) { n.find("tbody>tr:visible").removeClass("even").filter(":odd").addClass("even") }, valid: function(o, n) { if(typeof o === "string") { return true } var q, p, s, r; if(o !== null && typeof o === "object") { q = o.Title;
					p = o.Content;
					s = o.LinkUrl;
					r = o.Type } if(r == "Authorize") { if(s && (document.location.protocol + "//" + document.location.host + s) !== location.href) { location.href = s } } else { if(r == "Redirect") { location.href = s } else { switch(r) {
							case "PaypwdUnOpened":
								p = k.PaypwdUnOpened; break;
							case "PaypwdLocked":
								p = k.PaypwdLocked; break;
							case "PaypwdRetryFourTimes":
								p = k.PaypwdRetryFourTimes; break;
							case "PaypwdRetryThreeTimes":
								p = k.PaypwdRetryThreeTimes; break;
							case "PaypwdRetryTwoTimes":
								p = k.PaypwdRetryTwoTimes; break;
							case "PaypwdRetryOneTime":
								p = k.PaypwdRetryOneTime; break;
							default:
								break } e({ title: q || k.tipStr, msg: p || k.defaultMsg, fn: function() { a(this).dialog("close"); if(typeof n === "function") { n(); return } if(s && (document.location.protocol + "//" + document.location.host + s) !== location.href) { location.href = s } } }) } } return false }, required: function(o, n) { var s = o[0].nodeName.toLowerCase(); switch(s) {
					case "select":
						var u = o.val(); if(!n) { return u && u.length > 0 } else { return n != u }
					case "input":
						var t = o.attr("type"); if(t === "radio" || t === "checkbox") { var r = o.attr("name"); var p = a("[name=" + r + "]"); var q = false;
							p.each(function(v) { if(a(this).is(":checked")) { q = true; return false } }); return q } else { return n ? a.trim(o.val()) != n : a.trim(o.val()).length > 0 }
					default:
						return n ? a.trim(o.val()) != n : a.trim(o.val()).length > 0 } }, scriptInjection: function(n) { var o = n[0].nodeName.toLowerCase(); switch(o) {
					case "input":
					case "textarea":
						var p = n.attr("type"); if(p !== "radio" || p !== "checkbox") { return /^([^<>]+)?$/.test(n.val()) }
					default:
						return true } }, illegalChar: function(n) { var o = n[0].nodeName.toLowerCase(); switch(o) {
					case "input":
					case "textarea":
						var q = n.attr("type"); if(q !== "radio" || q !== "checkbox") { var p = /^[\u4E00-\u9FA5]|\w*$/; return p.test(n.val()) }
					default:
						return true } }, setIllegalCharError: function(n) { if(this.illegalChar(n)) { this.hideError(n); return true } else { this.showError(n, k.illegalStrError); return false } }, setIllegalStrError: function(n) { if(this.scriptInjection(n)) { this.hideError(n); return true } else { this.showError(n, k.illegalStrError); return false } }, telePhone: function(n) { return /^((\d{3,4})\-{0,1}){0,1}(\d{7,8})(\-{0,1}\d{1,6}){0,1}$/.test(n.val()) }, mobilePhone: function(n) { return /^((13|15|18|14|17)\d{9})$/.test(n.val()) }, taxNo4Company: function(n) { return /^\d{6}(([0-9a-zA-Z]){9}|([0-9a-zA-Z]){12})$/.test(n.val()) }, taxNo4IndividualBusiness: function(n) { return /(^\d{15}[0]{5}$)|(^\d{17}[\dxX]{1}(||\d{2})$)/.test(n.val()) }, taxNo4Foreign: function(n) { return /^[a-zA-Z]{1}\d{10}$/.test(n.val()) }, isContain: function(o, n) { if(typeof o === "string" && n instanceof Array) { for(index in n) { if(o.indexOf(n[index]) > -1) { return true } } return false } else { a.error("参数错误，函数名isContain,参数个数或类型错误。") } }, isContainGAT: function(n) { return this.isContain(n, k.GATarr) }, isContainTaiWan: function(n) { return this.isContain(n, k.TaiWanArr) }, maxLength: function(n, o) { return a.trim(n.val()).length <= o }, equalTo: function(n, o) { return a.trim(n.val()).length === o }, setLengthError: function(n, p, o) { if(this.maxLength(n, p)) { this.hideError(n) } else { this.showError(n, o) } }, setInlandMobileLengthError: function(n, p, o) { if(this.equalTo(n, p)) { this.hideError(n); return true } else { this.showError(n, o); return false } }, digits: function(n) { return /^\d+$/.test(n.val()) }, postalCode: function(n) { return /^\d{6}$/.test(n.val()) }, postalCodeTaiWan: function(n) { return /^\d{5,}$/.test(n.val()) }, showError: function(n, o) { if(typeof o === "string") { n.nextAll(".error:eq(0)").text(o) } if(a.browser.msie && (a.browser.version == "6.0")) { n.nextAll(".error:eq(0)").addClass("error-ie6").css("margin-left", "2px").show() } else { n.nextAll(".error:eq(0)").show() } }, hideError: function(n) { n.nextAll(".error:eq(0)").hide() }, hasAddrOrDelivery: function(n) { return n.find(".no-addr-or-delivery-error").length > 0 ? true : false }, addrChange: function() { this.getDelivery(k.deliveryUrl); if(this.hasAddrOrDelivery(g)) { this.getGiftCard(k.giftCardUrl) } if(this.hasAddrOrDelivery(l)) { this.getVirtualAccount(k.virtualAccountUrl) } this.getOrderInfo() }, deliveryChange: function() { this.getPay(k.payUrl); if(this.hasAddrOrDelivery(g)) { this.getGiftCard(k.giftCardUrl) } if(this.hasAddrOrDelivery(l)) { this.getVirtualAccount(k.virtualAccountUrl) } this.getOrderInfo() }, giftCardChange: function() { if(l.find(".balance-relief").length > 0) { this.getVirtualAccount(k.virtualAccountUrl) } this.getOrderInfo() }, virtualAccountChange: function() { this.getOrderInfo() }, getCityByProvince: function(n) { var o = a("#province-in-detail");
				a("#city-in-detail").text("");
				a("#area-in-detail").text(""); if(n != "") { var p = k.areaInfoUrl + "?province=" + n;
					o.text(a("#province-id").children(":selected").text() + ",");
					o.removeClass("zeromargin");
					a("#city-in-detail").removeClass("zeromargin");
					a("#area-in-detail").removeClass("zeromargin") } else { a("#city-id").children(":gt(0)").remove();
					a("#area-id").children(":gt(0)").remove();
					o.text("");
					o.addClass("zeromargin");
					a("#city-in-detail").addClass("zeromargin");
					a("#area-in-detail").addClass("zeromargin"); return } a.ajax({ type: "GET", url: p, beforeSend: function() {}, success: function(q) { var r = new stringBuilder();
						a.each(q, function(v, w) { var s = w.split(","),
								u = s[0],
								t = s[1];
							r.append(k.optHtml.replace(/#val#/gi, u).replace(/#txt#/gi, t)) });
						a("#city-id").children(":gt(0)").remove();
						a("#city-id").append(r.toString());
						a("#area-id").children(":gt(0)").remove() } }) }, getAreaByPC: function(p, n) { var o = a("#city-in-detail");
				a("#area-in-detail").text(""); if(p !== "" && n !== "") { var q = k.areaInfoUrl + "?province=" + p + "&city=" + n;
					o.text(a("#city-id").children(":selected").text() + ",") } else { a("#area-id").children(":gt(0)").remove();
					o.text(""); return } a.ajax({ type: "GET", url: q, beforeSend: function() {}, success: function(r) { var s = new stringBuilder();
						a.each(r, function(w, x) { var t = x.split(","),
								v = t[0],
								u = t[1];
							s.append(k.optHtml.replace(/#val#/gi, v).replace(/#txt#/gi, u)) });
						a("#area-id").children(":gt(0)").remove();
						a("#area-id").append(s.toString()) } }) }, getPostalCodeAndAreaCodeByPCA: function(t, p, n, q) { var o = a("#area-in-detail"),
					s = a("#default-postal-code"),
					w = a("#use-postal-code"),
					r = a("#default-area-code"),
					v = a("#use-area-code"); if(t !== "" && p !== "" && n !== "") { var u = k.areaInfoUrl + "?province=" + t + "&city=" + p + "&area=" + n;
					o.text(a("#area-id").children(":selected").text() + ",") } else { s.data("postal-code", "").text("").hide();
					w.hide();
					r.data("area-code", "").text("").hide();
					v.hide();
					o.text(""); return } a.ajax({ type: "GET", url: u, beforeSend: function() {}, success: function(y) { var z = y.PostalCode,
							x = y.AreaCode;
						s.data("postal-code", z).text(k.defaultPostalCodeTxt + z).show();
						w.show();
						r.data("area-code", x).text(k.defaultAreaCodeTxt + x).show();
						v.show() } }) }, setUserChooseAddr: function() { var n = a("#modify-addr-form table"); var o = n.find("input[name='AddressId']"),
					q = d.data("selected-addr-val"),
					p = o.filter("[value=" + q + "]"); var r = a("div.addr-list tr[class^='addr-selected']"); if(r.size() > 0 && r.find(":radio").val() != q && p.length > 0) { r.removeClass("addr-selected").removeClass("user-def-addr");
					r.find(":radio").attr("checked", false) } if(p.length == 1) { p.attr("checked", true);
					p.closest("tr").addClass("user-def-addr addr-selected") } else { if(typeof q === "string") { o.attr("checked", false);
						r.removeClass("addr-selected").removeClass("user-def-addr");
						o.eq(0).parent().append(k.addrRadioHtml.replace(/#val#/, q)) } } }, setAddrListTrBg: function() { var n = d.children("section:not(.inland-addr) table");
				h.setRowBg(n) }, setGiftCardTrBg: function() { var n = a("#gift-card-list table");
				h.setRowBg(n) }, expandAddrList: function(o, n) { a.ajax({ type: "GET", url: o, beforeSend: function() { h.setmodalLoadTip(d.find("section")) }, success: function(p) { if(h.valid(p)) { d.html(p);
							h.setAddrListTrBg(); if(a.browser.msie && (a.browser.version == "6.0")) { if(o.indexOf("true") < 0) { a("#modify-addr-form .save-addr").addClass(".save-addr-inland-ie6") } else { a("#modify-addr-form .save-addr").addClass(".save-addr-foreign-ie6") } } } } }) }, getAddrListByPage: function(o) { var p = o.attr("href"),
					n = d.find(".addr-list");
				a.ajax({ type: "GET", url: p, beforeSend: function() { h.setmodalLoadTip(n) }, success: function(q) { if(h.valid(q)) { n.html(q);
							h.setAddrListTrBg();
							h.setUserChooseAddr() } } }) }, getDefaultAddr: function(n) { var o = n.attr("href");
				a.ajax({ type: "GET", url: o, beforeSend: function() { h.setmodalLoadTip(d.find("section")) }, success: function(p) { if(h.valid(p)) { d.html(p);
							a("a.close-addr").hide() } } }) }, getAddrForm: function(r) { var s = r.attr("href"); if(typeof s !== "string") { s = r.data("url") } var p = vancl.getUrlValByName(s, "isforeign"); var o = vancl.getUrlValByName(s, "addressid"); var q = p === "false" && typeof o === "string"; if(q) { d.find(".edit-addr-panel td").empty() } var n = d.find(".addr-form");
				a.ajax({ type: "GET", url: s, beforeSend: function() { h.setmodalLoadTip(n) }, success: function(u) { if(h.valid(u)) { n.html(u);
							n.append("<a class='list_inland-cancel-edit'>X</a>");
							n.find(".list_inland-cancel-edit").show();
							d.find(".save-addr").hide();
							h.placeholder(); if(a("a.addr-next").size() == 0) { if(a("span.addr-next").size() > 0) { a("span.addr-next").remove();
									a(k.nextPageTagSpanHtml).appendTo(a("div.addr-list")) } } else { var t = a("a.addr-next").attr("href");
								a("a.addr-next").remove();
								a(k.nextPageTagaHtml).attr("href", t).appendTo(a("div.addr-list")) } a(".go-other-nation").hide() } } }) }, setUserDefAddr: function(n) { var o = n.attr("href") + "&IsAsyn=true";
				a.ajax({ type: "GET", url: o, beforeSend: function() { n.after(k.setUserDefAddrLoadingHtml) }, success: function(p) { n.hide(); var q = n.parent();
						q.find(".set-user-def-loading").remove(); if(p.isSuccess = true) { var r = n.closest("tbody");
							r.find(".user-def-addr").removeClass("user-def-addr");
							r.find(".user-def-addr-tip,.set-user-def-success,.set-user-def-fail").remove();
							n.closest("tr").addClass("user-def-addr");
							q.append(k.setUserDefAddrTipHtml);
							setTimeout(function() { a("span.set-user-def-success", q).remove() }, 1000) } else { n.after(k.setUserDefAddrFailHtml) } } }) }, delAddr: function(n) { var o = n.attr("href");
				a.ajax({ type: "GET", url: o, beforeSend: function() {}, success: function(p) { if(h.valid(p)) { d.html(p);
							h.setAddrListTrBg();
							h.setUserChooseAddr() } } }) }, preventSubmitPlaceholderVal: function(n) { n.find(":input[placeholder]").each(function() { var o = a(this); if(o.val() === o.attr("placeholder")) { o.val("") } }) }, modifyDefaultAddr: function(n) { this.preventSubmitPlaceholderVal(n); var o = n.serialize(),
					p = n.attr("action") + "?" + o;
				a.ajax({ type: "GET", url: p, beforeSend: function() { c.orderConfirm.setmodalLoadTip(a("#addr").find("section")) }, success: function(q) { if(h.valid(q)) { d.html(q);
							h.changeReHieght();
							h.addrChange();
							h.go2TopWithAnimate(); if(a(".addr-list tr").hasClass("addr-selected")) { a("#addr h3").attr("data-has-addr", "true") } } } }) }, saveNewAddr: function(n) { var p = n.find(":submit"); if(p.hasClass("save-new-addr-loading")) { return } p.addClass("save-new-addr-loading");
				this.preventSubmitPlaceholderVal(n); var o; if(n.is("form")) { o = n.serialize() } else { o = n.find(":input").serialize() } if(a("#IdCard").hasClass("EditIdCard")) { o += "&EditIdCard=true" } else { if(a("#IdCard").hasClass("AuthBefore")) { o += "&EditIdCard=false" } } var r = n.attr("action"),
					q = n.attr("method");
				a.ajax({ type: q, url: r, data: o, beforeSend: function() {}, error: function() { p.removeClass("save-new-addr-loading") }, success: function(s) { if(h.valid(s)) { d.html(s);
							h.changeReHieght();
							h.addrChange();
							h.go2TopWithAnimate();
							p.removeClass("save-new-addr-loading");
							a(".shade").hide();
							a(".addr-form").hide() } } }) }, changeReHieght: function() { if(a("#virtual-account").length > 0 && a("#points").length > 0 && a("#gift-card").length > 0) { if(!a(".add-addr-more-cancel").is("div")) { a("#points").css("top", 650);
						a("#gift-card").css("top", 721) } if(a(".gift-card-form").is("div")) { if(!a(".gift-card-form-panel").is(":hidden")) { if(!a(".virtual-account-panel").is("div")) { a(".pay-title").css({ height: "550px", "line-height": "550px" }); if(a.browser.msie) { var o = a.browser.version; if(o == "7.0" || o == "6.0") { a("#virtual-account").css("top", (0 - 410) + "px") } } else { a("#virtual-account").css("top", (0 - 410) + "px") } } else { a(".pay-title").css({ height: "630px", "line-height": "630px" });
								a("#virtual-account").css("top", (0 - 410) + "px") } } else { if(!a(".virtual-account-panel").is("div")) { a(".pay-title").css("cssText", "height:" + 330 + "px ;line-height:" + 330 + "px"); if(a.browser.msie) { var o = a.browser.version; if(o == "7.0" || o == "6.0") { a("#virtual-account").css("top", (0 - 190) + "px") } else { a("#virtual-account").css("top", (0 - 190) + "px") } } else { a("#virtual-account").css("top", (0 - 190) + "px") } } else { a(".pay-title").removeAttr("style");
								a("#virtual-account").removeAttr("style") } } } else { if(!a(".virtual-account-panel").is("div")) { a(".pay-title").css("cssText", "height:" + 330 + "px ;line-height:" + 330 + "px");
							a("#virtual-account").css("top", (0 - 190) + "px") } else { a(".pay-title").css("cssText", "height:" + 350 + "px ;line-height:" + 350 + "px");
							a("#virtual-account").removeAttr("style") } } } else { if(a("#virtual-account").length == 0) { if(a("#points").length == 0) { if(a("#gift-card").length == 0) { a(".pay-title").css({ height: "170px", "line-height": "170px" }) } else { if(a(".gift-card-form-panel").length > 0 && !a(".gift-card-form-panel").is(":hidden")) { a(".pay-title").css({ height: "500px", "line-height": "500px" }) } else { a(".pay-title").css({ height: "250px", "line-height": "250px" }) } if(a(".add-addr-more-cancel").is("div")) { var n = a("#addr").height() + a("#delivery").height() + a("#pay-form").height() + 22;
									a("#gift-card").css("top", n - 20 + "px") } else { a("#gift-card").css("top", 630) } } } else { if(a("#gift-card").length == 0) { a(".pay-title").css({ height: "200px", "line-height": "200px" });
								a("#points").css("top", 610) } else { if(a(".gift-card-form-panel").length > 0 && !a(".gift-card-form-panel").is(":hidden")) { a(".pay-title").css({ height: "500px", "line-height": "500px" }) } else { a(".pay-title").css({ height: "300px", "line-height": "300px" }) } a("#points").css("top", 610); if(a(".add-addr-more-cancel").is("div")) { var n = a("#addr").height() + a("#delivery").height() + a("#pay-form").height() + 22;
									a("#gift-card").css("top", n + 40 + "px") } else { a("#gift-card").css("top", 680) } } } } else { if(a("#points").length == 0) { if(a("#gift-card").length == 0) { a(".pay-title").css({ height: "170px", "line-height": "170px" });
								a("#virtual-account").css("top", (0 - 30) + "px") } else { if(a(".gift-card-form-panel").length > 0 && !a(".gift-card-form-panel").is(":hidden")) { a(".pay-title").css({ height: "500px", "line-height": "500px" });
									a("#virtual-account").css("top", (0 - 360) + "px") } else { a(".pay-title").css({ height: "270px", "line-height": "270px" });
									a("#virtual-account").css("top", (0 - 130) + "px") } if(a(".add-addr-more-cancel").is("div")) { var n = a("#addr").height() + a("#delivery").height() + a("#pay-form").height() + 22;
									a("#gift-card").css("top", n + 40 + "px") } else { a("#gift-card").css("top", 680) } } } else { if(a("#gift-card").length == 0) { a(".pay-title").css({ height: "200px", "line-height": "200px" });
								a("#virtual-account").css("top", (0 - 60) + "px");
								a("#points").css("top", 650) } } } } }, getDelivery: function(n) { a.ajax({ type: "GET", url: n, beforeSend: function() {}, success: function(o) { if(h.valid(o)) { f.html(o); if(a("#delivery").find(".choose-delivery-selected").is("div")) { h.saveDelivery(a("#delivery-form")) } h.getPay(k.payUrl) } } }) }, getDefaultDelivery: function(n) { var o = n.attr("href");
				this.getDelivery(o) }, expandDelivery: function(n) { var o = n.attr("href");
				this.getDelivery(o) }, saveDelivery: function(n) { var o = n.serialize(),
					p = n.attr("action") + "?" + o;
				a.ajax({ type: "GET", url: p, beforeSend: function() { h.setmodalLoadTip(a("#delivery").find("section")) }, success: function(q) { if(h.valid(q)) { f.html(q); if(a("#delivery").find(".choose-delivery-selected").is("div")) { a("#delivery h3").attr("data-has-delivery", "ture") } h.deliveryChange() } } }) }, getPay: function(n) { a.ajax({ type: "GET", url: n, cache: false, beforeSend: function() {}, success: function(o) { if(h.valid(o)) { j.html(o); if(a("#pay-form input[type='radio']:checked").is("input[type='radio']")) { h.savePay(a("#pay-form")) } } } }) }, getDefaultPay: function(n) { var o = n.attr("href");
				this.getPay(o) }, expandPay: function(n) { var o = n.attr("href");
				this.getPay(o) }, savePay: function(n) { var o = n.serialize(),
					p = n.attr("action") + "?" + o;
				a.ajax({ type: "GET", url: p, beforeSend: function() { h.setmodalLoadTip(j.find("section")) }, success: function(q) { if(h.valid(q)) { j.html(q);
							h.changeReHieght();
							h.getOrderInfo(); if(a("#pay-form input[type='radio']:checked").is("input[type='radio']")) { a("#pay h3").attr("data-has-pay", "true") } } } }) }, getGiftCard: function(o, n) { a.ajax({ type: "GET", url: o, cache: false, beforeSend: function() {}, success: function(p) { if(h.valid(p)) { g.html(p); if(typeof n === "function") { h.changeReHieght();
								n() } else { h.changeReHieght() } } } }) }, getGiftCardByPage: function(n) { var o = n.attr("href");
				a.ajax({ type: "GET", url: o, beforeSend: function() {}, success: function(p) { if(h.valid(p)) { a("#gift-card-list").html(p);
							h.setGiftCardTrBg() } } }) }, getDefaultGiftCard: function(n) { var o = n.attr("href");
				this.getGiftCard(o) }, expandGiftCard: function(n) { var o = n.attr("href");
				this.getGiftCard(o, function() { a(".show-gift-card-list").click() }) }, useGiftCard: function(o, n) { a.ajax({ type: "POST", url: o, data: n, beforeSend: function() {}, success: function(p) { if(h.valid(p)) { g.html(p);
							h.changeReHieght();
							h.giftCardChange() } } }) }, checkGiftCard: function(n) { var o = n.serialize() + "&cardType=" + a(".cardRadio:checked").val(),
					p = n.attr("action");
				this.useGiftCard(p, o) }, cancelGiftCard: function(n) { a.ajax({ type: "GET", url: n, beforeSend: function() {}, success: function(o) { if(h.valid(o)) { g.html(o);
							a(".pay-title").removeAttr("style");
							a("#virtual-account").removeAttr("style");
							h.changeReHieght();
							h.giftCardChange() } } }) }, getVirtualAccount: function(n) { a.ajax({ type: "GET", url: n, cache: false, beforeSend: function() {}, success: function(o) { if(h.valid(o)) { l.html(o);
							h.changeReHieght() } } }) }, getDefaultVirtualAccount: function(n) { var o = n.attr("href");
				this.getVirtualAccount(o) }, expandVirtualAccount: function(n) { var o = n.attr("href");
				this.getVirtualAccount(o) }, cancelVirtualAccount: function(n) { var o = n.attr("href");
				a.ajax({ type: "GET", url: o, beforeSend: function() {}, success: function(p) { if(h.valid(p)) { l.html(p);
							h.changeReHieght();
							h.virtualAccountChange() } } }) }, checkVirtualAccount: function(n) { var o = n.serialize(),
					p = n.attr("action");
				a.ajax({ type: n.attr("method"), url: p, data: o, beforeSend: function() {}, success: function(q) { if(h.valid(q)) { l.html(q);
							h.changeReHieght();
							h.virtualAccountChange() } } }) }, getOrderInfo: function() { a.ajax({ type: "GET", url: k.getOrderInfoUrl, beforeSend: function() { h.setmodalLoadTip(i) }, success: function(n) { if(h.valid(n)) { i.html(n);
							h.showOrderTips() } } }) }, setSplitType: function(n) { var o = k.setSplitTypeUrl + "?splittype=" + n;
				a.ajax({ type: "GET", url: o, beforeSend: function() { h.setmodalLoadTip(i) }, success: function(p) { if(h.valid(p)) { i.html(p);
							h.showOrderTips();
							h.getDelivery(k.deliveryUrl) } } }) }, ifAllSevenDaysProductCbxChecked: function(n, o) { if(n.length > 0 && o.length > 0) { var p = 0;
					o.each(function() { var r = a(this),
							q = r[0].checked; if(!q) { return false } p++ }); if(p === o.length) { n.attr("checked", "checked");
						saveSevenDaysCookie() } else { n.attr("checked", "");
						delSevenDaysCookie() } } }, allCbxClick: function(o, p, n) { if(o.length > 0 && p.length > 0) { var q = o[0].checked;
					p.each(function() { var r = a(this);
						r.attr("checked", q) }); if(typeof n === "function") { n() } } }, backToCart: function() { c.location.href = a(".back2cart").attr("href") }, saveSevenDaysCookie: function() { a.cookie("SevenDays", "true", { domain: ".vancl.com" }) }, delSevenDaysCookie: function() { a.cookie("SevenDays", "null", { domain: ".vancl.com" }) }, checkSevenDaysCookie: function() { var o = a.cookie("SevenDays"); var p = a("input[name='sevenDays']"); var n = a("input[name='sevenDaysAll']"); if(o === "true" && p.length > 0) { p.each(function() { var q = a(this);
						q.attr("checked", true) });
					n.attr("checked", true) } }, updateUserAddresseeTime: function() { var n = "/checkout/updateUserAddresseeTime";
				a.ajax({ type: "POST", url: n, beforeSend: function() {}, success: function(o) { if(o.status == "error") {} } }) }, submitOrder: function(n) { this.preventSubmitPlaceholderVal(n); var o = n.serialize(),
					q = n.attr("action"),
					p = n.find("#submit-order-btn"); if(p.is(".submit-order-loading")) { return } if(a("[name='prePayTypeRadio']:checked").length > 0) { o = o + "&prePayType=" + a("[name='prePayTypeRadio']:checked").val() } p.blur().removeClass("submit-order-btn").addClass("submit-order-loading").val(k.submitOrderLoadingTxt);
				a.ajax({ type: "POST", url: q, data: o, beforeSend: function() {}, success: function(r) { if(h.valid(r)) { a("#order-info-panel").html(r); var t = a("#verify-code"),
								s = t.data("valid-error"); if(t.length > 0 && s) { h.showError(a("#verify-code-txt"), s) } } else {} }, error: function() { p.removeClass("submit-order-loading").addClass("submit-order-btn").val("") } }) } };
		c.setting = k;
		c.orderConfirm = h }) })(jQuery, window);
(function(a) { a(function() { if(staticSitePath.isOpened === "true") { var f = (location.protocol === "https:");
			f ? "" : (location.href = staticSitePath.checkOut) } var h = a("body"),
			i = vancl.simpleDialog,
			c = vancl.dialog.alert,
			b = a("#addr"),
			d = a("#delivery"),
			g = a("#pay"),
			e = a("#gift-card"),
			j = a("#virtual-account");
		orderConfirm.setAddrListTrBg();
		orderConfirm.setUserChooseAddr();
		orderConfirm.placeholder();
		orderConfirm.showOrderTips();
		h.delegate(".order-tip-close", "click", function() { var k = a(this);
			k.closest(".order-tip").slideUp() });
		h.delegate(".order-detail-tip-close", "click", function() { a(this).closest(".order-detail-tip").slideUp() });
		h.delegate("#addr .addr-modify,#addr .close-addr, #addr .addr-edit,#addr .addr-del, #addr a.addr-prev, #addr a.addr-next, #add-addr,#addr label[for='add-addr'],#addr .go-other-nation,#modify-addr-form input[name='AddressId'], #addr .cancle-edit, #use-postal-code,#use-area-code,#addr .set-user-def", "click", function(o) { o.stopPropagation(); if(o && o.preventDefault) { o.preventDefault() } else { window.event.returnValue = false } var s = a(this); if(s.is("input[name='AddressId']") || s.is("label[for='add-addr']")) { a("#modify-addr-form .addr-edit").removeClass("oprate");
				s.closest("tbody").find("tr div.edit-inland-addr-form").hide(); var m = a("input[name='model.AddressId']").val(); if(m != null) { a("#address_edit_" + m).hide().attr("style", "");
					a("#address_canceledit_" + m).hide() } s.closest("tbody").find("tr").removeClass("addr-selected");
				s.closest("tr").addClass("addr-selected"); var p = a(".addr-form form"),
					r = a(".save-addr"); if(s.is("#add-addr") || s.is("label[for='add-addr']")) { a(".shade").show();
					a(".shade").css("height", a(document).height());
					a(".addr-form").show();
					a("#addr .shade").css("height", a("#content").height());
					a("#addr .shade").css("width", a("#content").width()); var l = a("input:hidden[name='model.AddressId']").val();
					a("#address_edit_" + l).hide();
					a("#address_canceledit_" + l).closest("tr.addr-selected").find("td.addr-set-default a.set-user-def").hide();
					r.hide();
					orderConfirm.getAddrForm(s) } else { p.hide();
					r.show();
					b.data("selected-addr-val", s.val()) } } else { o.preventDefault(); if(s.is(".addr-modify")) { orderConfirm.expandAddrList(s.attr("href")) } else { if(s.is(".close-addr")) { orderConfirm.getDefaultAddr(s) } else { if(s.is(".addr-edit")) { s.closest("tr").find("td.choose input").eq(0).attr("checked", "true"); if(a("table[class='foreign']").length == 0) { s.hide();
								s.next().show() } s.addClass("oprate");
							s.closest("tr.addr-selected").find("td.addr-set-default a.set-user-def").hide();
							a(".shade").show();
							a(".shade").css("height", a(document).height());
							a(".addr-form").show();
							a("#addr .shade").css("height", a("#content").height());
							a("#addr .shade").css("width", a("#content").width());
							a(".oprate").find("a.list_inland-cancel-edit").hide();
							orderConfirm.getAddrForm(s) } else { if(s.is(".addr-del")) { var n = i(o, { sure: function() { orderConfirm.delAddr(s) }, sureTxt: setting.sureTxt });
								n.find(".sure,.cancel,.cancel-icon").toggleClass("track", true);
								n.find(".sure").attr("name", "sp_cart_address_delete_confirm");
								n.find(".cancel,.cancel-icon").attr("name", "sp_cart_address_delete_cancle") } else { if(s.is(".addr-prev") || s.is(".addr-next")) { orderConfirm.getAddrListByPage(s) } else { if(s.is(".go-other-nation")) { var t = s.is("div") ? s.find("a").attr("href") : s.attr("href");
										orderConfirm.expandAddrList(t) } else { if(s.is(".cancle-edit")) { a("#set-addr-form").hide();
											a("#addr .save-addr").show();
											a("#add-addr").attr("checked", false) } else { if(s.is("#use-postal-code")) { var q = a("#default-postal-code").data("postal-code");
												a("#postal-code").val(q).focusin().focusout();
												orderConfirm.hideError(a("#postal-code")) } else { if(s.is("#use-area-code")) { var k = a("#default-area-code").data("area-code");
													a("#phone").val(k + "-").focusin() } else { if(s.is("#addr .set-user-def")) { orderConfirm.setUserDefAddr(s) } } } } } } } } } } } });
		h.delegate("#modify-addr-form, #set-addr-form", "submit", function(k) { k.preventDefault(); var l = a(this); if(l.is("#modify-addr-form")) { if(!orderConfirm.required(l.find(".addr-list input[name='AddressId']:eq(0)"))) { c({ title: setting.tipStr, msg: setting.addrMsg, fn: function() { a(this).dialog("close") } }); return } orderConfirm.modifyDefaultAddr(l) } else { if(l.is("#set-addr-form")) { l.find(":input").focusout(); if(!l.find(".error").is(":visible")) { orderConfirm.saveNewAddr(l) } } } });
		h.delegate(".edit-inland-addr-form .save-new-addr,.inland-cancel-edit,#set-addr-form .save-new-addr", "click", function(n) { n.preventDefault(); var k = a(this),
				m = k.closest(".edit-inland-addr-form"); if(k.is(".save-new-addr")) { if(m.size() == 0) { a("div.edit-inland-addr-form").remove();
					m = k.closest("#set-addr-form") } m.find(":input").focusout(); if(!m.find(".error").is(":visible")) { orderConfirm.saveNewAddr(m) } } else { if(k.is(".inland-cancel-edit")) { m.hide(); if(a("div.addr-list a.addr-next").length > 0) { a("div.addr-list a.addr-next").remove();
						a(setting.nextPageTagaHtml).appendTo(a("div.addr-list")) } else { if(a("div.addr-list span.addr-next").length > 0) { a("div.addr-list span.addr-next").remove();
							a(setting.nextPageTagSpanHtml).appendTo(a("div.addr-list")) } } var l = k.parent().find(":input").eq(0).val();
					a("#address_edit_" + l).attr("style", "");
					a("#address_canceledit_" + l).hide();
					a(".save-addr").show() } } });
		h.delegate(".list_inland-cancel-edit", "click", function(m) { m.preventDefault();
			a(".shade").hide();
			a(".addr-form").hide(); var k = a(this);
			a("div.edit-inland-addr-form").hide(); if(a("div.addr-list a.addr-next").length > 0) { var n = a("div.addr-list a.addr-next").attr("href");
				a("div.addr-list a.addr-next").remove();
				a(setting.nextPageTagaHtml).attr("href", n).appendTo(a("div.addr-list")) } else { if(a("div.addr-list span.addr-next").length > 0) { a("div.addr-list span.addr-next").remove();
					a(setting.nextPageTagSpanHtml).appendTo(a("div.addr-list")) } } var l = k.data("addressid");
			a("#address_edit_" + l).show();
			a("#address_canceledit_" + l).hide(); var o = k.closest("tr.addr-selected").find("td.addr-set-default"); if(o.find("span.user-def-addr-tip").length == 0) { o.find("a.set-user-def").show() } a(".save-addr").show() });
		h.delegate(".inland-addr .newaddrdiv", "mouseenter mouseleave", function(l) { var m = l.type,
				k = a(this); if(m === "mouseenter") { if(k.find("a.list_inland-cancel-edit").is(":hidden")) { k.find("a.addr-edit").show();
					k.find("a.addr-edit").css("display", "block");
					k.addClass("addr-hover"); if(k.find("td.addr-set-default span.user-def-addr-tip").length == 0) { k.find("td.addr-set-default a.set-user-def").show() } } } else { if(m === "mouseleave") { k.removeClass("addr-hover");
					k.find("a.addr-edit").hide();
					k.find("td.addr-set-default a.set-user-def").hide() } } });
		h.delegate("#addr #nation-addr-ddl,#province-id,#city-id,#area-id", "change", function() { var k = a(this); if(k.is("#nation-addr-ddl")) { var l = k.children(":selected").data("url");
				orderConfirm.expandAddrList(l) } else { if(k.is("#province-id")) { if(k.closest("form[id='set-addr-form']").size() > 0) { a("div.addr-list div.edit-inland-addr-form").remove() } orderConfirm.getCityByProvince(k.val());
					a("#province-id").focusout() } else { if(k.is("#city-id")) { if(k.closest("form[id='set-addr-form']").size() > 0) { a("div.addr-list div.edit-inland-addr-form").remove() } orderConfirm.getAreaByPC(a("#province-id").val(), k.val());
						a("#city-id").focusout() } else { if(k.is("#area-id")) { if(k.closest("form[id='set-addr-form']").size() > 0) { a("div.addr-list div.edit-inland-addr-form").remove() } orderConfirm.getPostalCodeAndAreaCodeByPCA(a("#province-id").val(), a("#city-id").val(), k.val());
							a("#area-id").focusout() } } } } });
		h.delegate(".wrapper :input[placeholder]", "focusin focusout", function(k) { var l = k.type,
				o = a(this),
				p = o.val(),
				n = o.attr("placeholder"); var m = orderConfirm.isSupportPlaceHolder(); switch(l) {
				case "focusin":
					o.removeClass("place-holder"); if(!m) { if(p === n) { o.val("") } } if(o.is("#IdCard") && !o.hasClass("EditIdCard")) { if(o.val() != "") { o.val("") } o.addClass("EditIdCard") } break;
				case "focusout":
					if(p === "" || p === n) { o.addClass("place-holder"); if(!m) { o.val(n) } } break;
				default:
					break } });
		h.delegate("#mobile-phone", "focusin", function(k) { var l = a(this); var m = l.attr("focused") === "0"; if(m) { l.attr("focused", 1);
				l.val("") } });
		h.delegate("#addressee,#IdCard,#province-id,#city-id,#area-id,#addr-detail,#postal-code,#mobile-phone,#phone,#first-name,#last-name,#first-addr,#second-addr,#city,#state-province-region,#postal-code-foreign,#phone-foreign", "focusout", function(l) { var y = a(this),
				m = y.attr("id"),
				w = a("#province-id").children(":selected").text(),
				o = a("div.edit-inland-addr-form").is(":hidden"); switch(m) {
				case "addressee":
				case "province-id":
				case "city-id":
				case "area-id":
				case "addr-detail":
				case "postal-code":
				case "mobile-phone":
				case "phone":
					if(o) { y = a("#set-addr-form #" + m) } } switch(m) {
				case "addressee":
				case "IdCard":
				case "province-id":
				case "city-id":
				case "area-id":
				case "addr-detail":
				case "first-name":
				case "last-name":
				case "first-addr":
				case "second-addr":
				case "city":
				case "state-province-region":
					var x = y[0].tagName.toLowerCase(); var k = y.attr("placeholder"); if(x === "input") { if(!orderConfirm.required(y, k) || !orderConfirm.required(y, "")) { orderConfirm.showError(y, k); return } else { if(y.is("#addressee")) { if(y.val().length < 2) { orderConfirm.showError(y, "真实姓名长度不得小于2，请重新填写"); return } } else { orderConfirm.hideError(y) } if(y.is("#addr-detail")) { if(y.val().length < 5) { orderConfirm.showError(y, "详细地址长度不得小于5，请重新填写"); return } } else { orderConfirm.hideError(y) } if(y.is("#IdCard") && y.hasClass("EditIdCard")) { if(!/^(\d{17}[\d|x|X]|\d{15})$/.test(y.val())) { orderConfirm.showError(y, "身份证格式无效，请重新填写"); return } else { orderConfirm.hideError(y) } } } } else { if(x === "select") { k = y.children("eq(0)").val(); if(!orderConfirm.required(y, k)) { orderConfirm.showError(y); return } else { orderConfirm.hideError(y) } } } break;
				case "postal-code":
					if(orderConfirm.isContainTaiWan(w)) { if(!orderConfirm.postalCodeTaiWan(y)) { orderConfirm.showError(y, y.attr("placeholder")); return } else { orderConfirm.hideError(y); break } } else { if(!orderConfirm.postalCode(y)) { orderConfirm.showError(y, y.attr("placeholder")); return } else { orderConfirm.hideError(y) } } break;
				case "mobile-phone":
				case "phone":
					var s = y.attr("placeholder"),
						r = o ? a("#set-addr-form #mobile-phone") : a("#mobile-phone"),
						t = o ? a("#set-addr-form #phone") : a("#phone"),
						n = y.data("error"); if((!orderConfirm.required(r, s) || !orderConfirm.required(r, "")) && (!orderConfirm.required(t, s) || !orderConfirm.required(t, ""))) { orderConfirm.showError(r, s); return } else { if(orderConfirm.isContainGAT(w)) { orderConfirm.hideError(y); break } var u = y.val(); if(y.is("#mobile-phone")) { var q = u !== "" && u !== s; if(!orderConfirm.setInlandMobileLengthError(y, setting.constEleven, setting.mobilePhoneLengthError) && q) { return } else { var p = y.attr("focused"); if(p === "1") { if(!orderConfirm.mobilePhone(y) && q) { orderConfirm.showError(y, n); return } else { orderConfirm.hideError(y) } } else { if(u === "" || u.length !== 11) { orderConfirm.showError(y, "请输入正确的手机号码"); return } else { orderConfirm.hideError(y) } } } } else { if(y.is("#phone") && u !== "" && u !== s) { if(!orderConfirm.telePhone(y)) { orderConfirm.showError(y, n); return } else { orderConfirm.hideError(y) } } } } break;
				case "postal-code-foreign":
				case "phone-foreign":
					var v = y.attr("placeholder"); if(!orderConfirm.required(y, v) || !orderConfirm.required(y, "")) { orderConfirm.showError(y, v); return } else { orderConfirm.hideError(y) } break;
				default:
					break } switch(m) {
				case "addressee":
				case "addr-detail":
				case "first-name":
				case "last-name":
				case "first-addr":
				case "second-addr":
				case "city":
				case "state-province-region":
				case "postal-code-foreign":
				case "phone-foreign":
					if(!orderConfirm.setIllegalStrError(y)) { return }
				default:
					break } switch(m) {
				case "addressee":
					orderConfirm.setLengthError(y, setting.constTwenty, setting.addresseeLengthError); break;
				case "addr-detail":
					orderConfirm.setLengthError(y, setting.constOneHundred, setting.addrDetailLengthError); break;
				case "first-name":
					orderConfirm.setLengthError(y, setting.constTwoHundred, setting.fFirstNameLengthError); break;
				case "last-name":
					orderConfirm.setLengthError(y, setting.constTwoHundred, setting.fLastNameLengthError); break;
				case "first-addr":
					orderConfirm.setLengthError(y, setting.constFiveHundred, setting.fFirstAddrLengthError); break;
				case "second-addr":
					orderConfirm.setLengthError(y, setting.constFiveHundred, setting.fSecondAddrLengthError); break;
				case "city":
					orderConfirm.setLengthError(y, setting.constTwoHundred, setting.fCityLengthError); break;
				case "state-province-region":
					orderConfirm.setLengthError(y, setting.constTwoHundred, setting.fStateLengthError); break;
				case "postal-code-foreign":
					orderConfirm.setLengthError(y, setting.constThirty, setting.fPostalCodeLengthError); break;
				case "phone-foreign":
					orderConfirm.setLengthError(y, setting.constTwenty, setting.fPhoneLengthError); break;
				case "phone":
					orderConfirm.setLengthError(y, setting.constTwenty, setting.fPhoneLengthError); break;
				default:
					break } });
		h.delegate("#delivery .delivery-modify,#delivery .delivery-close", "click", function(k) { k.preventDefault(); var l = a(this); if(l.is(".delivery-modify")) { orderConfirm.expandDelivery(l) } else { if(l.is(".delivery-close")) { orderConfirm.getDefaultDelivery(l) } } });
		h.delegate("#delivery-form", "submit", function(m) { m.preventDefault(); var p = a(this),
				k = p.find(".delivery-time-items .error"),
				l = p.find(".delivery-way-items .error"),
				n = orderConfirm.required(p.find("input[name='transferTime']")),
				o = orderConfirm.required(p.find("input[name='transferId']")); if(!n) { k.css({ display: "inline-block" }) } else { k.hide() } if(!o) { l.css({ display: "inline-block" }) } else { l.hide() } if(n && o) { orderConfirm.saveDelivery(p) } });
		h.delegate("#pay .pay-modify, #pay .pay-close, #gift-card .show-gift-card-list,.cancel-gift-card,.gift-card-modify,.gift-card-close,#gift-card-list .gift-card-prev,#gift-card-list .gift-card-next,.virtual-account-modify,.virtual-account-close, #cancel-balance,#pay-form .bank-img, #pay-form .normal-postal-pay", "click", function(k) { var m = a(this); if(m.is(".bank-img")) { m.prev().click() } else { if(m.is(".normal-postal-pay")) { var l = a(".normal-postal-pay-explanation");
					l.show() } else { k.preventDefault(); if(m.is(".show-gift-card-list")) { a(".gift-card-form-panel").toggle();
						orderConfirm.changeReHieght() } else { if(m.is(".cancel-gift-card")) { orderConfirm.cancelGiftCard(m.attr("href")) } else { if(m.is(".gift-card-modify")) { orderConfirm.expandGiftCard(m) } else { if(m.is(".gift-card-close")) { orderConfirm.getDefaultGiftCard(m) } else { if(m.is(".gift-card-prev") || m.is(".gift-card-next")) { orderConfirm.getGiftCardByPage(m) } else { if(m.is(".virtual-account-modify")) { orderConfirm.expandVirtualAccount(m) } else { if(m.is(".virtual-account-close")) { orderConfirm.getDefaultVirtualAccount(m) } else { if(m.is("#cancel-balance")) { orderConfirm.cancelVirtualAccount(m) } else { if(m.is(".pay-modify")) { orderConfirm.expandPay(m) } else { if(m.is(".pay-close")) { orderConfirm.getDefaultPay(m) } } } } } } } } } } } } });
		h.delegate("#pay-form .cash-on-delivery-pay,#pay-form .cash-on-delivery-items input[type='radio'],#pay-form .other-pay", "click", function(n) { var m = a(this),
				o = a("#pay-form .other-pay"),
				l = a("#pay-form .cash-on-delivery-pay"),
				k = a("#pay-form .cash-on-delivery-items input[type='radio']"); if(m.is(".cash-on-delivery-pay")) { o.attr("checked", false);
				k.eq("0").attr("checked", true) } else { if(m.is(".cash-on-delivery-items input[type='radio']")) { l.attr("checked", true) } else { if(m.is(".other-pay")) { l.attr("checked", false) } } } });
		h.delegate("#gift-card-id,#gift-card-pwd,#balancePassword", "focusin focusout", function(k) { var n = a(this),
				l = n.next(".error"),
				m = k.type; if(n.is("#gift-card-pwd") && a("#cardForWeibo").attr("checked")) { l.hide(); return } switch(m) {
				case "focusin":
					l.hide(); break;
				case "focusout":
					if(orderConfirm.required(n, "")) { l.hide() } else { l.show(); return } orderConfirm.setIllegalStrError(n); break;
				default:
					break } });
		h.delegate(".pay-online-bank-list", "mouseenter mouseleave", function(k) { var l = k.type,
				m = a(this).children(".pay-online-list"); switch(l) {
				case "mouseenter":
					m.show(); break;
				case "mouseleave":
					m.hide(); break;
				default:
					break } return false });
		h.delegate("#use-gift-card-form,#choose-gift-card-form,#pay-form,#use-balance-form", "submit", function(l) { l.preventDefault(); var r = a(this),
				p = a("#gift-card-list"),
				o = p.find("input[type='radio'][name='giftCard']:checked"),
				k = o.data("card"); if(r.is("#use-gift-card-form")) { r.find("input").focusout(); if(!r.find(".error").is(":visible")) { orderConfirm.checkGiftCard(r) } } else { if(r.is("#choose-gift-card-form")) { var m = r.find("span.error"); if(o.length === 1) { m.hide(); var q = "giftCardNo=" + k.no + "&giftCardPassword=" + k.pwd;
						orderConfirm.useGiftCard(r.attr("action"), q) } else { m.show() } } else { if(r.is("#use-balance-form")) { r.find("input").focusout(); if(!r.find(".error").is(":visible")) { orderConfirm.checkVirtualAccount(r) } } else { if(r.is("#pay-form")) { var n = r.find("span.error"); if(orderConfirm.required(r.find("input[name='identifier']"))) { n.hide();
								orderConfirm.savePay(r) } else { n.show() } } } } } });
		h.delegate("#order-info-panel .additional-info>h4,#order-info-panel .order-split label", "click", function(k) { var m = a(this); if(m.is("label")) { orderConfirm.setSplitType(m.find(":input").val()) } else { if(m.is("h4")) { var n = "",
						l = m.next(); if(l.is(".additional-info-content-expand")) { return } if(m.hasClass("collapse")) { n = "expand";
						l.slideDown() } else { n = "collapse";
						l.slideUp() } m.removeClass().addClass(n) } } });
		h.delegate("input[name='sevenDays'],input[name='sevenDaysAll']", "click", function(m) { var p = a(this); var k = a("input[name='sevenDaysAll']"); var o = a("input[name='sevenDays']"); if(p.is("input[name = 'sevenDays']")) { orderConfirm.ifAllSevenDaysProductCbxChecked(k, o) } else { if(p.is("input[name = 'sevenDaysAll']")) { var n = p[0].checked; if(n) { p.attr("checked", n); var l = a(".order-list  input[name='sevenDays']");
						orderConfirm.allCbxClick(p, l, null);
						orderConfirm.saveSevenDaysCookie() } else { p.attr("checked", n); var l = a(".order-list  input[name='sevenDays']");
						orderConfirm.allCbxClick(p, l, null);
						orderConfirm.delSevenDaysCookie() } } } });
		h.delegate("#InvoiceCustom", "change", function() { var l = a(this); var k = a("#InvoiceTaxNo"); if(l.attr("value") == "Personal") { a("#invoice-tax").hide();
				a("#InvoiceTitle").val("个人");
				a("#InvoiceTitle").hide();
				a("#InvoiceTitlePerson").show() } else { if(l.attr("value") == "Institution" || l.attr("value") == "Union") { a("#invoice-tax").hide();
					a("#InvoiceTitle").show();
					a("#InvoiceTitlePerson").hide();
					a("#InvoiceTitle").val("") } else { a("#invoice-tax").show();
					a("#InvoiceTitle").show();
					a("#InvoiceTitlePerson").hide();
					a("#InvoiceTitle").val("") } } a("#InvoiceTaxNo").val("");
			orderConfirm.hideError(k) });
		h.delegate(".discount-txt", "mouseenter mouseleave", function(l) { var o = l.type,
				n = a(this),
				k = n.next(),
				m = n.parent(); if(o === "mouseenter") { k.show();
				m.css({ "z-index": 2 }) } else { if(o === "mouseleave") { k.hide();
					m.css({ "z-index": 1 }) } } });
		h.delegate("#comments,#InvoiceTitle", "focusout", function() { var k = a(this); if(a("#IsInvoicePositive").is(":checked") && k.is("#InvoiceTitle")) { if(!orderConfirm.required(k)) { orderConfirm.showError(k, setting.invoiceStrError); return } orderConfirm.setLengthError(k, setting.constFifty, setting.invoiceTitleLengthError) } if(!orderConfirm.setIllegalStrError(k)) { return false } if(k.is("#InvoiceTitle")) { if(!orderConfirm.setIllegalCharError(k)) { return false } orderConfirm.setLengthError(k, setting.constThirty, "单位名称过长，请重新输入。") } if(k.is("#comments")) { orderConfirm.setLengthError(k, setting.constFifty, k.attr("placeholder")) } });
		h.delegate("#InvoiceTaxNo", "keydown", function(k) { var l = a(this),
				m = k.which; if(k.type === "keydown" && m === 13) { l.focusout() } });
		h.delegate("#InvoiceTaxNo", "focusout", function() { var k = a(this);
			orderConfirm.setIllegalStrError(k); if(a("#InvoiceCustom").val() == "Company") { if(!orderConfirm.required(k)) { orderConfirm.showError(k, "请填写税务登记号。"); return } if(!orderConfirm.taxNo4Company(k)) { orderConfirm.showError(k, setting.invoiceTaxNoError); return } } else { if(a("#InvoiceCustom").val() == "IndividualBusiness") { if(!orderConfirm.required(k)) { orderConfirm.showError(k, "请填写税务登记号。"); return } if(!orderConfirm.taxNo4IndividualBusiness(k)) { orderConfirm.showError(k, setting.invoiceTaxNoError); return } } else { if(k.val() == "") { return } if(a("#InvoiceCustom").val() == "Foreign" && !orderConfirm.taxNo4Foreign(k)) { orderConfirm.showError(k, setting.invoiceTaxNoError); return } else { if(a("#InvoiceCustom").val() == "Hkmotw" && !orderConfirm.taxNo4Foreign(k)) { orderConfirm.showError(k, setting.invoiceTaxNoError); return } } } } });
		h.delegate("#verify-code-txt", "focusout", function() { var k = a(this); if(!orderConfirm.required(k)) { orderConfirm.showError(k, setting.verifyCodeRequiredError) } else { orderConfirm.hideError(k) } });
		h.delegate("#InvoiceTitle,#InvoiceTaxNo", "focusin", function() { a("#submit-order-form").find(".order-submit .warn").text("") });
		h.delegate("#IsInvoicePositive", "click", function(k) { var p = a(this); var o = a("#InvoiceTitle"); var m = a("#InvoiceCustom"); var l = a("#invoiceContent"); var n = a("#InvoiceTaxNo");
			o.attr("disabled", "");
			m.attr("disabled", "");
			l.attr("disabled", "");
			n.attr("disabled", ""); if(m.val() == "Personal") { o.val("个人");
				o.hide();
				a("#InvoiceTitlePerson").show() } else { o.val("");
				o.show();
				a("#InvoiceTitlePerson").hide() } orderConfirm.hideError(o);
			orderConfirm.hideError(n) });
		h.delegate("#IsInvoiceNegative", "click", function(k) { var p = a(this); var o = a("#InvoiceTitle"); var m = a("#InvoiceCustom"); var l = a("#invoiceContent"); var n = a("#InvoiceTaxNo");
			o.val("");
			n.val("");
			o.attr("disabled", "disabled");
			m.attr("disabled", "disabled");
			l.attr("disabled", "disabled");
			n.attr("disabled", "disabled");
			orderConfirm.hideError(o);
			orderConfirm.hideError(n);
			a("#submit-order-form").find(".order-submit .warn").text("") });
		h.delegate("#verify-code-link", "click", function(l) { var k = new Date(); var m = a("#verify-code-img").attr("src", "/VerifyingCode.ashx?" + k.getSeconds()) });
		h.delegate(".close-button", "click", function(k) { orderConfirm.backToCart() });
		h.delegate("#submit-order-form", "submit", function(k) { var o = a(this),
				q = setting.tmpWarn,
				p = a("#verify-code-txt"); var m = a("input[name='sevenDays']"); if(p.length > 0) { p.focusout() } if(o.find(".error").is(":visible")) { return false } if(b.find("h3[data-has-addr]").length === 0) { q += setting.addrWarn + "," } if(d.find("h3[data-has-delivery]").length === 0) { q += setting.deliveryWarn + "," } if(g.find("h3[data-has-pay]").length === 0) { q += setting.payWarn + "," } if(a("#IsInvoicePositive").is(":checked")) { if(!orderConfirm.required(a("#InvoiceTitle"))) { q += setting.invioceWarn + "," } } if(m.length > 0) { var n = m.length; var l = 0;
				m.each(function() { var s = a(this),
						r = s[0].checked; if(!r) { return false } l++ }); if(l !== n) { vancl.dialog.confirm({ title: setting.tipStr, msg: o.hasClass("IsOverSeaOrder") ? setting.submitOrderOverSea : setting.submitOrderSevenDays, sureTxt: " ", cancelTxt: " ", fn: function() { var r = a("input[name='sevenDays']");
							r.each(function() { var s = a(this);
								s.attr("checked", true) });
							a("input[name='sevenDaysAll']").attr("checked", true);
							orderConfirm.delSevenDaysCookie();
							a("#submit-order-form").submit() } });
					a("div.ui-dialog-buttonset button:last-child").css("background", "url('//ssl.vanclimg.com/shopping/btnbg.png?') no-repeat scroll -98px 0 rgba(0, 0, 0, 0)");
					a("div.ui-dialog-buttonset button:first-child").css("background", "url('//ssl.vanclimg.com/shopping/btnbg.png?') no-repeat scroll 0 0 rgba(0, 0, 0, 0)");
					a("div.ui-dialog-buttonset button").css("width", "98px"); return false } } if(q == setting.tmpWarn) { orderConfirm.delSevenDaysCookie();
				orderConfirm.updateUserAddresseeTime();
				orderConfirm.submitOrder(o);
				e.find(".error").hide();
				j.find(".error").hide(); return false } else { o.find(".order-submit .warn").text(q.substr(0, q.length - 1)); return false } });
		orderConfirm.checkSevenDaysCookie() }) })(jQuery);