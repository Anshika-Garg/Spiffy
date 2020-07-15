

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

$('.slider3').slick({
    
    dots:false,
    prevArrow:".prev1",
    nextArrow:".next1",
    slidesToShow:3,
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


$('.slider4').slick({
    
  dots:false,
  prevArrow:".prev2",
  nextArrow:".next2",
  slidesToShow:3,
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

