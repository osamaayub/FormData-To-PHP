<?php
	$con = new mysqli("localhost","root","","wad"); //1-servr name 2- username of database 3- password 4- database name

	$q = "delete from mytable where id=".$_GET["id"];
	//echo $q;

	if($con->query($q)==TRUE){
		//echo "Data Inserted";
	header("Location:index.php");

	}else{
		echo $con->error;
	
	}

		$con->close();
?>

