(function($){

$.fn.extend({
	hoverdelay: function(fin, fout, o){
		return this.each(function(){
			var timeout, self = $(this),
				o = $.extend({ delay: 500 }, o);
			
			function clear(){
				if(!timeout){ return; }
				window.clearTimeout(timeout);
				timeout = null;
			}
			
			function delay(f, evt){
				clear();
				timeout = window.setTimeout(
					function(){
						(f || function(){}).call(self[0], evt);
					},
					o.delay);
			}
			
			self.click(function(e){
				clear();
				(fin || function(){}).call(self[0], e);
			})
			.hover(function(e){ delay(fin,e); }, function(e){ delay(fout,e); });
		});
	}
});

})(jQuery);
