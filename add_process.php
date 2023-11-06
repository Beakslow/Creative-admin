<?php
$conn = mysqli_connect("localhost", "root", "", "webproject");

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

if (mysqli_query($conn, $sql)) {
header("Location: dragon.php");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>