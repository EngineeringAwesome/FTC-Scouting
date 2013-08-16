<!DOCTYPE html>
<html>
	<head>
		<title>
		FTC Scouting
		</title>
	</head>

	<body>
	
	<div style="background-color:#E6B222; height:50px;"> <p> The Yellow Alliance </p> </div>
	<div> <p> This website is under construction, and will contain scouting data for teams in Iowa in the near future </p> </div>
	<div style="background-color:#aaaaaa;"> <p> Team Information </p>
		<?php	
			$teamInfo
			$file=fopen("teamInfo.txt", "r") or exit("Unable to open file!");	//opens the file containg team info
			
			if ($file != 0) {	//if the team info file exists, skip the first line
				fgets($file);
				chop($file);
				while(!feof($file)) {				//loop until the end of the file
					$tempHolder = fgets($file);
					$tempHolder = chop($tempHolder);	//gets rid of extra whitespace at the end
					$temp = explode("|", $tempHolder, 4);
					print_r($temp);
					echo "<br>";					
				}
			}
			fclose($file);
		?>
	</div>
	
	</body>
</html>

