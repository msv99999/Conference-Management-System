<?php    
  
    $user=$_POST['uname'];  
    $pass=$_POST['psw'];  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'userpass') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
                        
    echo "Account Successfully Created";  
   header("refresh:1;url=login.html");
    } else {  
    echo "Failure!";  
    header("refresh:1;url=signup.html");
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
     header("refresh:1;url=signup.html");
    }  
  
 
 
?>  
