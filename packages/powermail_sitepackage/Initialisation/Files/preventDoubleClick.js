jQuery(document).ready(function($) {
	$('.powermail_form').submit(function() {
		$('*[type="submit"]').val('...').prop('disabled', 'disabled');
	});
});
