<?php
include("includes/mysql_connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FTC Scouting-Teams</title>
</head>

<body>
	<div id="header">
    	<div style="background-color:#E6B222; height:50px;"> <h1> The Yellow Alliance </h1> </div>
    	<nav>
    		<a href="/index.php">Home</a>
        	<a href="/teams.php">Teams</a>
        	<a href="/events.php">Events</a>
    	</nav>
    </div>
    <div id="content">
    	<div id="teamtable">
        	<!-- temporarily display a basic table with all the team information -->
            <?php
	  			//run a sql query
				$result = mysqli_query($con,"SELECT DISTINCT * FROM team_information");	
			
				//set up the table with column names
				echo "<table border='4'> <tr> <th>Team Number</th> <th>Team Name</th> <th>School/Organization</th> <th>City</th> <th>State</th> <th>Country</th> <th>Website</th> <th>Awards</th> </tr>";
	  		
	  			//display each team in a table
	  			while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
					$string = "<tr>";
					foreach($row as $value) {
					$string .= "<td>" . $value . "</td>";
					}
					echo $string . "</tr>";
				}
				echo "</table>";
			  
				//close the connection to the database
				mysqli_close($con);
	  		?>   	
    </div>
    <div id="footer">
    </div>

</body>
</html>
