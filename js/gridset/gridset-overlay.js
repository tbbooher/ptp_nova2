// Gridset Overlay JS

gs = {

	init: function () {
		
		if (window.location.href.match('gridset=show')) gs.show();
	
		gs.bind(document, 'keydown', function (e) { 
		
			if (!e) var e = window.event;
		
			if(e.metaKey || e.ctrlKey) {
				
				switch (e.which || e.keyCode) {
					case 71:
					
						var gw = document.querySelectorAll('.gridsetoverlaywrap, #gridsetoverlaystyles, #gridscreenwidthwrap');
					
						if (gw.length == 0) window.location.href = window.location.href + '?gridset=show';
						else window.location.href = window.location.href.replace('?gridset=show', '');
						
						gs.prevent(e);
						break;
						
				}
				
			}
		
		
		});
	
	},
	
	width: function () {
		
		var swv = document.getElementById('gridscreenwidthval');
		if (swv) swv.innerHTML = window.innerWidth + 'px';
		
	},

	show: function () {
	
		var b = document.getElementsByTagName('body')[0],
				gridareas = document.querySelectorAll('[class*=-showgrid]'),
				areacount = gridareas.length,
				wrapper = document.querySelectorAll('.wrapper'),
			
				styles = '.gridsetoverlaywrap{padding:0 !important;display:block;position:absolute;top:0;left:0;width:100%;height:100%;z-index:10000;pointer-events:none;}.gridsetnoareas .gridsetoverlaywrap{position:fixed;}.gridwrap{padding:0 !important;display:block;position:absolute;top:0;left:0;width:100%;height:100%;font-family:Helvetica, Arial, sans-serif !important;}.gridoverlay{padding:0 !important;position:relative;height:100%;overflow:hidden !important;background:none !important;}.gridoverlay .gridset{padding:0 !important;position:absolute;width:100%;height:100%;top:0;left:0;opacity:0.8; display:block;}.gridoverlay .gridset div{padding:0;text-align:left;font-size:10px !important;border:1px solid #FFD800 !important;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;height:100%;}.gridoverlay .gridset > div{border:none !important;height:100%;position:absolute;top:0;left:0;width:100%;}.gridoverlay div small{width:100%;display:block;text-align:center;font-weight:400 !important;letter-spacing: 1px !important;padding-top:0 !important;text-transform:none !important;height:22px !important;line-height:22px !important;text-style:normal !important;border-bottom:1px solid #FFD800 !important;color:#333 !important;background-color:#FFF79F !important;}.gridoverlay .gridset > div:nth-child(2){padding-top:23px !important;}.gridoverlay .gridset > div:nth-child(2) small{border-bottom:1px dashed #FFD800 !important;}.gridoverlay .gridset > div:nth-child(2) > div{border:1px dashed #FFD800 !important;}.gridoverlay .gridset > div:nth-child(3){padding-top:45px !important;}.gridoverlay .gridset > div:nth-child(3) small{border-bottom:1px dotted #FFD800 !important;}.gridoverlay .gridset > div:nth-child(3) > div{border:1px dotted #FFD800 !important;}.gridoverlay .gridset > div:nth-child(4){padding-top:67px !important;}.gridoverlay .gridset > div:nth-child(4) small{border-bottom:1px double #FFD800 !important;}.gridoverlay .gridset > div:nth-child(4) > div{border:1px double #FFD800 !important;}.gridsetoverlaywrap .noshow{display:none;}#gridscreenwidthwrap{margin:0 !important;padding:0 !important;display:none;width:100%;position:fixed !important;z-index:10000 !important;bottom:0 !important;left:0 !important;height:30px !important;opacity:0.95;border-top:1px solid #FFD800 !important;color:#333;background-color:#FFF79F !important;font-family:Helvetica, Arial, sans-serif !important;}#gridscreenwidth{margin:0 !important;display:block;width:100% !important;max-width:none !important;text-align:center !important;font-size:12px;line-height:1;padding-top:8px !important;}#gridscreenwidth strong{text-transform:none;}',
				
				newstyles = document.createElement('style'),
				newwidth = document.createElement('div'),
				head = document.getElementsByTagName('head'),
				newfavicon = document.createElement('link'),
				newgsstyles = document.createElement('link');
		
		newstyles.id = 'gridsetoverlaystyles';
		newstyles.innerHTML = styles;
		newstyles.type = 'text/css';
		
		newwidth.id = 'gridscreenwidthwrap';
		newwidth.innerHTML = '<p id="gridscreenwidth">Screen width: <strong id="gridscreenwidthval"></strong></p>';
		
		b.appendChild(newstyles);
		b.appendChild(newwidth);
		
		var newwidthdisplay = (newwidth.currentStyle) ? newwidth.currentStyle.display : getComputedStyle(newwidth, null).display;
		
		newfavicon.rel = "shortcut icon";
		newfavicon.id = "gridsetfavicon";
		newfavicon.href = "http://dev.gridsetapp.com/app/img/favicon.ico";
		
		head[0].appendChild(newfavicon);
		
		if (newwidthdisplay != 'block') {
		
			newgsstyles.rel = "stylesheet";
			newgsstyles.id = "gridsetstyles";
			newgsstyles.href = "https://get.gridsetapp.com/23622/";
			head[0].appendChild(newgsstyles);
		
		}
		
		if (areacount) {
			
			var j = areacount;
			
			while (j-- > 0) {
			
				var area = gridareas[j];
			
				gs.buildgrid(area, j, areacount);
				
				if (window.getComputedStyle(area,null).getPropertyValue("position") == 'static') area.style.position = 'relative';
				
			}
			
		}
		else {
			
			if (!b.className.match('gridsetnoareas')) b.className += ' gridsetnoareas';
			
			gs.buildgrid(b, j, areacount);
		
		}
		
		gs.width();
		gs.bind(window, 'resize', gs.width);
	
	},
	
	buildgrid: function (area, j, showgrid) {
		
		var set = JSON.parse('{"id":"23622","name":"PTP","widths":{"320":{"width":320,"grids":{"m":{"name":"Mobile","prefix":"m","width":320,"columns":{"m1":{"name":"m1","unit":"%","percent":99.84375,"px":319.5}},"gutter":{"unit":"px","px":20,"percent":6.25},"ratio":{"name":"even","value":1}}}},"960":{"width":960,"grids":{"d":{"name":"Desktop","prefix":"d","width":960,"columns":{"d1":{"name":"d1","unit":"%","percent":6.41927083,"px":61.63},"d2":{"name":"d2","unit":"%","percent":6.41927083,"px":61.62},"d3":{"name":"d3","unit":"%","percent":6.41927083,"px":61.62},"d4":{"name":"d4","unit":"%","percent":6.41927083,"px":61.62},"d5":{"name":"d5","unit":"%","percent":6.41927083,"px":61.62},"d6":{"name":"d6","unit":"%","percent":6.41927083,"px":61.62},"d7":{"name":"d7","unit":"%","percent":6.41927083,"px":61.62},"d8":{"name":"d8","unit":"%","percent":6.41927083,"px":61.62},"d9":{"name":"d9","unit":"%","percent":6.41927083,"px":61.62},"d10":{"name":"d10","unit":"%","percent":6.41927083,"px":61.62},"d11":{"name":"d11","unit":"%","percent":6.41927083,"px":61.62},"d12":{"name":"d12","unit":"%","percent":6.41927083,"px":61.62}},"gutter":{"unit":"px","px":20,"percent":2.08333333},"ratio":{"name":"even","value":1}}}}},"prefixes":{"index":["m","d"],"320":["m"],"960":["d"]}}'),
		
				gridwrap = document.createElement('div'),
				gridinner = (showgrid) ? '<div class="gridwrap"><div class="gridoverlay">' : '<div class="gridwrap"><div class="gridoverlay wrapper">',
				
				awidth = area.clientWidth,
				apadleft = (parseFloat(gs.getstyle(area, 'padding-left')) / awidth) * 100,
				apadright = (parseFloat(gs.getstyle(area, 'padding-right')) / awidth) * 100;
		
		if (showgrid) gridwrap.className = 'gridsetoverlaywrap';
		else gridwrap.className = 'gridsetoverlaywrap';
		
		for (w in set.widths) {
			
			var width = set.widths[w],
					hides = '';
			
			for (p in set.prefixes) {
				
				if (p != w && p != 'index') hides += set.prefixes[p][0] + "-hide ";
				
			}
			
			gridinner += '<div class="gridset ' + hides + '">';
			
			for (j in width.grids) {
			
				var grid = width.grids[j],
						showreg = new RegExp('(^| )' + grid.prefix + '-showgrid( |$)');
				
				if (!showgrid || area.className.match(showreg)) {
				
					gridinner += '<div style="padding-left:' + apadleft + '%;padding-right:' + apadright + '%;">';
					
					for (k in grid.columns) {
						
						var col = grid.columns[k];
						
						gridinner += '<div class="' + col.name + '"><small>' + col.name + '</small></div>';
					
					}
					
					gridinner += '</div>';
				
				}
			}
			
			gridinner += '</div>';
		
		}
		
		gridinner += '</div></div>';
		
		gridwrap.innerHTML = gridinner;
		
		area.appendChild(gridwrap);
		
	},
	
	bind : function (t, e, f) {
		
		if (t.attachEvent) t.attachEvent('on' + e, f);
		else t.addEventListener(e, f, false);
	
	},
	
	prevent : function (e) {
	
		if (e.preventDefault) e.preventDefault();
		else event.returnValue = false;
	
	},
	
	getstyle : function (t, p){
	
	 if (t.currentStyle) return t.currentStyle[p];
	 else if (document.defaultView && document.defaultView.getComputedStyle) return document.defaultView.getComputedStyle(t, "").getPropertyValue(p);
	 else return t.style[p];
	 
	}


};

gs.init();