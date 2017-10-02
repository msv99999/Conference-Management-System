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
        #drop2,#drop3,#drop4,#search
        {

            display:none;
            margin-left:17%;
            text-align: center;
        }

        .searchdiv
        {
            
           border:1px solid black;
           margin-top:60px;
           margin-left:500px;
           text-align:center;
           width:350px;
           height:300px;
           border-radius: 30px;
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
        #data
        {
            text-align:center;
            margin-top:50px;
        }
        </style>
    </head>
    <body>   
            <div class="topnav" id="myTopnav">
		    <h1>Conference management system</h1>
			  
			  <a href=profile.php>Profile </a>
			  
              <a href=logout.php>Logout</a>
		</div>
            <form name="book"  class="searchdiv"  onsubmit="func()" action="" method="POST">
                <div id="data">
                <label for="date">DATE:</label>
                <input type="date" id="date" name="date1" required><br><br>
                <label for="drop">CHOOSE PRORITY:</label>
                <select id="drop" onchange="set()" >
                    <option value="select type" selected disabled>select type</option>
                    <option value="room">Room</option>
                    <option value="time">Time</option>
                </select>
                <br>
                <br>
                <br>
                <select id="drop2" name="drop2">
                    <option value="it_seminar_hall">IT Seminar Hall</option>
                    <option value="mini_auditorium">Mini Auditorium</option>
                    <option value="main_auditorium">Main Auditorium</option>
                    <option value="central_seminar_hall">Central Seminar Hall</option>
                </select>
                

                <select id="drop3" name="drop3">
                    <option disabled selected>start time</option>
                    <option value="09:00">09:00</option>
                    <option value="09:30">09:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    
                </select>
                <br>

                <select id="drop4" name="drop4">
                    <option disabled selected>End time</option>
                    
                    <option value="09:30">09:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>

                </select><br>
                <button  id="search" type="submit"   style=" width:250px; height:25px;">Search</button>
            </form>
            </div>
    </body>
    <script>
    function set()
    {
        document.getElementById("search").style.display="block";
        if(document.getElementById("drop").value=="room")
        {
            
            document.getElementById("drop4").style.display="none"; 
            document.getElementById("drop3").style.display="none"; 
            document.getElementById("drop2").style.display="block";
    	
    	
        }
        if(document.getElementById("drop").value=="time")
        {
    	
            document.getElementById("drop2").style.display="none"; 
            document.getElementById("drop3").style.display="block";
            document.getElementById("drop4").style.display="block"; 
    	}

    }
    function func()
    {
        
        
        if(document.getElementById("drop").value=="room")
        {
            //alert("room");
            document.book.action="room.php";
            return true;
        }
        else
        {
            
            if((document.getElementById("drop3").value)>=(document.getElementById("drop4").value)) 
            {
                alert("Invalid time");
                return false;
            }
            else
            {
                //alert("else");
                document.book.action="time.php";
                return true;
            }
            
        }
        
    }
    </script>
</html>