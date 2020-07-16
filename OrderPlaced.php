    <?php
    session_start();
    if(!isset($_SESSION['e']))
    {
        header("location:Login.php");
    }
    
    include("DatabaseConnection.php");

    $email=$_SESSION['e'];

    $sq="select * from address where `User`='$email'";
    $r=$ref->query($sq);
?>
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
            top:200px;
        }
        
        .info{
            width:auto;
            height:auto;
            border:2px solid gray;
            background-color:#fc2779;
            border:none;
            color:white;
            font-weight:bold;
            border-radius:5px;
            box-shadow:0 0 5px #bb064b;
        }
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
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
                    <div class="info">
                        <h1 style="margin-top:10px;">Congratulations!! Your order is successfully placed</h1>
                        <a href="Home.php" style="text-decoration:none; color:black;"><h5>Continue Shopping</h5></a>
                    </div>
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
