<!DOCTYPE html>
<html>
<head>
<title>
FTC Scouting
</title>
</head>

<body>
<?php
echo "This is some php";
?>
<div style="background-color:#E6B222; height:50px;"> <p> The Yellow Alliance </p> </div>
<div> <p> This website is under construction, and will contain scouting data for teams in Iowa in the near future </p>


<?php
	echo "This is some php that does math";
	
	function testFunction($x, $y) {
		$z = $x + $y;
		$w = $x * $y;

		echo "<br>
				 z = $x + $y = $z <br>
				 w = $x * $y = $w ";
	}
	
	function concatenate($txt1, $txt2) {
		echo $txt1 . " plus " . $txt2 . ". Lengths: " . strlen($txt1) . ",  " . strlen($txt2);
	}
	
	testFunction(2, 3);	//runs the function, testFunction
	concatenate("Hello", "World");
	

?>

</body>
</html>

