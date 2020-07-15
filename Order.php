<?php
    session_start();
    if(!isset($_SESSION['e']))
    {
        header("location:Login.php");
    }

    include("DatabaseConnection.php");



    $email=$_SESSION['e'];

    $sq="select * from `order` where `User`='$email'";
    $r=$ref->query($sq);
    //$id=$_GET['id'];
    //$sq="select * from women where Sno=$id";
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

        .banner{
            position:absolute;
            top:120px;

        }
        ul{
            list-style-type:none;
            padding-left:0px;
        }
        .s{
            height:auto;
            border:1px solid gray;
            border-radius:10px;
            box-shadow: 0 0 5px gray;
            transition: all 0.6 ease-in-out;
            margin-bottom:50px;
        }
        .s:hover{
           transform:scale(1.1);
           box-shadow: 0 0 10px gray;
        }
        @media screen and (max-width: 600px) {
           h4,h5{
               font-size:15px;
           }
        }
        .con{
            height:50px;
            bottom:0px;
            background-color:#fc2779;
            padding-bottom:15px;
            padding-left:42px;
            position:fixed;
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
   
    
</head>

<body>

    <!--Navigation Bar-->

    <?php
        if(isset($_SESSION['e']))
            include("Header.php");
   ?>

    <!--//Navigation Bar\\-->

    <div class="container-fluid banner">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">

                <?php while($row=$r->fetch_array()) { 
                    $pro=$row[2];
                    $sq1="select * from women where `Sno`=$pro";
                    $r3=$ref->query($sq1);
                    $row2=$r3->fetch_array();
                ?>
                <div class="container-fluid pl-2 pr-2 pt-2 pb-2 s">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-3 pr-0">
                                            <a href="ProductView.php?r=<?php echo $row[2]; ?>">
                                            <img src="<?php echo $row2[4]; ?>" alt="" width="80%" height="auto">
                                            </a>
                                        </div>
                                        <div class="col-9 pl-0 pr-0"
                                            style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                            <h5 style="float:right; margin-right:30px;">Price:₹<?php echo $row[6]; ?> </h5>
                                            <a href="ProductView.php?r=<?php echo $row[2]; ?>" style="text-decoration:none; color:black;">
                                            <h4> <?php echo $row2[1]; ?> </h4>
                                            </a>
                                            <p>Product Id:<?php echo $row2[10]; ?></p>
                                            <h5>Size:<?php echo $row[5]; ?></h5>
                                            <h5>Qty:<?php echo $row[4]; ?></h5>
                                            <h5>Order Placed on: <?php echo $row[3]; ?></h5>
                                        </div>

                                    </div>
                                </div>
                            </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  
</body>

</html>
