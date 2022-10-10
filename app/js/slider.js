jQuery(document).ready(function(){
	function htmSlider_cart(){
		/* Зададим следующие переменные */

		/* обертка слайдера */
		var slideWrap1 = $('.slide-wrap_cart');
		/* ссылки на предудыщий иследующий слайд */
		var nextLink1 = $('.next-slide_cart');
		var prevLink1 = $('.prev-slide_cart');
        var playLink1 = $('.auto');
		var is_animate = false;
		
		/* ширина слайда с отступами */
		var slideWidth1 = $('.slide-item_cart').outerWidth();
		
		/* смещение слайдера */
		var newLeftPos = slideWrap1.position().left - slideWidth1;
		
		/* Клик по ссылке на следующий слайд */
		nextLink1.click(function(){
			if(!slideWrap1.is(':animated')) {
	
				slideWrap1.animate({left: newLeftPos}, 600, function(){
					slideWrap1
						.find('.slide-item_cart:first')
						.appendTo(slideWrap1)
						.parent()
						.css({'left': 0});
				});

			}
		});

		/* Клик по ссылке на предыдующий слайд */
		prevLink1.click(function(){
			if(!slideWrap1.is(':animated')) {
			
				slideWrap1
					.css({'left': newLeftPos})
					.find('.slide-item_cart:last')
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
						.find('.slide-item_cart:first')
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
				jQuery('.arrow_cart').addClass('disable');
				timer = setInterval(autoplay, 1000);
			} else {
				playLink1.removeClass('pause').addClass('play');
				jQuery('.arrow_cart').removeClass('disable');
				clearInterval(timer);
			}
		});

	}
	htmSlider_cart();
	});








