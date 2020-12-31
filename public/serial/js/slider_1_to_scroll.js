
$('.autoplay').slick({
  slidesToShow: 4,
  slidesToScroll: 2,
  autoplay: false,
  autoplaySpeed: 2000,
  variableWidth: true,
});


$('.responsive').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 5 ,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1367,
      settings: {
        slidesToShow: 4.25,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
