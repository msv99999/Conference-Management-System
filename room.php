<?php
       session_start();
        $dat=$_POST['date1'];  
        $hall=$_POST['drop2'];  
        //echo $_SESSION["usernames"] ;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
	<body >   
		<div class="topnav" id="myTopnav">
		    <h1>Conference management system</h1>
			  <a href=filter.php>Book</a>
			  <a href=profile.php>Profile</a>
			  
              <a href=logout.php>Logout</a>
		</div>
        <input type="hidden" value=<?php echo $dat ?> id="hid"/>
        <input type="hidden" value=<?php echo $hall ?> id="hid2"/>
        
        <div  style:"overflow-x:scroll;overflow-y:scroll" id="center">
            <h1 style="color:black; text-transform:uppercase;"> <?php echo $hall ?> </h1><br>
            <b>Date: <?php echo $dat ?></b>
            
            <div >
            <img src="lamp.jpg" alt="lmp"style="width:200px;height:400px;text-align:left;">
            <div id="logindiv"  style="display:inline-block;" >
                <br>
                <div>09:00-09:30<button onclick="myFunction(this)" id="b1" style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>09:30-10:00<button onclick="myFunction(this)" id="b2"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>10:00-10:30<button onclick="myFunction(this)" id="b3"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>10:30-11:00<button onclick="myFunction(this)" id="b4"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>11:00-11:30<button onclick="myFunction(this)" id="b5"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>11:30-12:00<button onclick="myFunction(this)" id="b6"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>12:00-12:30<button onclick="myFunction(this)" id="b7"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>12:30-13:00<button onclick="myFunction(this)" id="b8"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>13:00-13:30<button onclick="myFunction(this)" id="b9"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>13:30-04:00<button onclick="myFunction(this)" id="b10"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>14:00-14:30<button onclick="myFunction(this)" id="b11"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                <div>14:30-15:00<button onclick="myFunction(this)" id="b12"style="background-color:green;text-color:black;margin-left:5em;width:400px;">Book</button></div><br>
                
                <?php
                    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
                    mysqli_select_db($con,'userpass') or die("cannot select DB"); 
                    $query=mysqli_query($con,"SELECT * FROM " .$hall. " WHERE dat='".$dat."'");
                    $numrows=mysqli_num_rows($query);  
                    //echo $numrows;
                    if($numrows!=0)  
                    {  
                        while($row=mysqli_fetch_assoc($query))  
                        {  
                            $slot=$row['tim'];  
                            $person=$row['person'];
                          
                        if($slot == "09:00-09:30")  
                        {  
                            echo"<script>document.getElementById(\"b1\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b1\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "09:30-10:00")  
                        {  
                            echo"<script>document.getElementById(\"b2\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b2\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "10:00-10:30")  
                        {  
                            echo"<script>document.getElementById(\"b3\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b3\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "10:30-11:00")  
                        {  
                            echo"<script>document.getElementById(\"b4\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b4\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "11:00-11:30")  
                        {  
                            echo"<script>document.getElementById(\"b5\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b5\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "11:30-12:00")  
                        {  
                            echo"<script>document.getElementById(\"b6\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b6\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "12:00-12:30")  
                        {  
                            echo"<script>document.getElementById(\"b7\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b7\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "12:30-13:00")  
                        {  
                            echo"<script>document.getElementById(\"b8\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b8\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "13:00-13:30")  
                        {  
                            echo"<script>document.getElementById(\"b9\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b9\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "13:30-14:00")  
                        {  
                            echo"<script>document.getElementById(\"b10\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b10\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "14:00-14:30")  
                        {  
                            echo"<script>document.getElementById(\"b11\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b11\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        if($slot == "14:30-15:00")  
                        {  
                            echo"<script>document.getElementById(\"b12\").style.background=\"red\";</script>";
                            echo"<script>document.getElementById(\"b12\").innerText=\"BOOKED BY \"+ \"$person\" </script>"; 
                        }
                        }
                    }
                ?>
            </div>
            <img src="lamp.jpg" alt="lmp"style="width:200px;height:400px;">
            </div>
        </div>
	 </body>
     
    <script>
        
        function myFunction(bu)
        {
            
            var x = bu.id;
            var slot;
            var hid1=document.getElementById("hid").value;
            var hid2=document.getElementById("hid2").value;
            var txt;
            
                if(x=="b1")
                {
                    slot="09:00-09:30";
                    txt=b1.innerText;
                }
                
                if(x=="b2")
                {
                slot="09:30-10:00";
                txt=b2.innerText;
                }
                
                if(x=="b3")
                {
                slot="10:00-10:30";
                txt=b3.innerText;
                }
                
                if(x=="b4")
                {
                    slot="10:30-11:00";
                    txt=b4.innerText;
                }
                
                if(x=="b5")
                {
                    slot="11:00-11:30";
                    txt=b5.innerText;
                }
                
                if(x=="b6")
                {
                    slot="11:30-12:00";
                    txt=b6.innerText;
                }
                
                if(x=="b7")
                {
                    slot="12:00-12:30";
                    txt=b7.innerText;
                }

                if(x=="b8")
                {
                    slot="12:30-13:00";
                    txt=b8.innerText;
                }

                
                if(x=="b9")
                {
                    slot="13:00-13:30";
                    txt=b9.innerText;
                }

                if(x=="b10")
                {
                    slot="13:30-14:00";
                    txt=b10.innerText;
                }

                if(x=="b11")
                {
                    slot="14:00-14:30";
                    txt=b11.innerText;
                }
                
                if(x=="b12")
                {
                    slot="14:30-15:00";
                    txt=b12.innerText;
                }
                if(txt=="Book")
                {
                    $.ajax({
                        type: "POST",
                        url: "insert.php" ,
                        data: { slot : slot, date1 : hid1 , drop2 : hid2 },
                        success : function(response) { 
                        var re=response;
                            if(re!=0)
                            {
                                //alert(response);
                        document.getElementById(x).style.background="red";
                        document.getElementById(x).innerText="BOOKED BY "+ response;
                            }
                        }
                    });
                }
                else
                {
                    var sub=txt.substring(10,txt.length);
                    //alert(sub);
                    $.ajax({
                        type: "POST",
                        url: "delete.php" ,
                        data: { slot : slot, date1 : hid1 , drop2 : hid2,sub:sub },
                        success : function(response) { 
                        var re=response;
                            if(re!=0)
                            {
                                //alert(response);
                        document.getElementById(x).style.background="green";
                        document.getElementById(x).innerText="Book";
                            }
                        }
                    });
                }
            
        }
    </script>
    
</html>