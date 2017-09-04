jQuery.fn.rotate=function(a, i, j, e) {
	var f=this.get(0);
	if(!i) {
		f.angle=((f.angle==undefined?0: f.angle)+a)%360
	}
	else {
		f.angle=a
	}
	if(f.angle>=0) {
		var g=Math.PI*f.angle/180
	}
	else {
		var g=Math.PI*(360+f.angle)/180
	}
	var d=Math.round(Math.cos(g)*1000)/1000;
	var h=Math.round(Math.sin(g)*1000)/1000;
	if(document.all&&!window.opera) {
		var b=document.createElement("img");
		b.src=f.src;
		b.height=e;
		b.width=j;
		b.style.filter="progid:DXImageTransform.Microsoft.Matrix(M11="+d+",M12="+(-h)+",M21="+h+",M22="+d+",SizingMethod='auto expand')"
	}
	else {
		var b=document.createElement("canvas");
		if(!f.oImage) {
			b.oImage=new Image();
			b.oImage.src=f.src
		}
		else {
			b.oImage=f.oImage
		}
		b.style.width=b.width=Math.abs(d*j)+Math.abs(h*e);
		b.style.height=b.height=Math.abs(d*e)+Math.abs(h*j);
		var c=b.getContext("2d");
		c.save();
		if(g<=Math.PI/2) {
			c.translate(h*e, 0)
		}
		else {
			if(g<=Math.PI) {
				c.translate(b.width, -d*e)
			}
			else {
				if(g<=1.5*Math.PI) {
					c.translate(-d*j, b.height)
				}
				else {
					c.translate(0, -h*j)
				}
			}
		}
		c.rotate(g);
		c.drawImage(b.oImage, 0, 0, j, e);
		c.restore()
	}
	b.id=f.id;
	b.angle=f.angle;
	f.parentNode.replaceChild(b, f)
}

;
jQuery.fn.rotateRight=function(a, d, c, b) {
	this.rotate(a==undefined?90: a, d, c, b)
}

;
jQuery.fn.rotateLeft=function(a, d, c, b) {
	this.rotate(a==undefined?-90: -a, d, c, b)
}

;