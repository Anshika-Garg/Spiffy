<?php
    session_start();
    include("DatabaseConnection.php");
    if(!isset($_SESSION['e']))
    {
        header("location:Login.php");
    }

    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $pin=$_POST['pin'];
    $add=$_POST['add'];
    $city=$_POST['city'];
    $state=$_POST['state'];

    $email=$_SESSION['e'];

    $sq="insert into address(`User`,`Name`,`Mobile`,`Pin`,`Address`,`City`,`State`) values ('$email','$name',$mob,$pin,'$add','$city','$state')";
    $r=$ref->query($sq);
    header("location:SAddress.php");
    
?>
