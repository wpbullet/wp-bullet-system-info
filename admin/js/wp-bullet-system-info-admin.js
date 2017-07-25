(function( $ ) {
	'use strict';

    $(function() {
		$('#wp-system-info').on('click', '.system-info', function(e) {
            e.preventDefault();
            $('.wpb-loading-container').show();
            $('#wp-system-info .wpb-status').text('Fetching OS Information...');
			//$('#wp-system-info textarea').slideDown();
		});
	});

})( jQuery );
