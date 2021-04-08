<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$roll = $_POST['roll'];

	$con =mysqli_connect("localhost","root","","final");
	if (!$con) {
		echo "connection Doesn't establised";
	}
	$query = "INSERT INTO class(name,email,roll) VALUES ('$name','$email','$roll')";
	$run = $con -> query($query);
	if ($run) {
			echo"Data has been insert";
		}
		else{
			echo "Date has been not insert";
		}
?>