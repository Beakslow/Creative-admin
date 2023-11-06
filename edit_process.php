<?php
$conn = mysqli_connect("localhost", "root", "", "webproject");

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE users SET username = '$username', password = '$password', email = '$email' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
header("Location: dragon.php");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>