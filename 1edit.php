<!DOCTYPE html>
<html>
<head>
<title>Edit Record</title>
<link rel="stylesheet" href="edit.css">
</head>
<body>
<h1>Edit Record</h1>

<?php
$conn = mysqli_connect("localhost", "root", "", "webproject");


if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
$sql = "SELECT * FROM bookings WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
?>

<form action="1edit_process.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
Name: <input type="text" name="name" placeholder="Username" value="<?php echo $row['name']; ?>"><br>
Email: <input type="text" name="email" placeholder="E-mail" value="<?php echo $row['email']; ?>"><br>
Contact No: <input type="text" name="number" placeholder="Contact No." value="<?php echo $row['number']; ?>"><br>
room: <select class="na" name="rooms" value="<?php echo $row['room']; ?>">
                <option>Deluxe</option>
                <option>Standard</option>
            </select>
 Add-Ons:       <select class="na" name="additionals" value="<?php echo $row['additionals']; ?>">
                <option>Pillow</option>
                <option>Blankets</option>
                <option>Mattress</option> 
</select>
Check-In: <input type="date" name="check_in" value="<?php echo $row['check_in']; ?>"><br>
Check-Out: <input type="date" name="check_out" value="<?php echo $row['check_out']; ?>"><br>
<input type="submit" value="Save">
</form>

<?php
} else {
echo "Record not found.";
}

mysqli_close($conn);
?>

<br>
<a href="booking.php">Back to Main Page</a>
</body>
</html>