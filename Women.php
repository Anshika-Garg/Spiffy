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
    <div style="top:95px;" id="carouselExampleFade" class="carousel slide carousel-fade container" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active t text-block">
                <a href="CarousalW.php?price=4000&cat=">
                <img src="WOMEN/11.jpg" height="auto" width="90%" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item t">
                <a href="WomenDisplay.php?ee=Kurtis&cat=Kurtis">
                <img src="WOMEN/222.jpg" height="auto" width="90%" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item t">
                <a href="CarousalW.php?price=4000&cat=">
                <img src="WOMEN/33.jpeg" height="auto" width="90%" class="d-block w-100" alt="...">
                </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><br><br><br><br><br><br><br>
    <!--CAROUSELS END -->

    <!--HEADING SHOP BY CATEGORY -->
    <div class="row">
        <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
            <h1 class=" big">Shop By Category </h1>
            <h2 class=" mb-4">Shop By Category</h2>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </div>
    </div><br><br>
    <!--END OF HEADING-->


    <!-- CODE FOR WOMEN CATEGORIES START -->
    <div class="jumbotron" style="background-color:lightyellow;">
        <div class="row">
            <div class=col-md-1>
            </div>
            <div class="col-md-3 t">
                <a href="WomenDisplay.php?ee=Tops&cat=Tops" style="text-decoration:none;"><img src="WOMEN/tops.webP" class="rounded mx-auto d-block" height="auto" width="90%">
                <div class="bb">
                    <h3 style="text-align:center; background-color:lemonchiffon; color:maroon; ">Tops</h3></a>
                </div>
            </div>
            <div class="col-md-3 t">
                <a href="WomenDisplay.php?ee=Jeans&cat=Jeans" style="text-decoration:none;"><img src="WOMEN/jeansn.webP" class="rounded mx-auto d-block" height="auto"
                        width="90%">
                <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Jeans</h3></a>
            </div>
            <div class="col-md-3 t">
                <a href="WomenDisplay.php?ee=Dresses&cat=Dresses" style="text-decoration:none;"><img src="WOMEN/dress.webP" class="rounded mx-auto d-block" height="auto"
                        width="90%">
                <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Dresses</h3></a>
            </div>

        </div>
        <br><br>
        <div class="row">
            <div class=col-md-1>
            </div>
            <div class="col-md-3 t">
                <a href="WomenDisplay.php?ee=Kurtis&cat=Kurtis" style="text-decoration:none;"> <img src="WOMEN/kurti.webP" class="rounded mx-auto d-block" height="auto" width="90%">
                <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Kurtis</h3></a>
            </div>
            <div class="col-md-3 t">
                <a href="WomenDisplay.php?ee=Sarees&cat=Sarees" style="text-decoration:none;"><img src="WOMEN/sarr.jpg" class="rounded mx-auto d-block" height="auto" width="90%">
                <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Sarees</h3></a>
            </div>
            <div class="col-md-3 t">
                <a href="WomenDisplay.php?ee=Skirts&cat=Skirts" style="text-decoration:none;"> <img src="WOMEN/SKIRT.jpg" class="rounded mx-auto d-block" height="auto"
                        width="90%">
                <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Skirts</h3></a>
            </div>

        </div>
        <br><br><br>
        <div class="row">
            <div class=col-md-1>
            </div>
            <div class="col-md-3 t">
                <a href="WomenDisplay.php?ee=Jackets&cat=Jackets" style="text-decoration:none;"><img src="WOMEN/jacket.jpg" class="rounded mx-auto d-block" height="auto"
                        width="90%">
                <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Jackets</h3></a>
            </div>
            <div class="col-md-3 t">
                <a href="WomenDisplay.php?ee=Sweatshirts&cat=Sweatshirts" style="text-decoration:none;"> <img src="WOMEN/sweat.jpg" class="rounded mx-auto d-block" height="auto"
                        width="90%">
                <h3 style="text-align:center
          ; background-color:lemonchiffon; color:maroon;">Sweatshirts</h3></a>
            </div>
            <div class="col-md-3 t">
                <a href="WomenDisplay.php?ee=NightWear&cat=NightWear" style="text-decoration:none;"><img src="WOMEN/WEAR.webP" class="rounded mx-auto d-block" height="auto" width="90%">
                <h3 style="text-align:center; background-color:lemonchiffon; color:maroon;">Night Wear</h3></a>
            </div>

        </div>
    </div><br><br><br>
    <!--CODE FOR WOMEN CATEGORIES END-->

    <!--code for valuable offers heading start-->

    <div class="row">
        <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
            <h1 class="big11">VALUABLE OFFERS</h1>
            <h2 class="i11">VALUABLE OFFERS</h2>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </div>
    </div><br><br><br>
    <!--code for valuable offers heading end-->


    <!-- code for offers sliders start-->
    <div class="row">
        <div class="banner1" style="margin-left:59px;">
            <div class="col-md-12 pl-0 mr-0">
                <div class="site-slider2 ">
                    <div class="row slider2 text-center">
                        <div class="col-md-2 product md-5 ml-0 pl-0">
                            <div class="mpp">
                            <a href="UnderOffer.php?price=499&cat=&category=W" style="text-decoration: none;"class="remove1">
                                <img src="WOMEN/bpi.webP" class="set1" alt="">
                            </div>

                            <div class="border site-btn btn-span set2">
                                    UNDER<sup>₹</sup>499 STORE <br>
                                    <p class="remove">+EXPLORE</p>
                                </a></div>
                        </div>


                        <div class="col-md-2 product md-5 ml-0 pl-0">
                            <div class="mpp">
                            <a href="UnderOffer.php?price=699&cat=&category=W" style="text-decoration: none;" class="remove1">
                                <img src="WOMEN/bps.webP" class="set1" alt="">
                            </div>
                            <div class="border site-btn btn-span set2">UNDER<sup>₹</sup>699 STORE <br>
                                    <p class="remove">+EXPLORE</p>
                                </a></div>
                        </div>

                        <div class="col-md-2 product md-5 ml-0 pl-0">
                            <div class="mpp">
                            <a href="UnderOffer.php?price=999&cat=&category=W" style="text-decoration: none;" class="remove1">
                                <img src="WOMEN/pq.jpg" class="set1" alt="">
                            </div>
                            <div class="border site-btn btn-span set2">UNDER<sup>₹</sup>999 STORE <br>
                                    <p class="remove">+EXPLORE</p>
                                </a></div>
                        </div>


                        <div class="col-md-2 product md-5 ml-0 pl-0">
                            <div class="mpp">
                            <a href="UnderOffer.php?price=1999&cat=&category=W" style="text-decoration: none; " class="remove1">
                                <img src="WOMEN/kitu.jpg" class="set1" alt="">
                            </div>
                            <div class="border site-btn btn-span set2">UNDER<sup>₹</sup>1999 STORE<br>
                                    <p class="remove">+EXPLORE</p>
                                </a></div>
                        </div>


                        <div class="col-md-2 product md-5 ml-0 pl-0">
                            <div class="mpp">
                            <a href="CarousalW.php?price=&cat=" style="text-decoration: none;" class="remove1">
                                <img src="WOMEN/ipi.webP" class="set1" alt="">
                            </div>
                            <div class="border site-btn btn-span set2">FLAT 50% OFF <br>
                                    <p class="remove">+EXPLORE</p>
                                </a></div>
                        </div>

                        <div class="col-md-2 product md-5 ml-0 pl-0">
                            <div class="mpp">
                            <a href="CarousalW.php?price=&cat=" style="text-decoration: none;" class="remove1">
                                <img src="WOMEN/bella.webP" class="set1" alt="">
                            </div>
                            <div class="border site-btn btn-span set2">FLAT 40% OFF <br>
                                    <p class="remove">+EXPLORE</p>
                                </a></div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="slider-btn">
                <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
                <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
            </div>

        </div>
    </div><br><br><br><br>
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
    <div style="top:60px;" id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="CarousalW.php?price=4000&cat=">
                <img src="WOMEN/ts1.jpeg" class="d-block w-100" src="..." alt="First slide" height="auto" width="90%">
                </a>
            </div>
            <div class="carousel-item">
                <a href="CarousalW.php?price=4000&cat=">
                <img src="WOMEN/ts2.jpeg" class="d-block w-100" src="..." alt="Second slide" height="auto"
                    width="90%">
                </a>
            </div>
            <div class="carousel-item">
                <a href="CarousalW.php?price=4000&cat=">
                <img src="WOMEN/ts3.jpg" class="d-block w-100" src="..." alt="Third slide" height="auto" width="90%">
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
    <br><br><br>
    <!--CODE FOR HEADING SUMMER TREND carousels end-->

    <!--CODE FOR SUMMER TRENDS START-->
    <div class="row">
            <div class="banner1"  style="background-color:lightyellow; margin-top:55px;">
                <div class="col-12 ">
                    <ul class="fl">
                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=3" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenSmall/3.webP" height="auto" width="90%" onmouseover="this.src='WomenSmall/3a.webP'" onmouseout="this.src='WomenSmall/3.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Ruffle Sleeve Crop Top</small>
                                    <p><b>₹800</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=17" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenJeans/5 pocket jeans a.webP" height="auto" width="90%" onmouseover="this.src='WomenJeans/5 pocket jeans b.webP'" onmouseout="this.src='WomenJeans/5 pocket jeans a.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Pocket Jeans</small>
                                    <p><b>₹1299</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=10" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenSmall/11.webP" height="auto" width="90%" onmouseover="this.src='WomenSmall/11a.webP'" onmouseout="this.src='WomenSmall/11.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Mock Neck Glitter Black Top</small>
                                    <p><b>₹1999</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=37" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenDress/floral print dress a.webP" height="auto" width="90%" onmouseover="this.src='WomenDress/floral print dress b.webP'" onmouseout="this.src='WomenDress/floral print dress a.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Floral Print Dress</small>
                                    <p><b>₹1049</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=31" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenJeans/split leg jeans a.webP" height="auto" width="90%" onmouseover="this.src='WomenJeans/split leg jeans b.webP'" onmouseout="this.src='WomenJeans/split leg jeans a.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Split Leg Jeans</small>
                                    <p><b>₹3999</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=59" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenSaree/ready to wear saree a.jpg" height="auto" width="90%" onmouseover="this.src='WomenSaree/ready to wear saree b.jpg'" onmouseout="this.src='WomenSaree/ready to wear saree a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Ready To Wear Saree</small>
                                    <p><b>₹3999</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=44" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenDress/tie hem dress a.webP" height="auto" width="90%" onmouseover="this.src='WomenDress/tie hem dress b.webP'" onmouseout="this.src='WomenDress/tie hem dress a.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Tie Hem Dress</small>
                                    <p><b>₹1299</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=64" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenKurti/blue kurta a.jpg" height="auto" width="90%" onmouseover="this.src='WomenKurti/blue kurta d.jpg'" onmouseout="this.src='WomenKurti/blue kurta a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Blue Kurta</small>
                                    <p><b>₹799</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=86" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenSkirt/maxi skirt a.webP" height="auto" width="90%" onmouseover="this.src='WomenSkirt/maxi skirt d.webP'" onmouseout="this.src='WomenSkirt/maxi skirt a.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Maxi Skirt</small>
                                    <p><b>₹1699</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=127" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenNight/cotton pj set a.webP" height="auto" width="90%" onmouseover="this.src='WomenNight/cotton pj set b.webP'" onmouseout="this.src='WomenNight/cotton pj set a.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Cotton PJ Set</small>
                                    <p><b>₹1119</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=132" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenNight/pink tee shorts set a.webP" height="auto" width="90%" onmouseover="this.src='WomenNight/pink tee shorts set b.webP'" onmouseout="this.src='WomenNight/pink tee shorts set a.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Pink Tee Shorts Set</small>
                                    <p><b>₹2199</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=83" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenSkirt/fringe pencil skirt a.webP" height="auto" width="90%" onmouseover="this.src='WomenSkirt/fringe pencil skirt d.webP'" onmouseout="this.src='WomenSkirt/fringe pencil skirt a.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Fringe Pencil Skirt</small>
                                    <p><b>₹2499</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=76" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenKurti/yoke design kurta a.jpg" height="auto" width="90%" onmouseover="this.src='WomenKurti/yoke design kurta d.jpg'" onmouseout="this.src='WomenKurti/yoke design kurta a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Yoke Design Kurta</small>
                                    <p><b>₹1759</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=52" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenSaree/embroidered saree a.jpg" height="auto" width="90%" onmouseover="this.src='WomenSaree/embroidered saree b.jpg'" onmouseout="this.src='WomenSaree/embroidered saree a.jpg'">
                                    <div class="set2">
                                    <small style="color:gray;">Embroided Saree</small>
                                    <p><b>₹1559</b></p>
                                    </div></a>
                            </div>
                        </li>

                        <li class="product">
                            <div class="pro">                                       
                                    <a href="#" style="text-decoration:none; color:black;">
                                        <img class="bord" src="WomenDress/leopard print dress a.webP" height="auto" width="90%" onmouseover="this.src='WomenDress/leopard print dress b.webP'" onmouseout="this.src='WomenDress/leopard print dress a.webP'">
                                    <div class="set2">
                                    <small style="color:gray;">Leopard Print Dress</small>
                                    <p><b>₹1449</b></p>
                                    </div></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <!--CODE FOR SUMMER TRENDS END-->

    <?php include("Footer.php"); ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="WOMEN/mainjs.js"></script>
</body>

</html>