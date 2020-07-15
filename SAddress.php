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
            top:120px;

        }
        .adrs{
            border:2px solid rgb(230, 225, 225);
            border-radius:5px;
            padding:30px;
            box-shadow:0 0 10px rgb(230, 225, 225);
            margin-bottom:20px;
        }
        .info{
            margin-left:20px;
        }
        .b{
            border-radius:5px;
            background-color:#fc2779;
            color:white;
            padding:5px;
            border:none;
            width:100px;
            font-weight:bolder;
        }
        .b:hover {
            color: white;
            background-color: #db3474;
        }
        input[type="radio"] {
            width: 20px;
            height: 20px;
            border-radius: 15px;
            border: 1px solid gray;
            background-color: white;
            -webkit-appearance: none; /*to disable the default appearance of radio button*/
            -moz-appearance: none;
        }   
        input[type="radio"]:focus { 
        outline: none; /*to remove the square border on focus*/
        }
        input[type="radio"]:checked { /*no need, if you don't disable default appearance*/
            border:5px solid white;
            box-shadow:0 0 5px black;
            background-color:#fc2779;
                    
        }
        .con{
            height:50px;
            bottom:0px;
            background-color:#fc2779;
            padding-top:10px;
            padding-left:42px;
            position:fixed;
        }
        *{
            outline:none;
        }
    </style>
    <script>
        function check() {
        var radios = document.getElementsByName("add");
        var formValid = false;

        var i = 0;
        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

    if (!formValid) alert("Please select an address!");
        return formValid;
}
    </script>
</head>

<body>

    <!--Navigation Bar-->

    <?php
        if(isset($_SESSION['e']))
            include("Header.php");
   ?>

    <!--//Navigation Bar\\-->

    <div class="container-fluid banner">

        <!--Address-->
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <div class="row">
            <div class="col-12">
                <a href="Address.php" style="float:right;"><button class="b" style="width:auto;padding:10px;">Add New Address</button></a>
                <h2 style="color:#fc2779">Select Address</h2>
            </div>
            </div>
            
            <?php while($row=$r->fetch_array()) { ?>
                <div class="row">
                    <div class="col-12 adrs">
                            <div class="form-check-inline">
                            <input type="radio" name="add" class="form-check-input">
                            <div class="info">
                                <h5><b><?php echo $row[2]; ?></b></h5>
                                <p><?php echo $row[5]; ?></p>
                                <p><?php echo $row[6]; ?>,<?php echo $row[6]; ?></p>
                                <p><?php echo $row[3]; ?></p>

                              <a href="DeleteAdd.php?d=<?php echo $row[0];?>"><button type="submit" class="b">Remove</button></a> 

                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
         <!--//Address\\-->
    </div>
    <div class="row">
            <form action="SaveOrder.php" onsubmit="return check()">
            <div class="col-12 con">
             <button type="submit" class="btn bg-success text-white" style="float:right;width:50px;border-radius:10px;">Go</button>
                  <h5 style="color:white;"><b>Confirm Order</b></h5>
            </div>
            </form>
     </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  
</body>

</html>