var MainModule = (function($) {
	
	var init = function init() {
		console.log('Hello world');
	};

	return {
		init: init
	}

})(jQuery);

(function($) {

	$(document).ready( function() {
		MainModule.init();
	});

})(jQuery);