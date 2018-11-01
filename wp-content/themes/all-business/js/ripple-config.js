/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.0
 * 
 * Theme Custom Scripts
 * Created by CMSMasters
 * 
 */


(function (window, $) {
	$(function() {
		$('.ripple').on('click', function (event) {
			
			var span = $('<span/>'),
			btnOffset = $(this).offset(),
					xPos = event.pageX - btnOffset.left,
					yPos = event.pageY - btnOffset.top;
			
			span.addClass('ripple-effect');
			var $ripple = $(".ripple-effect");
		  
			$ripple.css("height", $(this).height());
			$ripple.css("width", $(this).height());
			span
				.css({
					top: yPos - ($ripple.height()/2),
					left: xPos - ($ripple.width()/2),
					background: $(this).data("ripple-color")
				}) 
				.appendTo($(this));

			window.setTimeout(function(){
				span.remove();
			}, 300);
		});
	});
})(window, jQuery);
