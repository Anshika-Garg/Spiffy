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
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">


    <script src="https://kit.fontawesome.com/dfb398067e.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Baloo Bhai 2', cursive;
            height: auto;
            overflow-x:hidden;
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

        /*------------------------Gives Heading-----------------------------------*/

        .heading-section .big {
            font-family: "Lato", Arial, sans-serif;
            position: absolute;
            text-transform: uppercase;
            top: -46px;
            left: 0;
            right: 0;
            font-size: 90px;
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
            top: 140px;
            height: auto;
        }

        @media (max-width: 1300px) {
            .heading-section .big {
                display: none;
            }
        }
        .head{
            position:absolute;
            top:95px;
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
        }
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


    <!--//Navigation Bar\\-->

    <!--Shop By Category Heading-->
    <div class="container-fluid pl-0 pr-0 c1">
        <div class="row">
                <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated "
                    style="position: relative; margin-bottom: 30px;">
                    <h1 class="big" id="hide"><?php echo $category; ?></h1>
                    <h2 class="mb-4" style="color:  rgb(72, 29, 112);"><?php echo $category; ?></h2>
                </div>
        </div>
        <div class="row">
            <div class="banner1">
                <div class="col-12 ">
                    <ul class="fl">
                        <?php while($row=$rs->fetch_array())
                        {   ?>
                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=<?php echo $row[0]; ?>" style="text-decoration:none; color:black;">
                                        <img class="bord" src="<?php echo $row[4];?>" height="auto" width="90%" onmouseover="this.src='<?php echo $row[5];?>'" onmouseout="this.src='<?php echo $row[4];?>'">
                                <div class="set2">
                                    <small style="color:gray;"><?php echo $row[1]; ?> </small>
                                    <p><b>₹<?php echo $row[2]; ?></b></p>
                                </div></a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--//Shop By Category Heading-->
    <script>
        

    
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  
</body>

</html>