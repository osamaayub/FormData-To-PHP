<?php


session_start();
//$_SESSION["username"]="Umair";
if (isset($_SESSION["username"])) {

	$name=$_SESSION["username"];
	
echo "Name is: ".$name."<br>";

echo "Email is ".$_SESSION["email"]."<br>";

echo "password is".$_SESSION["password"]."<br>";

print_r($_SESSION);
	# code...
}else{
	echo "You're already loggged out";
}



?>