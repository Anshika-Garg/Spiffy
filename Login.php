<?php
    session_start();
    if(isset($_SESSON['e']))
    {
        header("location:../Home.php");
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


        /*------------------Login and Registration--------------------------*/
        .banner1 {

            position: relative;
            margin-left: 35px;
            margin-right: 35px;
            overflow: hidden;
            width: 100%;
            height: auto;
        }

        .c1 {
            position: absolute;
            top: 95px;
            height: auto;
            overflow: hidden;
        }

        .set {
            color: #fc2779;
            font-size: 40px;
            font-style: italic;
        }

        .setfont {
            font-family: 'ABeeZee', sans-serif;
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

        .b1 {
            background-color: rgb(8, 20, 129);
            width: 100%;
            color: white;
            font-weight: bolder;
        }

        .b1:hover {
            color: white;
            background-color: rgb(7, 15, 83);
        }

        .b2 {
            background-color: red;
            width: 100%;
            color: white;
            font-weight: bolder;
        }

        .b2:hover {
            color: white;
            background-color: rgb(174, 19, 19);
        }


        [type=email]:focus {
            border: 2px solid #fc2779;
            box-shadow: 0 0 5px #fc2779;

        }

        [type=password]:focus {
            border: 2px solid #fc2779;
            box-shadow: 0 0 5px #fc2779;

        }

        [type=text]:focus {
            border: 2px solid #fc2779;
            box-shadow: 0 0 5px #fc2779;

        }

        span {
            font-size: 12px;
        }
        .vertical{
            border-right: 2px solid gray;
            height: 600px;
            margin-top:32px;
            position: relative;
            left: -8%;
        }
        @media screen and (max-width:435px){
            .vertical{
                display:none;
            }
        }
        @media (min-width:440px){
            .h{
                display:none;
            }
        }
        /*------------------//Login and Registration\\--------------------------*/
    </style>

    <script>
        /*-----------------Registration Validation------------------------*/
        function myName() {
            var a = document.getElementById('name').value;
            var check = /^[a-zA-Z ]{3,30}$/

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

        function myPassword() {
            var a = document.getElementById('pass').value;
            var check = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{6,20}$/;
            if (a.match(check)) {
                document.getElementById('pass').style.backgroundColor=" #f5c8d9!important";
                document.getElementById('msgPass').innerHTML = " ";
                return true;
            }
            else {
                var c = document.getElementById('msgPass');
                c.innerHTML = "*Password is not valid";
                c.style.color = "red";
                return false;
            }
        }

        function myPasswordConfirm() {
            var a = document.getElementById('cpass').value;
            var b = document.getElementById('pass').value;
            if (a == b) {
                document.getElementById('cpass').style.backgroundColor=" #f5c8d9!important";
                document.getElementById('msgCPass').innerHTML = " ";
                return true;
            }
            else {
                var c = document.getElementById('msgCPass');
                c.innerHTML = "*Passwords do not match";
                c.style.color = "red";
                return false;
            }
        }

        function myEmail() {
            var a = document.getElementById('email').value;
            var check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if (a.match(check)) {
                document.getElementById('email').style.backgroundColor=" #f5c8d9!important";
                document.getElementById('msgEmail').innerHTML = " ";
                return (true);
            }
            else {
                var c = document.getElementById('msgEmail');
                c.innerHTML = "*Email is not valid";
                c.style.color = "red";
                return false;
            }
        }
        /*-----------------//Registration Validation\\------------------------*/


        /*-------------------Login Validation--------------------------------*/
        function myLEmail() {
            var a = document.getElementById('Lemail').value;
            var check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (a.match(check)) {
                document.getElementById('Lemail').style.backgroundColor=" #f5c8d9!important";
                document.getElementById('msgLEmail').innerHTML = " ";
                return (true);
            }
            else {
                var c = document.getElementById('msgLEmail');
                c.innerHTML = "*Email is not valid";
                c.style.color = "red";
                return false;
            }
        }

        function myLPass() {
            var a = document.getElementById('Lpass').value;
            var check = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{6,20}$/;
            if (a.match(check)) {
                document.getElementById('Lpass').style.backgroundColor=" #f5c8d9!important";
                document.getElementById('msgLPass').innerHTML = " ";
                return true;
            }
            else {
                var c = document.getElementById('msgLPass');
                c.innerHTML = "*Password is not valid";
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
           /*----------------//Login Validation\\--------------------------------*/
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

    <div class="container-fluid pl-0 pr-0 c1">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="set">Spiffy</h2>
            </div>
        </div>
        <div class="row">


            <!--Login-->
            <div class="col-md-5 setfont">
                <div class="row">
                    <div class="col-12 text-center" style="position: relative; margin-bottom: 35px; margin-top: 30px;">
                        <h2 style="font-weight: bolder;">Login</h2>
                    </div>
                </div>
                <form action="Login/saveLogin.php" method="post" onsubmit="return !!(myLEmail() & myLPass())">
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control change" onblur="myLEmail()" id="Lemail" name="lemail" placeholder="Email">
                                <span id="msgLEmail"></span>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control change" onblur="myLPass()" name="lpassword"
                                    id="Lpass" placeholder="Password">
                                <span id="msgLPass">Password must contain minimum 6 letters(atleast 1 upper case letter,
                                    1 lower case letter, 1 number)</span>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8 ">
                            <div class="form-group" style="margin-top:20px;">
                                <?php if(isset($_SESSION['wrong'])) { ?> 
                                    <small style="color:red;"><?php echo $_SESSION['wrong']; ?></small>
                                <?php session_destroy(); } ?>
                                <button type="submit" class="btn b">Login</button>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center" style="margin:15px 0px;">
                            <a href="#" style="text-decoration: none; color: rgb(72, 29, 112); ">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">

                            <div class="row h">
                                <div class="col-5">
                                    <hr style="width:100%;text-align:left;margin-left:0;border-width: 3px;">
                                </div>
                                <div class="col-2"> <span>OR</span> </div>
                                <div class="col-5">
                                    <hr style="width:100%;text-align:left;margin-left:0;border-width: 3px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                 <!--   <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8 ">
                            <div class="form-group" style="margin-top:20px;">
                                <button class="btn b1">Log in with Facebook</button>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8 ">
                            <div class="form-group">
                                <button class="btn b2" style="margin-top:20px;">Log in with Google</button>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div> -->
                </form>
               
    
            </div>
            <!--//Login\\-->
            <div class="col-md-2 vertical">

            </div>
           
            <!--Registration-->
            <div class="col-md-5 setfont">
                <div class="row">
                    <div class="col-12 text-center" style="position: relative; margin-bottom: 35px; margin-top: 30px;">
                        <h2 style="font-weight: bolder;">Register</h2>
                    </div>
                </div>
                <form onsubmit="return !!(myName() & myPassword() & myEmail() & myPasswordConfirm()&myPhone())" action="Login/saveRegistration.php" method="post">
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control change" onblur="myName()" name="name" id="name"
                                    placeholder="Name">
                                <span id="msgName"></span>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control change" onblur="myEmail()" id="email"
                                    name="email" placeholder="Email">
                                <span id="msgEmail"></span>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control change" onblur="myPhone()" name="mobile"
                                    id="mob" placeholder="Mobile">
                                <span id="msgMob"></span>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control change" onblur="myPassword()" name="password"
                                    id="pass" placeholder="Password">
                                <span id="msgPass">Password must contain minimum 6 letters(atleast 1 upper case letter,
                                    1 lower case letter, 1 number)</span>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control change" id="cpass"
                                    onblur="myPasswordConfirm()" name="cpassword" placeholder="Confirm Password">
                                <span id="msgCPass"></span>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Size Preference: &nbsp;</label>
                                <div class="form-check-inline">
                                    <input type="checkbox" name="size[]" value="S" class="form-check-input">
                                    <label class="form-check-label">S</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="checkbox" name="size[]" value="L" class="form-check-input">
                                    <label class="form-check-label">L</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="checkbox" name="size[]" value="XL" class="form-check-input">
                                    <label class="form-check-label">XL</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="checkbox" name="size[]" value="XL" class="form-check-input">
                                    <label class="form-check-label">XXL</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8 ">
                            <div class="form-group" style="margin-top:20px;">
                                <button type="submit" class="btn b">Register</button>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <!--//Registration\\-->
                </form>
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
