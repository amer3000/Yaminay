var $j = jQuery.noConflict();



$j(document).ready(function(){
	//$j('div.post div.entry p a').attr('href', '#');

	$j('div.post div.entry p a img').click(function(){
		jQuery('#image_click_dialog').fadeIn('slow');
		setTimeout("jQuery('#image_click_dialog').fadeOut('slow');", 4000)
		return false;
	});
});
