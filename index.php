<!DOCTYPE html>
<html>
	<head>
		<title>
		FTC Scouting
		</title>
	</head>

	<body>
	
	<div style="background-color:#E6B222; height:50px;"> <h1> The Yellow Alliance </h1> </div>
	<div> <p> This website is under construction, and will contain scouting data for teams in Iowa in the near future </p> </div>
	
	<!--
	<div> <div> <p style="background-color:#aaaaaa;display:inline;"> Team Information </p> </div>
		<?php	
			//$teamInfo
			$file=fopen("teamInfo.txt", "r") or exit("Unable to open file!");	//opens the file containg team info
			
			if ($file != 0) {			//if the team info file exists,
				chop($file, "\n\r");		//cut the ending line			
				fgets($file);				//and skip over the extra info at the beginning
				echo "<table border='2'> <tr> <th> Team Number</th> <th> Team Name</th> <th>Team Location</th> </tr>";
				while(!feof($file)) {				//loop until the end of the file
					$tempHolder = fgets($file);	//gets the next line of team info
					$tempHolder = chop($tempHolder);	//gets rid of extra whitespace at the end
					$temp = explode("|", $tempHolder, 4);
					//print_r($temp);
					//echo "<br>";
					echo "<tr>";
					echo "<td>". $temp[0] ."</td>";
					echo "<td>". $temp[1] ."</td>";
					echo "<td>". $temp[2] ."</td>";		
					echo "</tr>";						
				}
				echo"</table>";
			}
			fclose($file);
		?>
	</div>
	-->
	
	<div>
		<?php
			//attempt to connect to the server and database
			$con=mysqli_connect("localhost","ftcscouting","FTC_Iowa!","ftcscouting");

			// Check connection
			if (mysqli_connect_errno($con))
		  		{
		  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  		}
	  		
	  		//run a sql query
			$result = mysqli_query($con,"SELECT DISTINCT * FROM team_information");	
			
			//set up the table with column names
			echo "<table border='4'> <tr> <th>Team Number</th> <th>Team Name</th> <th>School/Organization</th> <th>City</th> <th>State</th> <th>Country</th> <th>Website</th> <th>Awards</th> </tr>";
	  		
	  		//display each team in a table
	  		while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
			  {
			  	   $string = "<tr>";
					foreach($row as $value)
					{
						$string .= "<td>" . $value . "</td>";
					}
					echo $string . "</tr>";
			  }
			  echo "</table>";
			  
			//close the connection to the database
			mysqli_close($con);
	  	?>
	</div>
	
	
	</body>
</html>
