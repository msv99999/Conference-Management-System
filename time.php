<?php
       session_start();
      
        //echo $_SESSION["usernames"] ;
?>


<html>
    <head>
        <style>
            /* Add a black background color to the top navigation */
		.topnav {
		    background-color: #333;
		    overflow: hidden;
		    height:20%;
		    margin-top:-10px;
	    
		}

		/* Style the links inside the navigation bar */
		.topnav a {
		    float: left;
		    display: block;
		    color: #f2f2f2;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
	 	   font-size: 17px;
		}

		/* Change the color of links on hover */
		.topnav a:hover {
		    background-color: #ddd;
		    color: black;
		}

		/* Hide the link that should open and close the topnav on small screens */
		.topnav .icon {
		    display: none;
		}
		h1
		{
	 	   text-align:center;
	 	   color:#f2f2f2;
		}
        </style>
    </head>
	<body>   
		<div class="topnav" id="myTopnav">
		    <h1>Conference management system</h1>
			  <a href=filter.php>Book</a>
			  <a href=profile.php>Profile</a>
			  
              <a href=logout.php>Logout</a>
		</div>

        <?php
        $sess=$_SESSION["usernames"] ;
        $start=$_POST['drop3'];  
        $end=$_POST['drop4'];
        $dat=$_POST["date1"];
        //echo "dat";
        //echo "SELECT * FROM it_seminar_hall WHERE dat='"$dat"' and  tim BETWEEN '" .$start. "' AND '"  .$end."'";
        $con=mysqli_connect('localhost','root','') or die(mysql_error());  
        mysqli_select_db($con,'userpass') or die("cannot select DB");
        $query1=mysqli_query($con,"SELECT * FROM it_seminar_hall WHERE dat='".$dat."' and  tim BETWEEN '" .$start. "' AND '"  .$end."'");
        $numrows1=mysqli_num_rows($query1); 
        

        $query2=mysqli_query($con,"SELECT * FROM mini_auditorium WHERE dat='" .$dat. "' and tim BETWEEN '" .$start. "' AND '"  .$end."'");
        $numrows2=mysqli_num_rows($query2); 
        

        $query3=mysqli_query($con,"SELECT * FROM main_auditorium WHERE dat='".$dat. "' and tim BETWEEN '" .$start. "' AND '"  .$end."'");
        $numrows3=mysqli_num_rows($query3); 
        

        $query4=mysqli_query($con,"SELECT * FROM central_seminar_hall WHERE dat='" .$dat. "' and tim BETWEEN '" .$start. "' AND '"  .$end."'");
        $numrows4=mysqli_num_rows($query4); 
        
        //$count=$numrows1+$numrows2+$numrows3+$numrows4;
        if($numrows1!=0 && $numrows2!=0 && $numrows3!=0 && $numrows4!=0)
        {
            echo"<br><br> Sorry, No Halls are available at this time <br> ";
        }
        else{
            echo"<br><br> Please choose one of the below halls:<br> ";
        
        if($numrows1!=0)  
        {  
            ;
        }
        else{
            echo"<br><form id=\"take_room\"  method=\"POST\" action=\"room.php\">
            <input type=\"hidden\" value= $dat name=\"date1\" id=\"date1\"/>
            
            <button type=\"submit\" value=it_seminar_hall  name=\"drop2\" id=\"drop2\">IT Seminar Hall</button>";
        }
        if($numrows2!=0)  
        {  
            ;
        }
        else{
            
            echo"<br><br><form id=\"take_room\"  method=\"POST\" action=\"room.php\">
            <input type=\"hidden\" value= $dat name=\"date1\" id=\"date1\"/>
            
            <button type=\"submit\" value=mini_auditorium  name=\"drop2\" id=\"drop2\">Mini Auditorium</button>";
        }
        if($numrows3!=0)  
        {  
            ;
        }
        else{
            
            echo"<br><br><form id=\"take_room\"  method=\"POST\" action=\"room.php\">
            <input type=\"hidden\" value= $dat name=\"date1\" id=\"date1\"/>
           
            <button type=\"submit\" value=main_auditorium  name=\"drop2\" id=\"drop2\">Main Auditorium</button>";
        }
        
        }
        if($numrows4!=0)  
        {  
            ;
        }
        else{
            
            echo"<br><br><form id=\"take_room\"  method=\"POST\" action=\"room.php\">
            <input type=\"hidden\" value= $dat name=\"date1\" id=\"date1\"/>
            
            <button type=\"submit\" value=central_seminar_hall  name=\"drop2\" id=\"drop2\">Central Seminar Hall</button>";
        }
        
        ?>

	</body>
</html>