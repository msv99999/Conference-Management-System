<?php
   session_start();
   
   
   $dat=$_POST['date1'];  
   $hall=$_POST['drop2'];
   $slot=$_POST['slot'];
   $sess=$_SESSION["usernames"];
   $con=mysqli_connect('localhost','root','') or die(mysql_error());  
   mysqli_select_db($con,'userpass') or die("cannot select DB");
    
   $sql="INSERT INTO $hall VALUES ('$dat','$slot','$sess')";
   $result=mysqli_query($con,$sql);
   $no=1;
   if($result==true)
    {echo $sess;}
    else {echo $no;}

   
 ?>
 