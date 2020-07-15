<?php
    session_start();
    if(!isset($_SESSION['e']))
    {
        header("location:Home.php");
    }
    include("DatabaseConnection.php");

    $v=$_SESSION['e'];
    $sq="select * from registration where Email='$v'";

    $rs=$ref->query($sq);
    
    $row=$rs->fetch_array();
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
       .mar{
            margin-top:30px;
       }
       td{
           padding:25px !important;
       }
       .b1 {
            background-color: #fc2779;
            width: 50%;
            color: white;
            font-weight: bolder;
            margin-left:25%;
        }

        .b1:hover {
            color: white;
            background-color: #b40649;
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
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="set">Profile</h2>
            </div>
        </div>
    
        <div class="mar">
     <div class="row">
        
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="container-fluid">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><b>Full Name</b></td>
                            <td><?php echo $row[0]; ?></td>
                        </tr>
                        <tr>
                            <td><b>E-mail</b></td>
                            <td><?php echo $row[1]; ?></td>
                        </tr>
                        <tr>
                            <td><b>Gender</b></td>
                            <td><?php echo $row[9]; ?></td>
                        </tr>
                        <tr>

                            <td><b>Mobile No</b></td>
                            <td><?php echo $row[7]; ?></td>
                        </tr>
                        <tr>
                            <td><b>Date of Birth</b></td>
                            <td><?php echo $row[8]; ?></td>
                        </tr>
                        <tr>
                            <td><b>Location</b></td>
                            <td><?php echo $row[10]; ?></td>
                        </tr> 
                    </tbody>
                </table>
                <button onclick="window.location.href = 'EditProfile.php'" class="btn b1">Edit Details</button>
            </div>   
           
        </div>
        <div class="col-md-3"></div>
        </div>
     </div> 
     <?php include("Footer.php"); ?>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

   
</body>

</html>