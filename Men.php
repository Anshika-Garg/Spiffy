<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spiffy</title>

  <!-- Bootstrap CSS -->
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="WOMEN/maincs.css">
  
  <script src="https://kit.fontawesome.com/dfb398067e.js" crossorigin="anonymous"></script>
</head>
<style>
    body{
        overflow-x:hidden;
    }
    .fl{
  display:flex;
  flex-direction:row;
  flex-wrap: wrap;
  justify-content: space-evenly;
  align-items: flex-start;
}
ul{
  list-style-type:none;
}
.product{
  width:250px;
}
.bord{
  border-radius:8px;
}
.set2{
  margin-bottom:40px;
  margin-top:0px;
}
*{
  outline:none;
}
.footer
        {
          margin-top:50px;
          background:#e6e8ed;
          color:#000;

        }
        
             
        <?php include("FooterStyle.css"); ?>
</style>
<body>
  <!--Navigation Bar-->

  <?php
        if(isset($_SESSION['e']))
            include("Header.php");
        else 
            include("Header2.php");
   ?>
  <!-- DESIGNING 3 CAROUSELS START-->
  <div style="top:95px;" id="carouselExampleIndicators" class="carousel slide carousel-fade container" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="UnderOffer.php?price=4000&cat=&category=M">
        <img class="d-block w-100" src="MEN/m1.jpeg" alt="First slide" height="auto" width="90%">
       
      </div>
      <div class="carousel-item">
      <a href="UnderOffer.php?price=4000&cat=&category=M">
        <img class="d-block w-100" src="MEN/m2.jpg" alt="Second slide" height="auto" width="90%">
        </a>
      </div>
      <div class="carousel-item">
      <a href="UnderOffer.php?price=4000&cat=&category=M">
        <img class="d-block w-100" src="MEN/m3.jpg" alt="Third slide" height="auto" width="90%">
      </a>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br><br><br><br><br><br><br>
  <!--CAROUSELS END -->

  <!--HEADING SHOP BY CATEGORY -->
  <div class="row">
  <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated" >
    <h1 class=" big">Shop By Category </h1>
    <h2 class=" mb-4">Shop By Category</h2>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </div>
  </div><br><br>
  <!--END OF HEADING-->


  <!-- CODE FOR MEN CATEGORIES START -->
  <div class="jumbotron" style="background-color:lightyellow;">
    <div class="row">
      <div class=col-md-1>
      </div>
      <div class="col-md-3 t">
        <a href="WomenDisplay.php?ee=MShirts&cat=Shirts" style="text-decoration:none;"><img src="MEN/shirt.jpg" class="rounded mx-auto d-block" height="auto" width="90%">
        <div class="bb"><h3 style="text-align:center; background-color:lemonchiffon; color:maroon; ">Shirts</h3>
        </a>
          </div>
      </div>
    
      
      <div class="col-md-3 t">
        <a href="WomenDisplay.php?ee=MTShirts&cat=T-Shirts" style="text-decoration:none;"><img src="MEN/tshirt.jpg" class="rounded mx-auto d-block" height="auto" width="90%">
        <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">T-Shirts</h3>
        </a>
      </div>
      <div class="col-md-3 t">
        <a href="WomenDisplay.php?ee=MJeans&cat=Jeans" style="text-decoration:none;"><img src="MEN/jeans.jpg" class="rounded mx-auto d-block" height="auto" width="90%">
        <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Jeans</h3>
        </a>
      </div>

    </div>
    <br><br>
    <div class="row">
      <div class=col-md-1>
      </div>
      <div class="col-md-3 t">
        <a href="WomenDisplay.php?ee=MTrousers&cat=Trousers" style="text-decoration:none;"> <img src="MEN/trouser.jpg" class="rounded mx-auto d-block" height="auto" width="90%">
        <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Trousers</h3>
        </a>
      </div>
      <div class="col-md-3 t">
        <a href="WomenDisplay.php?ee=MNightWear&cat=NightWear" style="text-decoration:none;"><img src="MenNight/slogan pj set a.webp" class="rounded mx-auto d-block" height="auto" width="90%">
        <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">NightWear</h3>
        </a>
      </div>
      <div class="col-md-3 t">
        <a href="WomenDisplay.php?ee=MKurtas&cat=Kurtas" style="text-decoration:none;"> <img src="MEN/kurta.jpg" class="rounded mx-auto d-block" height="auto" width="90%">
        <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Kurtas</h3>
        </a>
      </div>

    </div>
    <br><br><br>
    <div class="row">
      <div class=col-md-1>
      </div>
      <div class="col-md-3 t">
        <a href="WomenDisplay.php?ee=MJackets&cat=Jackets" style="text-decoration:none;"><img src="MEN/jacket.jpg" class="rounded mx-auto d-block" height="auto" width="90%">
        <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Jackets</h3>
        </a>
      </div>
      <div class="col-md-3 t">
        <a href="WomenDisplay.php?ee=MSweatshirts&cat=Sweatshirts" style="text-decoration:none;"> <img src="MEN/sweatshirt.jpg" class="rounded mx-auto d-block" height="auto" width="90%">
        <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Sweatshirts</h3>
        </a>
          
      </div>
      <div class="col-md-3 t">
        <a href="WomenDisplay.php?ee=MBlazers&cat=Blazers" style="text-decoration:none;"><img src="MEN/coat.jpg" class="rounded mx-auto d-block" height="auto" width="90%">
        <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Blazers</h3>
        </a>
      </div>

    </div>
  </div><br><br><br>
  <!--CODE FOR MEN CATEGORIES END-->
  <!--CODE FOR valuable offers heading start -->
  <div class="row">
    <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
      <h1 class="big11">VALUABLE OFFERS</h1>
      <h2 class="i11">VALUABLE OFFERS</h2>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </div>
  </div><br><br><br>
  <!--code for valuable offers heading end-->

 <!--code for offer sliders start -->
    <div class="row">
      <div class="banner1" style="margin-left:59px;">
          <div class="col-md-12 pl-0 mr-0">
              <div class="site-slider2 ">
                  <div class="row slider2 text-center">
                      <div class="col-md-2 product md-5 ml-0 pl-0">
                        <div class="mpp">
                        <a href="UnderOffer.php?price=499&cat=&category=M" style="text-decoration: none;"class="remove1">
                          <img src="MEN/s1.webP" class="set1" alt="">
                        </div>
                      
                          <div class="border site-btn btn-span set2">UNDER<sup>₹</sup>499 STORE <br> <p class="remove">+EXPLORE</p></a></div>
                    </div>
                    

                      <div class="col-md-2 product md-5 ml-0 pl-0">
                        <div class="mpp">
                        <a href="UnderOffer.php?price=699&cat=&category=M" style="text-decoration: none;"class="remove1">
                        <img src="MEN/s2.jpg" class="set1" alt="">
                        </div>
                          <div class="border site-btn btn-span set2">UNDER<sup>₹</sup>699 STORE <br> <p class="remove">+EXPLORE</p></a></div>
                    </div>

                      <div class="col-md-2 product md-5 ml-0 pl-0">
                        <div class="mpp">
                        <a href="UnderOffer.php?price=999&cat=&category=M" style="text-decoration: none;"class="remove1">
                          <img src="MEN/s3.jpg" class="set1" alt="">
                        </div>
                          <div class="border site-btn btn-span set2">UNDER<sup>₹</sup>999 STORE <br> <p class="remove">+EXPLORE</p></a></div>
                    </div>


                      <div class="col-md-2 product md-5 ml-0 pl-0">
                        <div class="mpp">
                        <a href="UnderOffer.php?price=1999&cat=&category=M" style="text-decoration: none;"class="remove1">
                          <img src="MEN/s4.jpg" class="set1" alt="">
                        </div>
                          <div class="border site-btn btn-span set2">UNDER<sup>₹</sup>1999 STORE<br> <p class="remove">+EXPLORE</p></a></div>
                    </div>


                      <div class="col-md-2 product md-5 ml-0 pl-0">
                        <div class="mpp">
                        <a href="CarousalW.php?price=&cat=" style="text-decoration: none;" class="remove1">
                          <img src="MEN/s5.jpg" class="set1" alt="">
                        </div>
                          <div class="border site-btn btn-span set2">FLAT 50% OFF <br> <p class="remove">+EXPLORE</p></a></div>
                    </div>

                      <div class="col-md-2 product md-5 ml-0 pl-0">
                        <div class="mpp">
                        <a href="CarousalW.php?price=&cat=" style="text-decoration: none;" class="remove1">
                          <img src="MEN/s6.jpg" class="set1" alt="">
                        </div>
                          <div class="border site-btn btn-span set2">FLAT 40% OFF <br> <p class="remove">+EXPLORE</p></a></div>
                    </div>

                  </div>

              </div>

          </div>
          <div class="slider-btn">
              <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
              <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
          </div>

      </div>
  </div> <br><br><br>
  <!-- code for offers sliders end-->

  <!--CODE FOR HEADING SUMMER TREND start-->
  <div class="row">
    <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
      <h1 class="big1">SUMMER TRENDS</h1>
      <h2 class="i1">SUMMER TRENDS</h2>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </div>
  </div>
  <!--CODE FOR HEADING SUMMER TREND end-->

  <!--CODE FOR HEADING SUMMER TREND carousels start-->

  <div style="top:70px;" id="carouselExampleControls" class="carousel slide container" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
      <a href="UnderOffer.php?price=4000&cat=&category=M">
        <img class="d-block w-100" src="MEN/1a.jpg" alt="First slide" height="auto" width="90%">
      </a>

      </div>
      <div class="carousel-item">
      <a href="UnderOffer.php?price=4000&cat=&category=M">
        <img class="d-block w-100" src="MEN/2a.jpg" alt="Second slide" height="auto" width="90%">
      </a>
      </div>
      <div class="carousel-item">
      <a href="UnderOffer.php?price=4000&cat=&category=M">
        <img class="d-block w-100" src="MEN/3a.jpg" alt="Third slide" height="auto" width="90%">
      </a>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br><br><br><br>
  <!--CODE FOR HEADING SUMMER TREND carousels end-->

  <!--CODE FOR SUMMER TRENDS START-->
  <div class="row">
            <div class="banner1"  style="background-color:lightyellow; margin-top:55px;">
                <div class="col-12 ">
                    <ul class="fl">
                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=212" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenTrouser/white printed joggers a.jpg" height="auto" width="90%" onmouseover="this.src='MenTrouser/white printed joggers c.jpg'" onmouseout="this.src='MenTrouser/white printed joggers a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">White Printed Joggers</small>
                                    <p><b>₹699</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=180" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenBlazer/Striped Single-Breasted Casual Blazer a.jpg" height="auto" width="90%" onmouseover="this.src='MenBlazer/Striped Single-Breasted Casual Blazer c.jpg'" onmouseout="this.src='MenBlazer/Striped Single-Breasted Casual Blazer a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Striped Single-Breasted Casual Blazer</small>
                                    <p><b>₹1989</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=197" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenKurta/straight assymetric kurta a.jpg" height="auto" width="90%" onmouseover="this.src='MenKurta/straight assymetric kurta d.jpg'" onmouseout="this.src='MenKurta/straight assymetric kurta a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Straight Asymmetric Kurta</small>
                                    <p><b>₹1899</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=213" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenNight/chevron print set a.WebP" height="auto" width="90%" onmouseover="this.src='MenNight/chevron print set b.webp'" onmouseout="this.src='MenNight/chevron print set a.WebP'">
                                    <div class="set2">
                                    <small style="color:gray;">Chevron Print Set</small>
                                    <p><b>₹799</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=253" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenShirt/purple slim shirt a (1).jpg" height="auto" width="90%" onmouseover="this.src='MenShirt/purple slim shirt d (1).jpg'" onmouseout="this.src='MenShirt/purple slim shirt a (1).jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Purple Slim Shirt</small>
                                    <p><b>₹1989</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=261" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenJean/blue distressable jeans a.jpg" height="auto" width="90%" onmouseover="this.src='MenJean/blue distressable jeans c.jpg'" onmouseout="this.src='MenJean/blue distressable jeans a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Blue Distressable Jeans</small>
                                    <p><b>₹1099</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=231" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenTee/colorblock hooded tshirt a.jpg" height="auto" width="90%" onmouseover="this.src='MenTee/colorblock hooded tshirt d.jpg'" onmouseout="this.src='MenTee/colorblock hooded tshirt a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Colorblack Hooded T-Shirt</small>
                                    <p><b>₹1299</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=227" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenNight/vertical stripe set a.WebP" height="auto" width="90%" onmouseover="this.src='MenNight/vertical stripe set b.WebP'" onmouseout="this.src='MenNight/vertical stripe set a.WebP'">
                                    <div class="set2">
                                    <small style="color:gray;">Vertical Stripe Set</small>
                                    <p><b>₹899</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=272" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenJean/tapered jeans a.jpg" height="auto" width="90%" onmouseover="this.src='MenJean/tapered jeans c.jpg'" onmouseout="this.src='MenJean/tapered jeans a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Tapered Jeans</small>
                                    <p><b>₹879</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=237" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenTee/white green tshirt a.jpg" height="auto" width="90%" onmouseover="this.src='MenTee/white green tshirt d.jpg'" onmouseout="this.src='MenTee/white green tshirt a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">White Green T-Shirt</small>
                                    <p><b>₹889</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=256" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenShirt/solid formal shirt a (1).jpg" height="auto" width="90%" onmouseover="this.src='MenShirt/solid formal shirt d (1).jpg'" onmouseout="this.src='MenShirt/solid formal shirt a (1).jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Solid Formal Shirt</small>
                                    <p><b>₹1109</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=222" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenNight/scroll print set a.WebP" height="auto" width="90%" onmouseover="this.src='MenNight/scroll print set b.WebP'" onmouseout="this.src='MenNight/scroll print set a.WebP'">
                                    <div class="set2">
                                    <small style="color:gray;">Scroll Print Set</small>
                                    <p><b>₹899</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=187" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenKurta/fusion straight kurta a.jpg" height="auto" width="90%" onmouseover="this.src='MenKurta/fusion straight kurta d.jpg'" onmouseout="this.src='MenKurta/fusion straight kurta a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Fusion Straight Kurta</small>
                                    <p><b>₹2809</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=169" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenBlazer/Black Printed Waistcoat a.jpg" height="auto" width="90%" onmouseover="this.src='MenBlazer/Black Printed Waistcoat b.jpg'" onmouseout="this.src='MenBlazer/Black Printed Waistcoat a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Black Printed Waistcoat</small>
                                    <p><b>₹1999</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=205" style="text-decoration:none; color:black;">
                                        <img class="bord" src="MenTrouser/grey sweatpants a.jpg" height="auto" width="90%" onmouseover="this.src='MenTrouser/grey sweatpants c.jpg'" onmouseout="this.src='MenTrouser/grey sweatpants a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Green Solid Sweatpants</small>
                                    <p><b>₹1089</b></p>
                                    </div></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
      </div>
      <?php include("Footer.php"); ?>
  <!--CODE FOR SUMMER TRENDS END-->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="WOMEN/mainjs.js"></script>
</body>

</html>
