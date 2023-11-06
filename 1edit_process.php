<?php
$conn = mysqli_connect("localhost", "root", "", "webproject");

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$rooms = $_POST['rooms'];
$additionals = $_POST['additionals'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

$sql = "UPDATE bookings SET  name = '$name', email = '$email', number = '$number', rooms = '$rooms', additionals = '$additionals', check_in = '$check_in', check_out = '$check_out' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
header("Location: booking.php");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>