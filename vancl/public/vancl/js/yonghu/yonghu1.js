jQuery.cookie = function(l, s, m) {
	function a(u, i) { return i ? encodeURIComponent(u) : decodeURIComponent(u) } if(typeof l !== "string") { return null } if(arguments.length === 1) { var d = a(l, true) + "=",
			e = document.cookie.indexOf(d),
			g = null,
			o = {}; if(e > -1) { e = e + d.length; var b = document.cookie.indexOf(";", e); if(b === -1) { b = document.cookie.length } g = document.cookie.substring(e, b); if(g.length > 0) { if(g.indexOf("&") === -1 && g.indexOf("=") === -1) { return a(g, false) } var q = g.split("&"),
					n; for(var j = 0, k = q.length; j < k; j++) { n = q[j].split("=");
					o[a(n[0], false)] = a(n[1], false) } return o } } return null } if(s instanceof Array) { var r = {},
			c = this.cookie(l),
			c = (c instanceof Object ? c : {});
		$.each(s, function(u, v) { r[v] = c[v] }); return r } if(s instanceof Object || s === null || (typeof s === "string")) { var f = a(l, true) + "="; if(s === null) { f += "; expires = " + new Date(0).toUTCString() } else { var p; if(typeof s === "string") { p = a(s, true) } else { c = this.cookie(l);
				c = (c instanceof Object ? c : {});
				s = $.extend(c, s);
				p = []; for(var t in s) { if(t.length > 0 && s.hasOwnProperty(t) && s[t]) { p.push(a(t, true) + "=" + a(s[t], true)) } } } if(p.length > 0) { f += (typeof s === "string") ? p : p.join("&"); if(m) { if(m.expires instanceof Date) { f += "; expires = " + m.expires.toUTCString() } if(typeof m.expires === "number") { var h = new Date();
						h.setTime(h.getTime() + (m.expires * 24 * 60 * 60 * 1000));
						f += "; expires = " + h.toUTCString() } if(m.path) { f += "; path = " + m.path } if(m.domain) { f += "; domain = " + m.domain } if(m.secure) { f += "; secure" } } } else { f += "; expires = " + new Date(0).toUTCString() } } document.cookie = f; return } };
(function(a) { a.belowthefold = function(b, d) { if(d.container === undefined || d.container === window) { var c = a(window).height() + a(window).scrollTop() } else { var c = a(d.container).offset().top + a(d.container).height() } return c <= a(b).offset().top - d.threshold };
	a.rightoffold = function(b, d) { if(d.container === undefined || d.container === window) { var c = a(window).width() + a(window).scrollLeft() } else { var c = a(d.container).offset().left + a(d.container).width() } return c <= a(b).offset().left - d.threshold };
	a.abovethetop = function(b, d) { if(d.container === undefined || d.container === window) { var c = a(window).scrollTop() } else { var c = a(d.container).offset().top } return c >= a(b).offset().top + d.threshold + a(b).height() };
	a.leftofbegin = function(b, d) { if(d.container === undefined || d.container === window) { var c = a(window).scrollLeft() } else { var c = a(d.container).offset().left } return c >= a(b).offset().left + d.threshold + a(b).width() };
	a.extend(a.expr[":"], { "below-the-fold": function(b) { return a.belowthefold(b, { threshold: 0, container: window }) }, "above-the-fold": function(b) { return !a.belowthefold(b, { threshold: 0, container: window }) }, "right-of-fold": function(b) { return a.rightoffold(b, { threshold: 0, container: window }) }, "left-of-fold": function(b) { return !a.rightoffold(b, { threshold: 0, container: window }) } }) })(jQuery);
(function(a) { a.PaginationCalculator = function(b, c) { this.maxentries = b;
		this.opts = c };
	a.extend(a.PaginationCalculator.prototype, { numPages: function() { return Math.ceil(this.maxentries / this.opts.items_per_page) }, getInterval: function(b) { var d = Math.floor(this.opts.num_display_entries / 2); var e = this.numPages(); var g = e - this.opts.num_display_entries; var f = b > d ? Math.max(Math.min(b - d, g), 0) : 0; var c = b > d ? Math.min(b + d + (this.opts.num_display_entries % 2), e) : Math.min(this.opts.num_display_entries, e); return { start: f, end: c } } });
	a.PaginationRenderers = {};
	a.PaginationRenderers.defaultRenderer = function(b, c) { this.maxentries = b;
		this.opts = c;
		this.pc = new a.PaginationCalculator(b, c) };
	a.extend(a.PaginationRenderers.defaultRenderer.prototype, { createLink: function(f, c, b) { var d, e = this.pc.numPages();
			f = f < 0 ? 0 : (f < e ? f : e - 1);
			b = a.extend({ text: f + 1, classes: "" }, b || {}); if(f == c) { d = a("<span class='current'>" + b.text + "</span>") } else { d = a("<a>" + b.text + "</a>").attr("href", this.opts.link_to.replace(/__id__/, f)) } if(b.classes) { d.addClass(b.classes) } d.data("page_id", f); return d }, appendRange: function(b, c, g, d, f) { var e; for(e = g; e < d; e++) { this.createLink(e, c, f).appendTo(b) } }, getLinks: function(c, e) { var b, d, g = this.pc.getInterval(c),
				h = this.pc.numPages(),
				f = a("<div class='pagination'></div>"); if(this.opts.prev_text && (c > 0 || this.opts.prev_show_always)) { f.append(this.createLink(c - 1, c, { text: this.opts.prev_text, classes: "prev" })) } if(g.start > 0 && this.opts.num_edge_entries > 0) { d = Math.min(this.opts.num_edge_entries, g.start);
				this.appendRange(f, c, 0, d, { classes: "sp" }); if(this.opts.num_edge_entries < g.start && this.opts.ellipse_text) { jQuery("<span>" + this.opts.ellipse_text + "</span>").appendTo(f) } } this.appendRange(f, c, g.start, g.end); if(g.end < h && this.opts.num_edge_entries > 0) { if(h - this.opts.num_edge_entries > g.end && this.opts.ellipse_text) { jQuery("<span>" + this.opts.ellipse_text + "</span>").appendTo(f) } b = Math.max(h - this.opts.num_edge_entries, g.end);
				this.appendRange(f, c, b, h, { classes: "ep" }) } if(this.opts.next_text && (c < h - 1 || this.opts.next_show_always)) { f.append(this.createLink(c + 1, c, { text: this.opts.next_text, classes: "next" })) } a("a", f).click(e); return f } });
	a.fn.pagination = function(e, g) { g = jQuery.extend({ items_per_page: 10, num_display_entries: 11, current_page: 0, num_edge_entries: 0, link_to: "#", prev_text: "Prev", next_text: "Next", ellipse_text: "...", prev_show_always: true, next_show_always: true, renderer: "defaultRenderer", load_first_page: false, callback: function() { return false } }, g || {}); var b = this,
			j, d, c;

		function h(m) { var n, o = a(m.target).data("page_id"),
				l = k(o); if(!l) { m.stopPropagation() } return l }

		function k(m) { b.data("current_page", m);
			d = j.getLinks(m, h);
			b.empty();
			d.appendTo(b); var l = g.callback(m, b); return l } c = g.current_page;
		b.data("current_page", c);
		e = (!e || e < 0) ? 1 : e;
		g.items_per_page = (!g.items_per_page || g.items_per_page < 0) ? 1 : g.items_per_page; if(!a.PaginationRenderers[g.renderer]) { throw new ReferenceError("Pagination renderer '" + g.renderer + "' was not found in jQuery.PaginationRenderers object.") } j = new a.PaginationRenderers[g.renderer](e, g); var i = new a.PaginationCalculator(e, g); var f = i.numPages();
		b.bind("setPage", { numPages: f }, function(l, m) { if(m >= 0 && m < l.data.numPages) { k(m); return false } });
		b.bind("prevPage", function(m) { var l = a(this).data("current_page"); if(l > 0) { k(l - 1) } return false });
		b.bind("nextPage", { numPages: f }, function(m) { var l = a(this).data("current_page"); if(l < m.data.numPages - 1) { k(l + 1) } return false });
		d = j.getLinks(c, h);
		b.empty();
		d.appendTo(b); if(g.load_first_page) { g.callback(c, b) } } })(jQuery);
$.fn.extend({ mousewheel: function(a) { return this.each(function() { var b = this;
			b.D = 0; if($.browser.msie || $.browser.safari) { b.onmousewheel = function() { b.D = event.wheelDelta;
					event.returnValue = false;
					a && a.call(b) } } else { b.addEventListener("DOMMouseScroll", function(c) { b.D = c.detail > 0 ? -1 : 1;
					c.preventDefault();
					a && a.call(b) }, false) } }) } });
$.fn.extend({ jscroll: function(a) { return this.each(function() { a = a || {};
			a.Bar = a.Bar || {};
			a.Btn = a.Btn || {};
			a.Bar.Bg = a.Bar.Bg || {};
			a.Bar.Bd = a.Bar.Bd || {};
			a.Btn.uBg = a.Btn.uBg || {};
			a.Btn.dBg = a.Btn.dBg || {}; var i = { W: "15px", BgUrl: "", Bg: "#efefef", Bar: { Pos: "up", Bd: { Out: "#b5b5b5", Hover: "#000" }, Bg: { Out: "#fff", Hover: "#fff", Focus: "orange" } }, Btn: { btn: true, uBg: { Out: "#ccc", Hover: "#fff", Focus: "orange" }, dBg: { Out: "#ccc", Hover: "#fff", Focus: "orange" } }, Fn: function() {} };
			a.W = a.W || i.W;
			a.BgUrl = a.BgUrl || i.BgUrl;
			a.Bg = a.Bg || i.Bg;
			a.Bar.Pos = a.Bar.Pos || i.Bar.Pos;
			a.Bar.Bd.Out = a.Bar.Bd.Out || i.Bar.Bd.Out;
			a.Bar.Bd.Hover = a.Bar.Bd.Hover || i.Bar.Bd.Hover;
			a.Bar.Bg.Focus = a.Bar.Bg.Focus || i.Bar.Bg.Focus;
			a.Btn.btn = a.Btn.btn != undefined ? a.Btn.btn : i.Btn.btn;
			a.Fn = a.Fn || i.Fn; var b = this; var s, r = 0,
				j = 0;
			$(b).css({ overflow: "hidden", position: "relative", padding: "0px" }); var h = $(b).width(),
				g = $(b).height(); var t = a.W ? parseInt(a.W) : 21; var q = h - t; var e = a.Btn.btn == true ? t : 0; if($(b).children(".jscroll-con").height() == null) { $(b).wrapInner("<div class='jscroll-con' style=' float:left;top:0px;z-index:9999;zoom:1;position:relative;' ></div>");
				$(b).append("<div class='jscroll-e' unselectable='on' style=' height:100%;top:0px;right:0;-moz-user-select:none;position:absolute;overflow:hidden;z-index:10000;'><div class='jscroll-bar'  unselectable='on' style='background:green;position:absolute;left:0;-moz-user-select:none;border:1px solid'></div></div>") } var k = $(b).children(".jscroll-con"); var l = $(b).children(".jscroll-e"); var m = l.children(".jscroll-bar"); if($.browser.msie) { document.execCommand("BackgroundImageCache", false, true) } k.css({ "padding-right": t });
			l.css({ width: t, background: a.Bg, "background-image": a.BgUrl });
			m.css({ top: e, background: a.Bar.Bg.Out, "background-image": a.BgUrl, "border-color": a.Bar.Bd.Out, width: t - 2 });
			m.hover(function() { if(j == 0) { $(this).css({ background: a.Bar.Bg.Hover, "background-image": a.BgUrl, "border-color": a.Bar.Bd.Hover }) } }, function() { if(j == 0) { $(this).css({ background: a.Bar.Bg.Out, "background-image": a.BgUrl, "border-color": a.Bar.Bd.Out }) } }); var n = k.height(); var p = (g - 2 * e) * g / n; if(p < 10) { p = 10 } var u = p / 6; var f = 0,
				c = false;
			m.height(p); if(n <= g) { $(b).height(n);
				k.css({ padding: 0 });
				l.css({ display: "none" }) } else { c = true } if(a.Bar.Pos != "up") { f = g - p - e;
				o() } m.bind("mousedown", function(v) { j = 1;
				m.css({ background: a.Bar.Bg.Focus, "background-image": a.BgUrl }); var w = v.pageY,
					x = parseInt($(this).css("top"));
				$(document).mousemove(function(y) { f = x + y.pageY - w;
					o() });
				$(document).mouseup(function() { j = 0;
					m.css({ background: a.Bar.Bg.Out, "background-image": a.BgUrl, "border-color": a.Bar.Bd.Out });
					$(document).unbind() }); return false });
			b.timeSetT = function(v) { var w = this; if(v == "u") { f -= u } else { f += u } o();
				r += 2; var x = 500 - r * 50; if(x <= 0) { x = 0 } s = setTimeout(function() { w.timeSetT(v) }, x) };
			l.bind("mousedown", function(v) { a.Fn && a.Fn.call(b);
				f = f + v.pageY - m.offset().top - p / 2;
				d(); return false });

			function d() { if(f < e) { f = e } if(f > g - p - e) { f = g - p - e } m.stop().animate({ top: f }, 100); var v = -((f - e) * n / (g - 2 * e));
				k.stop().animate({ top: v }, 1000) }

			function o() { if(f < e) { f = e } if(f > g - p - e) { f = g - p - e } m.css({ top: f }); var v = -((f - e) * n / (g - 2 * e));
				k.css({ top: v }) } $(b).mousewheel(function() { if(c != true) { return } a.Fn && a.Fn.call(b); if(this.D > 0) { f -= u } else { f += u } o() }) }) } });