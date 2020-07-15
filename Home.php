<?php
    session_start();
    include('DatabaseConnection.php');

    if(isset($_SESSION['e']))
   { $v=$_SESSION['e'];
    $sq="select * from login where Email='$v'";
    $rs=$ref->query($sq);
    $row=$rs->fetch_array();
   }
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
    <link rel="stylesheet" type="text/css" href="Home/slick.css" />


    <script src="https://kit.fontawesome.com/dfb398067e.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Baloo Bhai 2', cursive;
            height: auto;
           
        }
       
        /*----------------------NAVIGATION BAR---------------------------- */

        /*Box Shadow to Navigation Bar*/
        .cont {
            width: 100%;
            height: 71px;
            box-shadow: 0px 7px 9px #e1e3e6 !important;
            position: fixed;
            font-weight: 650;
            z-index: 45;
        }


        /*Border and Box Shadow of Search Bar*/
        .change {
            border: 1px solid #fc2779;
        }

        [type=search]:focus {
            border: 2px solid #fc2779;
            box-shadow: 0 0 5px #fc2779;

        }

        /*Alligning left to Login, signup, wishlist, cart in desktop mode*/
        @media (min-width: 800px) {
            #ss {
                margin-right: 30px;
            }
        }

        /*----------------------//NAVIGATION BAR\\---------------------------- */



        /*----------Setting Width and Height of Images of Men and Women----------*/
        .w {
            height: 202px;
            background-color: blueviolet;
        }

        .wc {
            height: auto;
            width: 100%;
        }

        .m {
            height: 201px;
            background-color: rgb(129, 122, 136);
        }

        .mc {
            height: auto;
            width: 100%;
        }

        .set {
            width: 100%;
            height: auto;
        }


        .carousel1 {

            padding: 0px;
        }

        /*------------//Setting Width and Height of Images of Men and Women-----------*/




        /*------------------------Gives Heading-----------------------------------*/

        .heading-section .big {
            font-family: "Lato", Arial, sans-serif;
            position: absolute;
            top: -57px;
            left: 0;
            right: 0;
            font-size: 103px;
            color: rgba(0, 0, 0, 0.09);
            font-weight: 800;
            letter-spacing: 1px;
        }

        .heading-section h2 {
            font-size: 30px;
            font-weight: 600;
            color: #fc2779;
            position: relative;
            text-transform: uppercase;
            font-family: "Roboto Condensed", Arial, sans-serif;
            letter-spacing: 6px;
        }

        .c1 {
            position: absolute;
            top: 95px;
            height: auto;
            overflow: hidden;
        }

        @media (max-width: 1300px) {
            .heading-section .big {
                display: none;
            }
        }

        /*------------------------//Gives Heading--------------------------------*/

        .banner1 {

            position: relative;
            margin-left: 35px;
            margin-right: 35px;
            overflow: hidden;
            width: 100%;
            height: auto;
        }

        .set1 {
            transition: all 0.6 ease-in-out;
            border-radius: 10px;
        }

        .set1:hover {

            transform: scale(1.1);
            border-radius: 10px;
        }

        /*Women Section*/
        .product-large h2 {
            color: rgb(43, 4, 43);
            font-size: 55px;
            font-weight: 900;
            margin-bottom: 18px;
        }

        .product-large a {
            font-size: 25px;
            color: white;
            font-weight: 900;
            margin-bottom: 18px;
        }

        .product-large a:hover {
            color: blue;
        }

        .centered {
            position: absolute;
            top: 50%;

            left: 20%;
        }

        .womenslide {
            margin-top: 110px;
        }

        .set2 {
            margin-top: 15px;
            font-size: 30px;
        }

        .remove {
            text-decoration: none;
            color: rgb(72, 29, 112);
        }
        .remove:hover{
            color: #fc2779;
        }
        .remove1{
            color: #fc2779;
        }
        .remove1:hover{
            color:rgb(72, 29, 112);
        }
        /*//Women Section*/

        /*Men Section*/

        .centered2{
            position: absolute;
            top: 50%;
            left: 30%;
        }

        .menslide {
            margin-top: 174px;
        }
        /*//Men Section*/

        .centered3{
            position: absolute;
            top: 39%;
            left: 37%;
        }
        .t{
            color: white;
        }
        .centered4{
            position: absolute;
            top: 39%;
            left: 28%;
          
        }
        .hide2{
            overflow: hidden;
        }

        .user{
            position:fixed;
            width:auto;
            border-radius:10px;
            height:50px;
            bottom:11px;
            right:13px;
            background-color:black;
            animation-name:ex;
            animation-duration:8s;
            padding:12px;
            opacity:0;
        }
       <?php 
        if(isset($_SESSION['key']))
        {
            if($_SESSION['key']==1)
            {
        ?>
        @keyframes ex{
            from{opacity:0;}
            to{opacity:1;}
        }
        <?php
        } }?>

        
        .bo{
            font-size:39px;
            font-weight:bold;
            color:#f8f9fa;
        }
        .centered5{
            position: absolute;
            top: 33%;
            left: 25%;
        }
        .centered6{
            position: absolute;
            top: 80%;
            left: 37%;
        }
        *{
            outline:none;
        }
        .ch1,.ch2{
            font-size: 39px; 
        }
        
        @media screen and (max-width: 800px) {
            .bo,h4,h5,h1{
               font-size:25px;
           }
           .t{
                color:black;
            }
           
        }
        @media (min-width: 450px) and (max-width: 800px) {
           .x{
                margin-left:150px;
            }
           .x2{
               margin-top:100px;
           }
        }
        @media (min-width: 768px) and (max-width: 1024px) {
            .ch1,.ch2{
                font-size:25px;
            }
        }
        @media screen and (max-width: 426px) {
            .cent5{
                margin:10px 0;
            }
           .x2{
               margin-top:50px;
           }
           
        }
        @media screen and (max-width: 320px) {
            #h4{
                display:none;
            }
            .centered2{
                margin-right:121px;
            }
           
        }

        .footer
        {
          margin-top:50px;
          background:#e6e8ed;
          color:#000;

        }
        
             
        <?php include("FooterStyle.css"); ?>

    </style>
</head>

<body>
    <!--Navigation Bar-->

   <?php
        if(isset($_SESSION['e']))
            include("Header.php");
        else 
        include("Header2.php");
   ?>

    <!--//Navigation Bar-->

       
       
        <div class="container-fluid pl-0 pr-0 c1">
            <!--Sliders And Categories-->
            <div class="row">
                <div class="col-md-10  carousel1" style="padding: 0px;">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active  set1">
                                <a href="CarousalW.php?price=2000&cat=">
                                <img src="Home/Slider.jpg" class="d-block w-100 set img-fluid img-responsive" alt="..." >
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="bo"  style="color:white;background-color:black;padding-bottom:10px;">PAY LESS GET MORE</h5>
                                </div>
                                </a>
                            </div>
                            <div class="carousel-item set1">
                                <a href="CarousalSet.php?price=2000&cat=">
                                <img src="Home/Slider2.jpg" class="d-block w-100 set img-fluid" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="bo" style="color:white;background-color:black;padding-bottom:10px;">Luxury you deserve, prices you can afford</h5>
                                </div>
                            </a>
                            </div>
                            <div class="carousel-item set1">
                                <a href="CarousalW.php?price=2000&cat=">
                                <img src="Home/Slider3.png" class="d-block w-100 set img-fluid" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="bo" style="color:white;background-color:black;padding-bottom:10px;">High expectations, low cost</h5>
                                </div>
                                </a>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <!--Link to Men and women section-->
                <div class="col-md-2" style="padding: 0px;">
                <a href="Women.php" >
                    <img src="Home/Women (2).jpg" class="wc d-block w-100 set  img-fluid img-responsive cent5">
                    <div class="centered5">
                                <h2 style="color:white; font-weight: bolder;font-style: italic;" class="ch1">Women</h2>
                    </div>
                </a>
                <a href="Men.php">
                    <img src="Home/Men.jpg" class="mc d-block w-100 set  img-fluid img-responsive">
                    <div class="centered6">
                                <h2 style=" color:white; font-weight: bolder;font-style: italic;" class="ch2">Men</h2>
                    </div>
        	    </a>
                </div>
            </div>
            <!--//Sliders and Categories-->

            <!--Trending Heading-->
            <div class="row">
                <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated "
                    style="position: relative; margin-top: 95px; margin-bottom: 61px;">
                    <h1 class="big" id="hide">TRENDING</h1>
                    <h2 class="mb-4">TRENDING</h2>
                </div>
            </div>
            <!--//Trending Heading -->

            <!--Trending Categories-->
            <div class="row">
                <div class="banner1" style="margin-left:59px;">
                    <div class="col-md-12 pl-0 mr-0 text-center">
                        <div class="site-slider2 ">
                            <div class="row slider2 text-center">

                            <?php $sq="select * from women ORDER BY RAND() LIMIT 6";
                                  $rs=$ref->query($sq);
                                while($r1=$rs->fetch_array())
                                {
                            ?>
                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                <a href="ProductView.php?r=<?php echo $r1[0]; ?>"
                                        style="text-decoration: none;"  class="remove1">
                                    <div class="hide2 set1">
                                    <img src="<?php echo $r1[4]; ?>"  alt="">
                                    <div class="border site-btn btn-span"><?php echo $r1[1]; ?> <br> <p class="remove">&#x20b9 <?php echo $r1[2]; ?></p></div>
                                        </div>
                                        </a>
                                </div>
                                <?php } ?>
                                
                            </div>

                        </div>

                    </div>
                    <div class="slider-btn">
                        <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
                        <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
                    </div>

                </div>
            </div>
            <!--//Trending Categories-->

            <!--Shop By Category Heading-->
            <div class="row">
                <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated "
                    style="position: relative; margin-top: 95px; margin-bottom: 61px;">
                    <h1 class="big" id="hide">SHOP BY CATEGORY</h1>
                    <h2 class="mb-4" style="color:  rgb(72, 29, 112);">SHOP BY CATEGORY</h2>
                </div>
            </div>
            <!--//Shop By Category Heading-->

            <!--Women Categories-->
            <div class="row">
                <div class="banner1" style="margin-left:59px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 pr-0 pl-0 x">
                                <div class="product-large">
                                    <img src="Home/Women.jpg" alt="" class="img-fluid img-responsive">
                                    <div class="centered">
                                        <h2>Women</h2>
                                        <a href="Women.php">Discover More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 pl-0 pr-0">
                                <div class="womenslide" style="margin-left:20px;">
                                    <div class="col-md-12 pl-0 mr-0">
                                        <div class="site-slider2 ">
                                            <div class="row slider3 text-center">

                                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                                    <a href="WomenDisplay.php?ee=Dresses&cat=Dresses" style="text-decoration: none;"  class="remove">
                                                    <div class="hide2">
                                                    <img src="Home/Women Categories\Dresses.jpg" class="set1" alt=""></div>
                                                    <div class="border site-btn btn-span set2">
                                                          Dresses</div></a>
                                                </div>

                                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                                    <a href="WomenDisplay.php?ee=Skirts&cat=Skirts" style="text-decoration: none;"  class="remove">
                                                    <div class="hide2">
                                                    <img src="Home/Women Categories\Skirts.jpg" class="set1" alt=""></div>
                                                    <div class="border site-btn btn-span set2">Skirts</div></a>
                                                </div>

                                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                                    <a href="WomenDisplay.php?ee=Sweatshirts&cat=Sweatshirts" style="text-decoration: none;"  class="remove">
                                                    <div class="hide2">
                                                    <img src="Home/Women Categories\sweatshirts.jpg" class="set1" alt=""></div>
                                                    <div class="border site-btn btn-span set2">Sweatshirts</div></a>
                                                </div>


                                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                                    <a href="WomenDisplay.php?ee=Sarees&cat=Sarees" style="text-decoration: none;"  class="remove">
                                                    <div class="hide2">
                                                    <img src="Home/Women Categories/saree.png" class="set1" alt=""></div>
                                                    <div class="border site-btn btn-span set2"><a href=""
                                                        style="text-decoration: none;"     class="remove">Sarees</div></a>
                                                </div>


                                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                                    <a href="WomenDisplay.php?ee=Tops&cat=Tops" style="text-decoration: none;"  class="remove">

                                                    <div class="hide2">
                                                    <img src="Home/Women Categories\Top2.jpg" class="set1" alt=""></div>
                                                    <div class="border site-btn btn-span set2">Tops</div></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-btn">
                                        <span class="prev1 position-top1"><i class="fas fa-chevron-left"></i></span>
                                        <span class="next1 position-top1 right-01"><i
                                                class="fas fa-chevron-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <!--//Women Categories-->

            <!--New Arrivals -->
                <div class="row">
                    <div class="banner1" id="h4" style="top: 100px;right:10px; margin-bottom: 200px;">
                        <div class="container-fluid">
                            <a style="text-decoration:none;" href="CarousalSet.php?price=4000&cat=New Arrivals">
                            <img src="Home/New.png" alt="">
                            <div class="centered3">
                                <h2 style="font-size: 50px;  font-weight: bolder;font-style: italic;"> <span style="color:black;"> New </span><span class="t"> Arrivals</span></h2>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            <!--//New Arrivals -->

            <!--Men Categories-->
            <div class="row">
                <div class="banner1" style="margin-left:59px;">
                    <div class="container-fluid pl-0 pr-0">
                        <div class="row">
                            <div class="col-lg-8 pl-0 pr-0">
                                <div class="menslide">
                                    <div class="col-md-12 pl-0 mr-0">
                                        <div class="site-slider2 ">
                                            <div class="row slider4 text-center">
                                                
                                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                                    <div class="hide2">
                                                        <a href="WomenDisplay.php?ee=MJackets&cat=Jackets" style="text-decoration: none;"  class="remove">
                                                    <img src="Home/Men Categories/Jackets.jpg" class="set1" alt="">
                                                    </div>
                                                    <div class="border site-btn btn-span set2">Jackets</div></a>
                                                </div>

                                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                                    <div class="hide2">
                                                        <a href="WomenDisplay.php?ee=MBlazers&cat=Blazers" style="text-decoration: none;"  class="remove">
                                                    <img src="Home/Men Categories/Suit.jpg" class="set1" alt=""></div>
                                                    <div class="border site-btn btn-span set2">Blazers</div></a>
                                                </div>

                                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                                    <div class="hide2">
                                                        <a href="WomenDisplay.php?ee=MSweatshirts&cat=Sweatshirts" style="text-decoration: none;"  class="remove">
                                                    <img src="Home/Men Categories/Sweatshirts.jpg" class="set1" alt=""></div>
                                                    <div class="border site-btn btn-span set2">Sweatshirts</div></a>
                                                </div>


                                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                                    <div class="hide2">
                                                        <a href="WomenDisplay.php?ee=MJeans&cat=Jeans" style="text-decoration: none;"  class="remove">
                                                    <img src="Home/Men Categories/Trousers.jpg" class="set1" alt=""></div>
                                                    <div class="border site-btn btn-span set2">Jeans</div></a>
                                                </div>


                                                <div class="col-md-2 product md-5 ml-0 pl-0">
                                                    <div class="hide2">
                                                        <a href="WomenDisplay.php?ee=MTShirts&cat=T-Shirts" style="text-decoration: none;"  class="remove">
                                                    <img src="Home/Men Categories/Tshirts2.jpg" class="set1" alt=""></div>
                                                    <div class="border site-btn btn-span set2">T-Shirts</div></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-btn">
                                        <span class="prev2 position-top2"><i class="fas fa-chevron-left"></i></span>
                                        <span class="next2 position-top2 right-02"><i
                                                class="fas fa-chevron-right"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 pr-0 pl-0 text-center x2" >
                                <div class="product-large">
                                    <img src="Home/Manc.jpg" alt="" class="img-fluid img-responsive"style="">
                                    <div class="centered2">
                                        <h2 style="margin-left: 25px;">Men</h2>
                                        <a href="Men.php" style="margin-left: 15px;">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//Men Categories-->

            <!--Footer-->
         <?php include("Footer.php"); ?>
            <!--//Footer-->

        </div>
        <?php if(isset($_SESSION['e']) && $_SESSION['key']==1) {  $_SESSION['key']=0; ?> 
        <div class="user text-center" id="u">
           
            <p style="color:white;">Welcome, <?php echo $row[1];   ?></p>
           
        </div>
        <?php } ?>

        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!--Slick Slider-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--Slick Slider-->
    <script type="text/javascript" src="Home/main.js"></script>
</body>

</html>