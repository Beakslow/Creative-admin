<?php
$conn = mysqli_connect("localhost", "root", "", "webproject");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>