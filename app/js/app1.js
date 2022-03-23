$(document).ready(function() {
	 function htmSlider(){
		/* Зададим следующие переменные */

		/* обертка слайдера */
		var slideWrap = jQuery('.slide-wrap');
		/* ссылки на предудыщий иследующий слайд */
		var nextLink = jQuery('.next-slide');
		var prevLink = jQuery('.prev-slide');
        var is_animate = false;
		/* ширина слайда с отступами */
		var slideWidth = jQuery('.slide-item').outerWidth();
		/* смещение слайдера */
		var newLeftPos = slideWrap.position().left - slideWidth;
		/* Клик по ссылке на следующий слайд */
		nextLink.click(function(){
			if(!slideWrap.is(':animated')) {
				slideWrap.animate({left: newLeftPos}, 500, function(){
					slideWrap
						.find('.slide-item:first')
						.appendTo(slideWrap)
						.parent()
						.css({'left': 0});
					});
			}
		});
/* Клик по ссылке на предыдующий слайд */
		prevLink.click(function(){
			if(!slideWrap.is(':animated')) {
				slideWrap
					.css({'left': newLeftPos})
					.find('.slide-item:last')
					.prependTo(slideWrap)
					.parent()
					.animate({left: 0}, 500);
				}
		});
		/* Клики по ссылкам старт/пауза */
		playLink.click(function(){
			if(playLink.hasClass('play')){
				playLink.removeClass('play').addClass('pause');
				jQuery('.navy').addClass('disable');
				timer = setInterval(autoplay, 1000);
			} else {
				playLink.removeClass('pause').addClass('play');
				jQuery('.navy').removeClass('disable');
				clearInterval(timer);
			}
		});

	}
/* иницилизируем функцию слайдера */
	htmSlider();


});