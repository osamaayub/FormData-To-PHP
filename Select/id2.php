<?php
	
	//echo $_POST["name"];
	
	//echo "Name = ".$_POST["name"]."<br>";
	//echo "Email = ".$_POST["email"]."<br>";

	$name = $_POST["name"];
	$email = $_POST["email"];

	$con = new mysqli("localhost","root","","wad"); //1-servr name 2- username of database 3- password 4- database name

	$q = "insert into mytable(name,email) values('".$name."','".$email."')";
	//echo $q;

	if($con->query($q)==TRUE){
		//echo "Data Inserted";
		header("Location:index.php");

	}else{
		echo $con->error;
	
	}

		$con->close();
?>

