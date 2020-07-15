$('.slider2').slick({
    
    dots:false,
    prevArrow:".prev",
    nextArrow:".next",
    slidesToShow:4,
    slidesToScroll:1,
    autoplaySpeed:3000,
    rows:1,
    autoplay:true,

    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]


});
