window.onload = function() {
	$('#example_subscription').example(function() {
		return $(this).attr('title');
	}, {
		className: 'example'
	});
}