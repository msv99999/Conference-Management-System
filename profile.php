<?php
    session_start();
    
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
        table, th, td {
        border: 1px solid black;
        text-align:center;
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
        
        #center
        {
            text-align:center;
            margin-top:20px;
            margin-left:20px;
            
        }

        #logindiv
        {
            
           border:1px solid black;
           margin-top:50px;
           margin-left:0px;
           text-align:center;
           width:600px;
           border-radius: 30px;
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
	<body style:"overflow-x:scroll;overflow-y:scroll" >   
		<div class="topnav" id="myTopnav">
		    <h1>Conference management system</h1>
			  <a href=filter.php>Book</a>
			  <a href=profile.php>Profile</a>
			  
              <a href=logout.php>Logout</a>
		</div>
        <br>
		<div style="background:grey;text-color:black;font-style:italic;">
			<div style="margin-left:20px;" >Profile</div>
		</div>
        <div>
            <p >
               <h1 style="text-align:center;color:black;font-family:Verdana;"> Welcome <?php echo $_SESSION["usernames"]; ?> </h1>
            </p>
        </div>

        <?php
        $sess=$_SESSION["usernames"] ;
        $con=mysqli_connect('localhost','root','') or die(mysql_error());  
        mysqli_select_db($con,'userpass') or die("cannot select DB");
        $query1=mysqli_query($con,"SELECT * FROM it_seminar_hall WHERE person='".$sess."'");
        $numrows=mysqli_num_rows($query1); 
        if($numrows!=0)  
        {  
            echo"These are your bookings at IT Seminar Hall: <br><br>";
            echo"<table style=\"width:100%\">
                <tr>
                    <th>Date</th>
                    <th>Time</th> 
                    
                </tr>";
            while($row=mysqli_fetch_assoc($query1))  
            {  
                $slot=$row['tim'];  
                $dat=$row['dat'];
                echo"
                <tr>
                    <td>$dat</td>
                    <td>$slot</td>     
                </tr>";
            }
            echo "</table>";
        }
        echo"<br><br>";
        $query2=mysqli_query($con,"SELECT * FROM mini_auditorium WHERE person='".$sess."'");
        $numrows=mysqli_num_rows($query2); 
        if($numrows!=0)  
        {  
            echo"These are your bookings at Mini Auditorium <br><br>";
            echo"<table style=\"width:100%\">
                <tr>
                    <th>Date</th>
                    <th>Time</th> 
                    
                </tr>";
            while($row=mysqli_fetch_assoc($query2))  
            {  
                $slot=$row['tim'];  
                $dat=$row['dat'];
                echo"
                <tr>
                    <td>$dat</td>
                    <td>$slot</td>     
                </tr>";
            }
            echo "</table>";
        }


        echo"<br><br>";
        $query3=mysqli_query($con,"SELECT * FROM main_auditorium WHERE person='".$sess."'");
        $numrows=mysqli_num_rows($query3); 
        if($numrows!=0)  
        {  
            echo"These are your bookings at Main Auditorium <br><br>";
            echo"<table style=\"width:100%\">
                <tr>
                    <th>Date</th>
                    <th>Time</th> 
                    
                </tr>";
            while($row=mysqli_fetch_assoc($query3))  
            {  
                $slot=$row['tim'];  
                $dat=$row['dat'];
                echo"
                <tr>
                    <td>$dat</td>
                    <td>$slot</td>     
                </tr>";
            }
            echo "</table>";
        }


        echo"<br><br>";
        $query4=mysqli_query($con,"SELECT * FROM central_seminar_hall WHERE person='".$sess."'");
        $numrows=mysqli_num_rows($query4); 
        if($numrows!=0)  
        {  
            echo"These are your bookings at Central Seminar Hall <br><br>";
            echo"<table style=\"width:100%\">
                <tr>
                    <th>Date</th>
                    <th>Time</th> 
                    
                </tr>";
            while($row=mysqli_fetch_assoc($query4))  
            {  
                $slot=$row['tim'];  
                $dat=$row['dat'];
                echo"
                <tr>
                    <td>$dat</td>
                    <td>$slot</td>     
                </tr>";
            }
            echo "</table>";
        }


        ?>

    </body>
</html?