<?php
    session_start();
    $r=$_GET['r'];
    include("DatabaseConnection.php");
    $sq="select * from women where Sno=$r";
    $ro=$ref->query($sq);
    $row=$ro->fetch_array();
    $_SESSION['setid']=$row[0];
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
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">


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

        .newarrival{
            background:green;
            width:50px;
            color:white;
            font-size:12px;
            font-weight:bold;
        }
        .hea{
            color:#555;
        }
        .price{
            color:black;
            font-size:26px;
            font-weight:bolder;
            padding-top:20px;
        }
        .opt{
            border:1px solid #ccc;
            font-weight: bold;
            height:33px;
            text-align:center;
            width:30px;
        }
        .cart{
            background-color:#fc2779;
            border-radius:5px;
            border:none;
            padding:8px;
            width:95%;
            color: #fff;
            font-weight:500;
            font-size:25px;
        }
        .cart:hover {
            color: white;
            background-color: #880436;
        }
        .wish{
            background-color:rgb(72, 29, 112);
            border: none;
            border-radius:5px;
            padding:8px;
            width:95%;
            color: #fff;
            font-weight:500;
            font-size:25px;
        }
        .wish:hover {
            color: white;
            background-color:  rgb(44, 13, 73);
        }
        .button{
            border-radius: 50px;
            width:50px;
            border:1px solid gray;
            background-color:white;
            margin-right:25px;
            padding: 10px;
            width: 52px;
            height: 50px;
           
        }
        .t{
            font-weight:bolder;
        }
        .size{
            margin-top:10px;
        }
        .button:hover{
            border:2px solid #fc2779;
        }
        .button:focus{
            outline:none;
            border:2px solid #fc2779;
            color:#fc2779;
        }
        .button1{
            border-radius: 50px;
            width:50px;
            border:1px solid gray;
            background-color:white;
            margin-right:25px;
            padding: 10px;
            width: 52px;
            height: 50px;
           
        }
        .button1:hover{
            border:2px solid #fc2779;
        }
        .button1:focus{
            outline:none;
            border:2px solid #fc2779;
            color:#fc2779;
        }
        .zoom{
            transition:all 0.6 ease-in-out;
        }
        .zoom:hover{
            transform: scale(1.1);
        }
        input[type="radio"] {
            width: 50px;
            height: 50px;
            border-radius: 25px;
            border: 1px solid gray;
            background-color: white;
            -webkit-appearance: none; /*to disable the default appearance of radio button*/
            -moz-appearance: none;
        }   
        input[type="radio"]:focus { /*no need, if you don't disable default appearance*/
        outline: none; /*to remove the square border on focus*/
        }
        input[type="radio"]:checked { /*no need, if you don't disable default appearance*/
            border:2px solid #fc2779;
                    
        }
        input[type="radio"]:checked ~ span:first-of-type {
        color: #fc2779;
        }
        label span:first-of-type {
        position: relative;
        left: -39px;
        bottom:17px;
        font-size: 22px;
        
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
    <script>
         function check() {
        var radios = document.getElementsByName("options");
        var formValid = false;

        var i = 0;
        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

    if (!formValid) alert("Please select a size!");
        return formValid;
    }
    function check2() {
        var radios = document.getElementsByName("option");
        var formValid = false;

        var i = 0;
        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

    if (!formValid) alert("Please select a quantity!");
        return formValid;
    }
    </script>
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

   <div class="container-fluid" style="position:relative; top:95px;">
          <div class="row">

              <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?php echo $row[4]; ?>" class="d-block w-100 zoom"  height="auto" width="90%">
                      </div>

                      <?php $k=5; for($i=2;$i<=$row[3];$i++){ ?>
                      <div class="carousel-item">
                        <img src="<?php echo $row[$k]; ?>" class="d-block w-100 zoom"  height="auto" width="90%">
                      </div>
                      <?php $k=$k+1; } ?>
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
              </div>

              <div class="col-md-6">
                  <p class="newarrival text-center">NEW</p>
                  <h2 class="hea"><?php echo $row[1]; ?></h2>
                  <p>Product Code:<?php echo $row[10]; ?></p>
                  <p class="price">₹<?php echo $row[2]; ?></p>
                  <h4 style="margin-top:40px;"><b>Product Offers</b></h4>
                  <p>The Product is already at its best price.<p>
                  <p style="margin-top:10px;"><b>Availability:</b> In Stock</p>
                  <p><b>Condition:</b> New</p>

                  <label style="margin-top:10px;"><h2>Select Size</h2></label><br>

                  <div class="size">
                <form action="SaveCart.php?" method="get" onsubmit=" return !!(check() & check2())">
                <label >
                  <input type="radio" name="options" value="S">
                  <span>S</span></label>
                  <label >
                  <input type="radio" name="options" value="M">
                  <span>M</span></label>
                  <label >
                  <input type="radio" name="options" value="L">
                  <span>L</span></label>
                  <label >
                  <input type="radio" name="options" value="XL">
                  <span>XL</span></label>
                  <br>
                </div>
                <br>
                <label style="margin-top:10px;"><h2>Select Quantity</h2></label><br>

                  <div class="size">
                      <label>
                  <input type="radio" name="option"  value="1">
                  <span>1</span></label>


                  <label >
                  <input type="radio" name="option" value="2">
                  <span>2</span></label>
                  <label >
                  <input type="radio" name="option" value="3">
                  <span>3</span></label>
                  <label >
                  <input type="radio" name="option" value="4">
                  <span>4</span></label>
                </div>
                                            
                    <br>
                <div class="row">
                    <div class="col-md-6">
                        <span id="c"></span>
                        <input type="submit" value="Add To Cart" class="cart" style="margin-top:10px;">
                    </div>
                      </form>
                    <div class="col-md-6">
                        <a href="saveWish.php?item=<?php echo $r;?>">
                            <input type="submit" value="Add To Wishlist" class="wish" style="margin-top:10px;">
                        </a>
                    </div>
                </div>
                  <br><br>
                  <ul>
                  <li style="font-size:20px;">100% Original Products</li>
                  <li style="font-size:20px;">Free Delivery on order above Rs. 799</li>
                  <li style="font-size:20px;">Pay on delivery might be available</li>
                  <li style="font-size:20px;">Easy 30 days returns and exchanges</li>
                    </ul>   

                   
                 </div>

          </div>
          <?php include("Footer.php"); ?>
      </div>
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>