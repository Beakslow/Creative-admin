<!DOCTYPE html>
<html>
<head>
<title>Delete Record</title>
<link rel="stylesheet" href="delete.css">

</head>
<body>
<h1>Delete Record</h1>

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
}
?>

<form method="post" action="delete_record.php" class="form-container"> 
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" name="delete" value="Delete">
    <a href="dragon.php">Cancel</a>
</div>
</form>
</html>

