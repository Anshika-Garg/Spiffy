<?php
    session_start();
    include("DatabaseConnection.php");

    $price=$_GET['price'];
    $category=$_GET['cat'];

    $sq="select * from women where `M/W`='W' ORDER BY RAND() LIMIT 100";
    $rs=$ref->query($sq);


?>
<?php include("Display.php"); ?>