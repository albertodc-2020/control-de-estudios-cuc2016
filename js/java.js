$(function() {
		var Menuacordeon = function(el, multiple){
			this.el = el || {};
			this.multiple = multiple || false;
			
			var links = this.el.find('.link');

			links.on('click',{el:this.el,multiple: this.multiple},this.dropdown)
			el,multiple.stopPropagation();
		}
		 Menuacordeon.prototype.dropdown = function(e) {
		 	 var $el = e.data.el;
		 	 	$this = $(this),
		 	 	$next = $this.next();
		 	 $next.slideToggle();
		 	 $this.parent().toggleClass('abierto');	

		 	 if (!e.data.multiple) {
		 	 	$el.find('.submenu').not($next).slideUp().parent().removeClass('abierto');
		 	 };
		 }

		var menuacordeon = new Menuacordeon ($('#menuacordeon'),false);
});