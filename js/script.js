$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

var $videoSrc;
$("btn-play").click(() => {
  $videoSrc = $(this).data("src");
});
$("#videoModal").on("shown.bs.modal", (e) => {
  $("#video").attr(
    "src",
    $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
  );
});
$("#videoModal").on("hide.bs.modal", function (e) {
  $("#video").attr("src", $videoSrc);
});
