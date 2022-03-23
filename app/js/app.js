/* Открытие меню */
var main = function() { //главная функция

    $('.page-title-header__menu').click(function() { /* выбираем класс icon-menu и
               добавляем метод click с функцией, вызываемой при клике */

        $('.wrap-menu').animate({ //выбираем класс menu и метод animate

            right: '0px' /* теперь при клике по иконке, меню, скрытое за
               левой границей на 285px, изменит свое положение на 0px и станет видимым */

        }, 600); //скорость движения меню в мс
        
        $('body').animate({ //выбираем тег body и метод animate

            right: '305px' /* чтобы всё содержимое также сдвигалось вправо
               при открытии меню, установим ему положение 285px */

        }, 600); //скорость движения меню в мс
    });


/* Закрытие меню */

    $('.icon-close').click(function() { //выбираем класс icon-close и метод click

        $('.wrap-menu').animate({ //выбираем класс menu и метод animate

            right: '-305px' /* при клике на крестик меню вернется назад в свое
               положение и скроется */

        }, 600); //скорость движения меню в мс
        
    $('body').animate({ //выбираем тег body и метод animate

            right: '0px' //а содержимое страницы снова вернется в положение 0px

        }, 600); //скорость движения меню в мс
    });
};

$(document).ready(main); /* как только страница полностью загрузится, будет
               вызвана функция main, отвечающая за работу меню */


 $(document).ready(function() {
	 function htmSlider(){
		/* Зададим следующие переменные */

		/* обертка слайдера */
		var slideWrap = $('.slide-wrap');
		/* ссылки на предудыщий иследующий слайд */
		var nextLink = $('.next-slide');
		var prevLink = $('.prev-slide');
        var is_animate = false;
		/* ширина слайда с отступами */
		var slideWidth = $('.slide-item').outerWidth();
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