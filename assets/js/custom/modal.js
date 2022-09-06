
/**
 * JQuery - Method created to test if an element exists
 */

(function($) {
	$.fn.exists = function() {
	  return $(this).length > 0 ? true : false;
	}
})(window.jQuery);

$(document).ready(function(){
	if($("#modal_position").exists()){
		$("#modal_position").modal();
	}
});