<!DOCTYPE html>
<html>
<head>
	<title>WAD LECTURE</title>
</head>
<body>

	<form action="id2.php" method="POST">
		Enter Your Name
		<input type="text" name="name" placeholder="Enter your Name"> <br> <br>

		Enter Your Email
		<input type="text" name="email" placeholder="Enter your Email"> <br>

		<input type="submit" value="submit">
		<input type="reset" value="Clear">
	</form>


	<?php

		$con = new mysqli("localhost","root","","wad");
		echo "<table border=1>";
		$q = "select * from mytable";
		$rs = $con->query($q);
		echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>Name</th>";
			echo "<th>Email</th>";
			echo "<th>Delete</th>";
			echo "<th>Update</th>";
		echo "</tr>";

		while ($r = $rs->fetch_assoc()) {

			echo "<tr>";
			echo "<td>".$r["id"]. "</td>";
			echo "<td>".$r["name"]. "</td>";
			echo "<td>".$r["email"]. "</td>";
			echo "<td><a href='delete.php?id=".$r["id"]."'> Delete </a></td>";
			echo "<td><a href='update.php?id=".$r["id"]."'> Update </a></td>";
			//echo $r["id"]." ".$r["name"]." ".$r["email"]."<br>";
			echo "</tr>";
		}
		echo "</table>";


	?>
</body>
</html>