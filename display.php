<?php
	$con =mysqli_connect("localhost","root","","final");
	if (!$con) {
		echo "connection Doesn't establised";
	}
	$query ="SELECT name,email,roll from class";

	$run = $con -> query($query);

	if ($run ->num_rows>0){
		while ($row= $run ->fetch_assoc()) {
			echo $row["name"]."<br>";
			echo $row["email"]."<br>";
			echo $row["roll"]."<br>";
		}
	}
	else{
		echo "Not data in Database";
	}
?>