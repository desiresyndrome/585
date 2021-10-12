// Добавляем класс для вызова попапа
$(document).ready(function(){
	$(".click-pop").click(function(){
		$("#window").toggleClass("active-pop"); 
		$("#bg-popup").toggleClass("active-pop"); return false;
	});
});


// Задаем класс при скроле
$(window).scroll(function() {
	var height = $(window).scrollTop();
	if(height > 30){
		$('.my-active').addClass('activete');
	} else{
		$('.my-active').removeClass('activete');
	}
});

 
// Плавная прокрутка Вверх
(function () {
	var $totop = $('.tops');
	var isScrolling = false;
	var scrollThreshold = 600;
	var scrollDuration = 900;
	var showedClass = 'tops-active';
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > scrollThreshold) {
			$totop.addClass(showedClass);
		} else {
			$totop.removeClass(showedClass);
		}
	});
	$totop.on('click', function (e) {
		e.preventDefault();
		if (!isScrolling) {
			isScrolling = true;
			$("html, body").animate({scrollTop: 0}, scrollDuration, function () {
				isScrolling = false;
			});
		}
	});
})();

  