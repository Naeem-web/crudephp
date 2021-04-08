<?php
		$name = $_POST['name'];
		$roll = $_POST['roll'];

$con =mysqli_connect("localhost","root","","final");
	if (!$con) {
		echo "connection Doesn't establised";
	}
		$query = "UPDATE class set name ='$name' where roll = '$roll'";
			$run = $con -> query($query);
			if ($run) {
			echo"Data has been updated";
		}
		else{
			echo "Date has been not updated";
		}
	?>