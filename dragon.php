<<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" type="text/css" href="booking.css">
    </head>
    <body>
        <header class="header"> 
            <h2>ADMIN DASHBOARD</h2>
        </header>
        <section class="sidebar">
            <img src="AH.PNG" alt="AmberHills Hotel" width="75" height="50" class="box">
            <h1>AmberHills Hotel</h1>
            <p><a href="admin.php"> Dashboard</a></p>
            <p><a href="">Clients</a></p>
            <p><a href="">Bookings</a></p>
            </div>
        </section>

        <main class="main">
           <h1>Bookings</h1>
           <br>
           <table class="my-table">
            <thead>
                <tr>
                    <th>ID</TH>
                    <th>Name</th>
                    <th>Password</th>
                    <th>E-mail</th>
                    
</tr>
</thead>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "webproject";

$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Display records
$sql = "SELECT * FROM users";
$result = $con->query($sql);

if (!$result) { // Check if the query execution is not successful
    die("Invalid query: " . $con->error);
}

while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" .
                $row["id"] . "'>Delete</a></td>";
            echo "</tr>";
        }

    $con->close();
    ?>
</table>
<br>
<div class="grid-item">
<a href="add.php" class="centered-anchor">Add Record</a>
</body>
</html>
