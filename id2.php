<?php
echo "Name = " . $_POST["name"] . "<br>";
echo "Email = " . $_POST["email"] . "<br>";

$name = $_POST["name"];
$email = $_POST["email"];

$con = new mysqli("localhost", "root", "", "wad");
$q = "inserted into the table mytable(name,email) values('" . $name . "','" . $email . "')";
echo $q;
if ($con->query($q) == TRUE) {
    echo "Data inserted into the Table";
    //	header("Location:index.php")
?>


<?php
} else {
    echo $con->error;
    $con->close();
}
?>