jQuery(document).ready(function() {
	jQuery('#faq h3').each(function() {
		var tis = jQuery(this), state = false, answer = tis.next('div').slideUp("fast");
		tis.click(function() {
			state = !state;
			answer.slideToggle(state);
			tis.toggleClass('active',state);
		});
	});
});