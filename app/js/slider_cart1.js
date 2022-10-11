jQuery(document).ready(function(){
	function htmSlider_cart(){
		/* Зададим следующие переменные */

		/* обертка слайдера */
		var slideWrap = $('.slide-wrap_cart');
		/* ссылки на предудыщий иследующий слайд */
		var nextLink = $('.next-slide_cart');
		var prevLink = $('.prev-slide_cart');
        var playLink = $('.auto');
		var is_animate = false;
		
		/* ширина слайда с отступами */
		var slideWidth = $('.slide-item_cart').outerWidth();
		
		/* смещение слайдера */
		var newLeftPos = slideWrap.position().left - slideWidth;
		
		/* Клик по ссылке на следующий слайд */
		nextLink.click(function(){
			if(!slideWrap.is(':animated')) {
	
				slideWrap.animate({left: newLeftPos}, 400, function(){
					slideWrap
						.find('.slide-item_cart:first')
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
					.find('.slide-item_cart:last')
					.prependTo(slideWrap)
					.parent()
					.animate({left: 0}, 400);

			}
		});
		
		
		/* Функция автоматической прокрутки слайдера */
		function autoplay(){
			if(!is_animate){
				is_animate = true;
				slideWrap.animate({left: newLeftPos}, 500, function(){
					slideWrap
						.find('.slide-item_cart:first')
						.appendTo(slideWrap)
						.parent()
						.css({'left': 0});
					is_animate = false;
				});
			}
		}
		
		/* Клики по ссылкам старт/пауза */
		playLink.click(function(){
			if(playLink.hasClass('play')){
				playLink.removeClass('play').addClass('pause');
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







