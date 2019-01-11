$(".slideshow").slick({
arrows: false,
dots: true,
infinite: true,
speed: 300,
slidesToShow: 1,
centerMode: true,
variableWidth: true
});

$('.card .flipper').click(function() {
	$(this).closest('.card').toggleClass('hover');
    $(this).css('transform, rotateY(180deg)');
});
