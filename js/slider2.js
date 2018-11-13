// animation after transition ends
// indicators works properly

$('.carousel').on('slid.bs.carousel', function () {
  var carouselData = $(this).data('bs.carousel');
  var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));
  $('.result p').removeClass('active-p');
  $('.result p').eq(currentIndex ).addClass('active-p');
});