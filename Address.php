<?php
    session_start();
    if(!isset($_SESSION['e']))
    {
        header("location:Login.php");
    }
    if(!isset($_SESSION['cart']))
    {
        header("location:Cart.php");
    }
    include("DatabaseConnection.php");

    $email=$_SESSION['e'];

    $sq="select * from address where `User`=$email";
    $r=$ref->query($sq);
   // $num=$r->num_rows;
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
        [type=text]:focus {
            border: 2px solid #fc2779;
            box-shadow: 0 0 5px #fc2779;

        }
        .adrs{
            border:2px solid #fc2779;
            border-radius:5px;
            padding:30px;
            box-shadow:0 0 10px #fc2779;
        }
        .b {
            background-color: #fc2779;
            width: 100%;
            color: white;
            font-weight: bolder;
        }

        .b:hover {
            color: white;
            background-color: #db3474;
        }
    </style>
   <script>
       function myName() {
            var a = document.getElementById('name').value;
            var check = /^[a-zA-Z ]{3,30}$/;

            if (a.match(check)) {
                document.getElementById('msgName').innerHTML = " ";
                document.getElementById('name').style.backgroundColor=" #f5c8d9!important";
                return true;
            }
            else {
                var c = document.getElementById('msgName');
                c.innerHTML = "*Name is not valid";
                c.style.color = "red";
                return false;
            }
        }
        function myPhone() {
            var a = document.getElementById('mob').value;
            var check = /^\d{10}$/;

            if (a.match(check)) {
                document.getElementById('msgMob').innerHTML = " ";
                document.getElementById('name').style.backgroundColor=" #f5c8d9!important";
                return true;
            }
            else {
                var c = document.getElementById('msgMob');
                c.innerHTML = "*Mobile Number is not valid  ";
                c.style.color = "red";
                return false;
            }
        }
        function myPin() {
            var a = document.getElementById('pin').value;
            var check = /^\d{6}$/;

            if (a.match(check)) {
                document.getElementById('msgPin').innerHTML = " ";
                document.getElementById('pin').style.backgroundColor=" #f5c8d9!important";
                return true;
            }
            else {
                var c = document.getElementById('msgPin');
                c.innerHTML = "*Pin Code is not valid  ";
                c.style.color = "red";
                return false;
            }
        }
        function myAddress() {
            var a = document.getElementById('add').value;
            var check = /^{10,100}$/;

            if (a.match(check)) {
                document.getElementById('msgAdd').innerHTML = " ";
                document.getElementById('add').style.backgroundColor=" #f5c8d9!important";
                return true;
            }
            else {
                var c = document.getElementById('msgAdd');
                c.innerHTML = "*Address is not valid";
                c.style.color = "red";
                return false;
            }
        }
        function myCity() {
            var a = document.getElementById('city').value;
            var check = /^{3,100}$/;

            if (a.match(check)) {
                document.getElementById('msgCity').innerHTML = " ";
                document.getElementById('city').style.backgroundColor=" #f5c8d9!important";
                return true;
            }
            else {
                var c = document.getElementById('msgCity');
                c.innerHTML = "*City name is not valid";
                c.style.color = "red";
                return false;
            }
        }
        function myState() {
            var a = document.getElementById('state').value;
            var check = /^{3,100}$/;

            if (a.match(check)) {
                document.getElementById('msgState').innerHTML = " ";
                document.getElementById('state').style.backgroundColor=" #f5c8d9!important";
                return true;
            }
            else {
                var c = document.getElementById('msgState');
                c.innerHTML = "*State name is not valid";
                c.style.color = "red";
                return false;
            }
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
                    <div class="col-12 adrs">
                        <h2 class="text-center" style="color:#fc2779;">Address</h2>
                        <form action="saveAddress.php" method="post" onsubmit="return !!(myName() & myAddress() & myPhone() & myPin() & myState() & myCity())">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control change" name="name" onblur="myName()" id="name" placeholder="Name">
                                <span id="msgName"></span>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control change" name="mob" onblur="myPhone()" id="mob" placeholder="Mobile">
                                <span id="msgMob"></span>
                            </div>
                            <div class="form-group">
                                <label>Pin Code</label>
                                <input type="text" class="form-control change" name="pin" onblur="myPin();" id="pin" placeholder="Pin Code">
                                <span id="msgPin"></span>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control change" name="add" onblur="myAddress();" id="add" placeholder="Address">
                                <span id="msgAdd"></span>
                            </div>
                            <div class="form-row">
                                <div class="col-6 form-group">
                                <label>City</label>
                                <input type="text" class="form-control change" name="city" onblur="myCity();" id="city" placeholder="City">
                                <span id="msgCity"></span>
                            </div>
                            <div class="col-6 form-group">
                                <label>State</label>
                                <input type="text" class="form-control change" name="state" onblur="myState();" id="state"  placeholder="State">
                                <span id="msgState"></span>
                            </div>
                            </div>
                            <button type="submit" class="btn b">Add Address</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
         <!--//Address\\-->
    </div>

    <div class="row">
            <div class="col-12 con">
                <a href="SAddress.php"> <button class="btn bg-success text-white" style="float:right;margin-top:8px;width:50px;border-radius:10px;">Go</button>  </a> 
                  <h4 style="color:white;"><b>Place Order</b></h4>
                  <h5 style="color:white;">Total:₹<b><?php echo $total; ?></b></h5>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  
</body>

</html>