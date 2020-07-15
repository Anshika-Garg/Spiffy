<?php
     session_start();
     
     $n=$_POST['name'];
     $e=$_POST['email'];
     $p=$_POST['password'];
     $cp=$_POST['cpassword'];
     $c=$_POST['size'];
     $m=$_POST['mobile'];
     $cnt=count($c);
     for($i=0;$i<4;$i++)
          $s1[$i]="";
     for($i=0;$i<$cnt;$i++)
     {
          if($c[$i]=='S')
               $s1[0]='S';
          else if($c[$i]=='L')
               $s1[1]='L';
          else if($c[$i]=='XL')
               $s1[2]='XL';
          else
               $s1[3]='XXL';
     }
    
     include("../DatabaseConnection.php"); //database connect
     
     $pl = md5($p); //encrypts password
     $sq="insert into registration(Name,Email,Password,Size_S,Size_L,Size_XL,Size_XXL,Mobile) values('$n','$e','$pl','$s1[0]','$s1[1]','$s1[2]','$s1[3]',$m)";
     if($ref->query($sq))
     {
          $sq1="insert into login(Name,Email,Password) values('$n','$e','$pl')";
          $ref->query($sq1);
          $_SESSION['n']=$n;
          $_SESSION['e']=$e;

          $_SESSION['key']=1;
          header("location:../Home.php");
     }

     else
          echo $ref->error;
?>