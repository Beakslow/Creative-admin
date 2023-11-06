<?php
$conn = mysqli_connect("localhost", "root", "", "webproject");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM bookings WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
       header ("Location: booking.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>