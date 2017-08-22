jQuery(document).ready(function($){
	$('#login').on('click', 'h3', function() {
		$(this).next().slideToggle();
	});

	$('.show_seak_peak').click(function(){

		$('.sneak_peek_inner').toggleClass('active')
	});

	$('.category_box_outside').each(function(){
		var h = $(this).find('.rs_hide_name').text();

		if (h == 'Yes')
		{
			$(this).find('.category_product_title h3').hide();
		}
	})

	var h = $('.redshop').find('.rs_hide_name').text();

	if (h == 'Yes')
	{
		$('.redshop .product_name').hide();
	}
});