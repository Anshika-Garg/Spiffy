<?php
    session_start();
    include("DatabaseConnection.php");

    if(!isset($_SESSION['e']))
    {
        header("location:Login.php");
    }

    $email=$_SESSION['e'];
    $sq1="select * from wishlist where `User`='$email'";

    $rs=$ref->query($sq1);


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

       

        .banner1 {

            position: relative;
            top:120px;
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
            
        }
        .bt{
            background-color:#fc2779;
            border-radius:8px;
            border:none;
            width:90%;
            height:40px;
            color:white;
            font-weight:bold;
            margin-bottom:40px;
        }
        .bt:hover{
            color: white;
            background-color: #880436;
        }
        
        .b {
            background-color: #fc2779;
            width: 50%;
            border:none;
            color: white;
            border-radius:5px;
            height:40px;
            font-weight: bolder;
        }

        .b:hover {
            color: white;
            background-color: #db3474;
        }
        *{
            outline:none;
        }

       
    </style>
   
    
</head>

<body>
    <!--Navigation Bar-->


    <?php
            include("Header.php");
   ?>


    <!--//Navigation Bar\\-->

    <div class="container-fluid pl-0 pr-0 c1">
        <?php if($rs->num_rows==0) { ?>
            <div class="row">
                <div class="banner1">
                    <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <img src="empty-wishlist.webp" alt="">
                        <h3 style="margin-top:20px;"><b>No Items in Wishlist</b></h3>
                        <p>Save your favourite items here</p>
                       <a href="Home.php"><button class="b">Start Shopping</button></a> 
                    </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="row">
            <div class="banner1">
                <div class="col-12 ">
                    <ul class="fl">
                        <?php while($ro=$rs->fetch_array())
                        {  
                            $sq1="select * from women where Sno=$ro[2]";
                            $q=$ref->query($sq1);    
                            $row=$q->fetch_array();
                        ?>
                        <li class="product">
                            <div class="pro">                                       
                                    <a href="ProductView.php?r=<?php echo $row[0]; ?>" style="text-decoration:none; color:black;">
                                        <img class="bord" src="<?php echo $row[4];?>" height="auto" width="90%" onmouseover="this.src='<?php echo $row[5];?>'" onmouseout="this.src='<?php echo $row[4];?>'">
                                <div class="set2">
                                    <small style="color:gray;"><?php echo $row[1]; ?> </small>
                                    <p><b>₹<?php echo $row[2]; ?></b></p>
                                </div></a>
                                <a href="DeleteWish.php?item=<?php echo $row[0]; ?>"><button class="bt">Remove</button></a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
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
