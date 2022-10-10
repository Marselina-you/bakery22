 jQuery(document).ready(function(){
			function htmSlider_sm(){
		/* Зададим следующие переменные */

		/* обертка слайдера */
		var slideWrap1 = $('.slide_sm');
		/* ссылки на предудыщий иследующий слайд */
		var nextLink1_sm = $('.next-photo');
		var prevLink1_sm = $('.prev-photo');
        var playLink1 = $('.auto');
		var is_animate = false;
		
		/* ширина слайда с отступами */
		var slideWidth1 = $('.slide-item_sm').outerWidth();
		
		/* смещение слайдера */
		var newLeftPos = slideWrap1.position().left - slideWidth1;
		
		/* Клик по ссылке на следующий слайд */
		nextLink1_sm.click(function(){
			if(!slideWrap1.is(':animated')) {
	
				slideWrap1.animate({left: newLeftPos}, 600, function(){
					slideWrap1
						.find('.slide-item_sm:first')
						.appendTo(slideWrap1)
						.parent()
						.css({'left': 0});
				});

			}
		});

		/* Клик по ссылке на предыдующий слайд */
		prevLink1_sm.click(function(){
			if(!slideWrap1.is(':animated')) {
			
				slideWrap1
					.css({'left': newLeftPos})
					.find('.slide-item_sm:last')
					.prependTo(slideWrap1)
					.parent()
					.animate({left: 0}, 600);

			}
		});
		
		
		/* Функция автоматической прокрутки слайдера */
		function autoplay(){
			if(!is_animate){
				is_animate = true;
				slideWrap1.animate({left: newLeftPos}, 500, function(){
					slideWrap1
						.find('.slide-item_sm:first')
						.appendTo(slideWrap1)
						.parent()
						.css({'left': 0});
					is_animate = false;
				});
			}
		}
		
		/* Клики по ссылкам старт/пауза */
		playLink1.click(function(){
			if(playLink1.hasClass('play')){
				playLink1.removeClass('play').addClass('pause');
				jQuery('.arrow_sm').addClass('disable');
				timer = setInterval(autoplay, 1000);
			} else {
				playLink1.removeClass('pause').addClass('play');
				jQuery('.arrow_sm').removeClass('disable');
				clearInterval(timer);
			}
		});

	}
	/* иницилизируем функцию слайдера */
	htmSlider_sm();
});







