<?php
    session_start();
    include("DatabaseConnection.php");

    $price=$_GET['price'];
    $category=$_GET['cat'];
    $c=$_GET['category'];

    $sq="select * from women where (ImgPrice<=$price and `M/W`='$c') ORDER BY RAND() LIMIT 100";
    $rs=$ref->query($sq);


?>
<?php include("Display.php"); ?>