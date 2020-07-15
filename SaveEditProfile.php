<?php
  
   session_start();
   $n=$_POST['name'];
   $g=$_POST['gender'];
   $dob=$_POST['date'];
   $l=$_POST['add'];

   print_r($_POST);
   include("DatabaseConnection.php"); //database connect

   $e=$_SESSION['e'];

   $sq1="update `registration` set `Name` = '$n',`Gender`='$g',`DOB`='$dob', `Location`='$l'  WHERE `registration`.`Email` = '$e';";

   $sq2="update `login` set `Name`='$n' where `login`.`Email`='$e'";
   $ref->query($sq2); 
   if($ref->query($sq1))
        header("location:Profile.php");
    else 
        echo "wrong";
   
?>