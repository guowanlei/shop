function getCookie(b) {
	var a = "";
	var c = b + "=";
	if(document.cookie.length > 0) {
		offset = document.cookie.indexOf(c);
		if(offset != -1) {
			offset += c.length;
			end = document.cookie.indexOf(";", offset);
			if(end == -1) { end = document.cookie.length } a = unescape(document.cookie.substring(offset, end))
		}
	}
	return a
};

function ClickSourceVancl() {} ClickSourceVancl.prototype.url = location.href;
ClickSourceVancl.prototype.refUrl = document.referrer;
ClickSourceVancl.prototype.clickwwwname = "http://click.vancl.com/";
ClickSourceVancl.prototype.redirect = function(b) {
	var a = document.createElement("script");
	a.src = b;
	var c = document.getElementsByTagName("script")[0];
	c.parentNode.insertBefore(a, c)
};
ClickSourceVancl.prototype.get_param = function(d) {
	var f = location.search.substring(1) || location.hash.substring(1);
	var c = f.split("&");
	for(var b = 0; b < c.length; b++) {
		var e = c[b].indexOf("=");
		if(e == -1) { continue }
		var a = c[b].substring(0, e);
		if(a.toLowerCase() == d.toLowerCase()) {
			var g = c[b].substring(e + 1);
			g = decodeURIComponent(g);
			return g
		}
	}
	return null
};
ClickSourceVancl.prototype.getHost = function(d) { var a = ""; if(typeof d == "undefined" || d == null) { return a } var c = /.*\:\/\/([^\/]*).*/; var b = d.match(c); if(typeof b != "undefined" && b != null) { a = b[1] } return a };
ClickSourceVancl.prototype.getCookie = function(b) {
	var a = "";
	var c = b + "=";
	if(document.cookie.length > 0) {
		offset = document.cookie.indexOf(c);
		if(offset != -1) {
			offset += c.length;
			end = document.cookie.indexOf(";", offset);
			if(end == -1) { end = document.cookie.length } a = unescape(document.cookie.substring(offset, end))
		}
	}
	return a
};
ClickSourceVancl.prototype.setCookie = function(a, b, d) {
	var e = "";
	var c = 1;
	if(d != null) { c = d } e = new Date((new Date()).getTime() + c * 86400000);
	e = "; expires=" + e.toGMTString();
	document.cookie = a + "=" + escape(b) + ";domain=vancl.com;path=/" + e
};
ClickSourceVancl.prototype.excuteFunction = function(a) {
	try {
		if(window.location.host.indexOf("vancl.com") < 0) { return }
		try { if(window.top == window) { a.setCookie("union_frame", "0", 1) } else { a.setCookie("union_frame", "1", 1) } } catch(b) { a.setCookie("union_frame", "1", 1) }
		if(window.document.referrer && window.document.referrer.indexOf("soso.com") >= 0) { VanclUnionClick(); return }
		var j = a.get_param("source");
		if(j != null && j != "") {
			var k = a.get_param("sourcesuninfo");
			if(k == null) { k = "" }
			if(k == "") { var g = a.get_param("psId"); if(g != null && g != "") { k = "ad-0-1-" + g + "-0" } var l = a.get_param("srcId"); if(l != null && l != "") { k = "ad-0-3-0" + l + "-1" } }
			var n = a.getCookie("union_visited");
			var d;
			if(n == "1") { d = 0 } else {
				a.setCookie("union_visited", "1", 1);
				d = 1
			}
			var c = a.clickwwwname + "websource/websource.aspx?source=" + j + "&sourceInfo=" + k + "&referer=" + encodeURIComponent(a.refUrl) + "&hrefurl=" + encodeURIComponent(a.url) + "&isnew=" + d;
			a.redirect(c)
		} else {
			var h = a.refUrl;
			if(h != null && h != "") {
				if(a.getHost(h).indexOf("vancl.com") < 0 && a.getHost(h).indexOf("vanclimg.com") < 0) {
					var n = a.getCookie("union_visited");
					var d;
					if(n == "1") { d = 0 } else {
						a.setCookie("union_visited", "1", 1);
						d = 1
					}
					var f = a.clickwwwname + "websource/websourceurl.aspx?SourceUrl=" + encodeURIComponent(h) + "&hrefurl=" + encodeURIComponent(a.url) + "&isnew=" + d;
					a.redirect(f)
				} else {
					var m = a.getCookie("WebSourceTemp");
					if(m != "") {
						var i = a.clickwwwname + "websource/websource.aspx";
						a.redirect(i)
					}
				}
			}
		}
	} catch(b) {}
};
var clickSourceVanclObj = new ClickSourceVancl();
clickSourceVanclObj.excuteFunction(clickSourceVanclObj);

function VanclUnionClick() {
	var b = location.href;
	var c = document.referrer;
	var d = document.createElement("script");
	d.src = "http://click.vancl.com/Default.aspx?landingPage=" + encodeURIComponent(b) + "&referrer=" + encodeURIComponent(c);
	d.language = "javascript";
	d.type = "text/javascript";
	var a = document.getElementsByTagName("head")[0];
	a.appendChild(d)
};
$(function() {
	var b, c, d, a;
	b = (function() {
		window.VANCL = window.VANCL || {};
		window.VANCL.Global = window.VANCL.Global || {};
		return window.VANCL.Global
	}());
	c = document.location.hash;
	d = c.indexOf("@");
	a = c.length;
	if(document.all && c.length > -1 && document.title.split("#").length > 1) { document.title = document.title.split("#")[0] }
	if(d > -1) { document.location.hash = c.substr(d + 1) }
	if(c.substr(0, 5) === "#ref=") { if(d > -1) { a = d } b.ref = c.substring(5, a) } $("body").mousedown(function(e) {
		function k(p) { var o = b.hasOwnProperty("ref") ? b.ref : null; return p.attr("location") === undefined ? o : p.attr("location") }

		function h(o) { return o === undefined || o === "" || o === null }

		function n(p, r) {
			var s = k(r),
				q, o;
			if(h(s) === true) { return h(p) ? null : p }
			if(p === "") { return s } q = p + "|" + s;
			o = q.split("|");
			if(o.length > 1 && o[0] === o[1]) { return s }
			if(o.length >= 10) { o.splice(8, o.length - 9) }
			return o.join("|")
		}

		function i(p) { var o = p.attr("href"); if(h(o) === true) { return null } o = o.replace(" ", ""); if(o.indexOf("javascript") > -1) { return null } if(o.indexOf("#") > -1 && p.attr("target") === undefined) { return null } return o }

		function f(o) { if(o === undefined) { return false } if(o === "") { return true } if(o.indexOf("_") === -1 && o.indexOf("-") === -1) { return false } return true }

		function j(r, u) {
			var o = "",
				t = r,
				p, q, s;
			p = r.lastIndexOf("#");
			q = r.indexOf("@");
			if(p > -1) { t = r.substr(0, p); if(q === -1) { q = p } o = "@" + r.substr(q + 1) }
			if(r.indexOf("vjia.com") === -1) { return t + "#ref=" + u + o }
			if(r.indexOf(u) > -1) { return r } s = r.indexOf("?") === -1 ? "?" : "&";
			return t + s + "ref=" + u
		}
		var m, l, g;
		m = $(e.target).closest("a");
		if(m.length === 0) { return } l = m.attr("rel");
		g = i(m);
		if(g === null) { return }
		if(h(l) && m.hasClass("track")) { l = m.attr("name") }
		if(f(l) === false) { return } l = n(l, m);
		if(l) { m.attr("href", j(g, l)) }
	})
});
var PAGELAB_PATTERN = /^(PageLab_PLE[0-9]{4})=([^;]*)$/;
$(document).ready(function() { $(document.body).mousedown(function(a) { a = a ? a.target : window.event.srcElement; if(a.className.toUpperCase().indexOf("TRACK") > -1) { trackurl(a.name) } else { var b = a.parentNode; if(b.className.toUpperCase().indexOf("TRACK") > -1) { trackurl(b.name) } } }) });

function trackurl(a) {
	if(a == null || a == "") { return }
	var c = [];
	var b = getGatherCookie();
	c.push(document.location.protocol);
	c.push("//vamr.vancl.com/track.aspx?ref=");
	c.push(escape(window.document.referrer));
	c.push("&areaid=");
	c.push(a);
	if(b != "") { c.push("&gather_cookies=" + b) }
	var d = c.join("");
	$("#weblog_track").remove();
	$("body").append('<img id="weblog_track" src=' + d + ' style="display:none;"/>')
}

function getGatherCookie() { var b = ""; var c = document.cookie.split(";"); for(var a = 0; a < c.length; a++) { if(PAGELAB_PATTERN.test(trim(c[a]))) { b += trim(c[a].split("=")[1]) + "," } } b = (b.length > 0) ? b.substr(0, b.length - 1) : ""; return b }

function trim(c) { for(var a = 0; a < c.length && c.charAt(a) == " "; a++) {} for(var b = c.length; b > 0 && c.charAt(b - 1) == " "; b--) {} if(a > b) { return "" } return c.substring(a, b) };

function generateImageDomain(f) {
	var b = ["http://p1.vanclimg.com", "http://p2.vanclimg.com", "http://p3.vanclimg.com", "http://p4.vanclimg.com", "http://p5.vanclimg.com"],
		g = 0,
		e = b.length,
		a = 0;
	if(typeof f === "undefined") { return b[0] } a = f.length;
	while(a--) { g += f.charCodeAt(a) }
	return b[g % e]
};
var vjiaAd = { imageUrl: "http://i5.vanclimg.com/cms/20141229/200-220-c4u.jpg", imageLink: "http://mall.vjia.com/c4u", source: "vancl-singleproduct-jx", track: "item-vjia" };