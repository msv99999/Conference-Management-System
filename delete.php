<?php
   session_start();
   
   $sub=$_POST['sub'];
   $dat=$_POST['date1'];  
   $hall=$_POST['drop2'];
   $slot=$_POST['slot'];
   $sess=$_SESSION["usernames"];
   $con=mysqli_connect('localhost','root','') or die(mysql_error());  
   mysqli_select_db($con,'userpass') or die("cannot select DB");
   if($sub==$sess)
   {
        $sql="DELETE FROM $hall WHERE dat=\"$dat\" and tim=\"$slot\"";
        $result=mysqli_query($con,$sql);
        echo $sess;
   }
   else
   {
        $no=0;
        echo $no;
   }

   /*
   $sql="INSERT INTO $hall VALUES ('$dat','$slot','$sess')";
   $result=mysqli_query($con,$sql);
   $no=0;
   if($result==true)
    {echo $sess;}
    else {echo $no;}
    */
   
 ?>
 