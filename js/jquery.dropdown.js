(function($){

$.fn.extend({
	dropdown: function(o){
		var o = $.extend({ maxHeight: 600, buffer: 100, delay: 500 }, o);
		
		return this.each(function(){
			var li = $(this),
				a = li.find('a'),
				liheight = li.height(),
				ul = li.find('ul').css({ top: liheight }),
				range = ul.height() - o.maxHeight;
			
			if(!ul.length){ return; }
			
			li.hoverdelay(function(){
					ul.stop(true,true).slideDown('fast');
					a.addClass('hover'); // *after* animation stop
					if(range <= 0){ return; }
					li.css({ height: o.maxHeight + liheight, overflow: 'hidden' });
				},
				function(){
					// put things back to normal
					ul.stop(true,true).slideUp('fast', function(){
						li.height(liheight);
						a.removeClass('hover');
					});
				},
				{ delay: o.delay });
			
			if(range <= 0){ return; }
			
			var litop = li.offset().top;
			
			li.mousemove(function(e){
					var pos = e.pageY - litop - liheight - o.buffer,
						ratio = Math.max(pos, 0) / (o.maxHeight - liheight - 2 * o.buffer);
					ul.css({ top: liheight - (range * Math.min(ratio, 1)) });
				});
		});
	}
});

})(jQuery);
