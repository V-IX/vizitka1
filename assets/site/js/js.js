$(document).ready(function(){
/* Menu */
    $('.tmenuBtn').click(function () {
        el = $('.tmenu');
        if (el.hasClass('_open')) el.removeClass('_open');
        else el.addClass('_open');
    });
    $('.header-center-btn').click(function(){
		$(this).remove();
		$('.header-contacts .row').fadeIn(300);
	});
    $('.footer-center-btn').click(function(){
		$(this).remove();
		$('.footer-menu .row').fadeIn(300);
	});
})