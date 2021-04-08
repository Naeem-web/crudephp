<?php
		$roll = $_POST['roll'];

$con =mysqli_connect("localhost","root","","final");
	if (!$con) {
		echo "connection Doesn't establised";
	}
	$query = "DELETE from class where  roll=$roll";
			$run = $con -> query($query);
			if ($run) {
			echo"Data has been deleted";
		}
		else{
			echo "Date has been not deleted";
		}

	?>