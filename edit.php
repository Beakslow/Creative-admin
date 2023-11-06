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
$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
?>

<form action="edit_process.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
Name: <input type="text" name="username" value="<?php echo $row['username']; ?>"><br>
Password: <input type="text" name="password" value="<?php echo $row['password']; ?>"><br>
Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
<input type="submit" value="Save">
</form>

<?php
} else {
echo "Record not found.";
}

mysqli_close($conn);
?>

<br>
<a href="dragon.php">Back to Main Page</a>
</body>
</html>