/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'ptpNova\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-mail' : '&#xe000;',
			'icon-mail-2' : '&#xe001;',
			'icon-envelop' : '&#xe002;',
			'icon-envelope' : '&#xe003;',
			'icon-print' : '&#xe004;',
			'icon-mobile' : '&#xe005;',
			'icon-phone' : '&#xe006;',
			'icon-phone-2' : '&#xe007;',
			'icon-support' : '&#xe008;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};