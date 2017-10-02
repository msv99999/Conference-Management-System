 
    <?php  
        session_start();
        $user=$_POST['uname'];  
        $pass=$_POST['psw'];  
      
        $con=mysqli_connect('localhost','root','') or die(mysql_error());  
        mysqli_select_db($con,'userpass') or die("cannot select DB");  
      
        $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row['username'];  
        $dbpassword=$row['password'];  
        }  
      
        if($user == $dbusername && $pass == $dbpassword)  
        {  
        
        /* Redirect browser */  
       $_SESSION["usernames"]=$user;
       header("refresh:0;url=filter.php");
        }  
        } else {  
        echo "Invalid username or password!";  
        header("refresh:2;url=login.html"); 
        }  
    
     
    ?>  
     