<?php


$name = $_POST["name"];
$email = ["email"];
$id = ["id"];

$con = new mysqli("localhost", "root", "", "wad");
$q = "Inserted into Mytable(name,email) values('" . $name . "','" . $email . "'.$id)";

if ($con->query($q) == TRUE) {
    header("Location:input.php");
} else {
    $con->error;
}
$con->close();
