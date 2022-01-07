<!DOCTYPE html>
<html>

<head>

    <title>WAD LECTURE</title>
</head>

<body>


    <form action="data.php" method="POST">
        <input type="id" name="id" placeholder="Enter the id"><br><br>
        <input type="text" name="name" placeholder="Enter the name"><br><br>
        <input type="text" name="email" placeholder="Enter the Email"><br><br>
        <input type="button" value="submit">
        <input type="button" value="clear">
    </form>

    <?php

    $con = new mysqli("localhost", "root", "", "wad");
    echo "<table border=1>";
    $q = "select *from mytable";
    $rs = $con->query($q);
    while ($r = $rs->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $r["id"] . "</td>";
        echo "<td>" . $r["name"] . "</td>";
        echo "<td>" . $r["email"] . "</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>

</html>