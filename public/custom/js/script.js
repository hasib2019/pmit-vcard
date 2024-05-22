$(document).ready(function() {
	$('.popup-gallery').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a.icon', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
	});
	$(document).on('click','.faq-find',function(){
		if($(this).hasClass('collapsed')){
			$(this).find('.svg-inline--fa').addClass('fa-plus-square').removeClass('fa-minus-square');
			$(this).removeClass('open')
		}else{
			$(this).find('.svg-inline--fa').removeClass('fa-plus-square').addClass('fa-minus-square')
			$(this).addClass('open');
		}
	});
});