(function(u, v) {
	function B(e, f) { var g = e.createElement("p"),
			h = e.getElementsByTagName("head")[0] || e.documentElement; return g.innerHTML = "x<style>" + f + "</style>", h.insertBefore(g.lastChild, h.firstChild) }

	function C() { var b = F.elements; return typeof b == "string" ? b.split(" ") : b }

	function D(d) { var e = {},
			h = d.createElement,
			i = d.createDocumentFragment,
			j = i();
		d.createElement = function(b) { F.shivMethods || h(b); var c; return e[b] ? c = e[b].cloneNode() : y.test(b) ? c = (e[b] = h(b)).cloneNode() : c = h(b), c.canHaveChildren && !x.test(b) ? j.appendChild(c) : c }, d.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + C().join().replace(/\w+/g, function(b) { return e[b] = h(b), j.createElement(b), 'c("' + b + '")' }) + ");return n}")(F, j) }

	function E(c) { var d; return c.documentShived ? c : (F.shivCSS && !z && (d = !!B(c, "article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}audio{display:none}canvas,video{display:inline-block;*display:inline;*zoom:1}[hidden]{display:none}audio[controls]{display:inline-block;*display:inline;*zoom:1}mark{background:#FF0;color:#000}")), A || (d = !D(c)), d && (c.documentShived = d), c) }

	function J(g) { var h, i = g.getElementsByTagName("*"),
			j = i.length,
			k = RegExp("^(?:" + C().join("|") + ")$", "i"),
			l = []; while(j--) { h = i[j], k.test(h.nodeName) && l.push(h.applyElement(K(h))) } return l }

	function K(f) { var g, h = f.attributes,
			i = h.length,
			j = f.ownerDocument.createElement(H + ":" + f.nodeName); while(i--) { g = h[i], g.specified && j.setAttribute(g.nodeName, g.nodeValue) } return j.style.cssText = f.style.cssText, j }

	function L(g) { var h, i = g.split("{"),
			j = i.length,
			k = RegExp("(^|[\\s,>+~])(" + C().join("|") + ")(?=[[\\s,>+~#.:]|$)", "gi"),
			l = "$1" + H + "\\:$2"; while(j--) { h = i[j] = i[j].split("}"), h[h.length - 1] = h[h.length - 1].replace(k, l), i[j] = h.join("}") } return i.join("{") }

	function M(c) { var d = c.length; while(d--) { c[d].removeNode() } }

	function N(f) { var g, h, i = f.namespaces,
			j = f.parentWindow; return !I || f.printShived ? f : (typeof i[H] == "undefined" && i.add(H), j.attachEvent("onbeforeprint", function() { var a, b, c, m = f.styleSheets,
				n = [],
				o = m.length,
				p = Array(o); while(o--) { p[o] = m[o] } while(c = p.pop()) { if(!c.disabled && G.test(c.media)) { for(a = c.imports, o = 0, b = a.length; o < b; o++) { p.push(a[o]) } try { n.push(c.cssText) } catch(q) {} } } n = L(n.reverse().join("")), h = J(f), g = B(f, n) }), j.attachEvent("onafterprint", function() { M(h), g.removeNode(!0) }), f.printShived = !0, f) } var w = u.html5 || {},
		x = /^<|^(?:button|form|map|select|textarea|object|iframe)$/i,
		y = /^<|^(?:a|b|button|code|div|fieldset|form|h1|h2|h3|h4|h5|h6|i|iframe|img|input|label|li|link|ol|option|p|param|q|script|select|span|strong|style|table|tbody|td|textarea|tfoot|th|thead|tr|ul)$/i,
		z, A;
	(function() { var a = v.createElement("a");
		a.innerHTML = "<xyz></xyz>", z = "hidden" in a, z && typeof injectElementWithStyles == "function" && injectElementWithStyles("#modernizr{}", function(c) { c.hidden = !0, z = (u.getComputedStyle ? getComputedStyle(c, null) : c.currentStyle).display == "none" }), A = a.childNodes.length == 1 || function() { try { v.createElement("a") } catch(b) { return !0 } var d = v.createDocumentFragment(); return typeof d.cloneNode == "undefined" || typeof d.createDocumentFragment == "undefined" || typeof d.createElement == "undefined" }() })(); var F = { elements: w.elements || "abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video", shivCSS: w.shivCSS !== !1, shivMethods: w.shivMethods !== !1, type: "default", shivDocument: E };
	u.html5 = F, E(v); var G = /^$|\b(?:all|print)\b/,
		H = "html5shiv",
		I = !A && function() { var a = v.documentElement; return typeof v.namespaces != "undefined" && typeof v.parentWindow != "undefined" && typeof a.applyElement != "undefined" && typeof a.removeNode != "undefined" && typeof u.attachEvent != "undefined" }();
	F.type += " print", F.shivPrint = N, N(v) })(this, document);