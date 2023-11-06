<!DOCTYPE html>
<html>
<head>
<title>Add Record</title>
<link rel="stylesheet" href="add.css">
</head>
<body>
<h1>Add Record</h1>

<form action="1add_process.php" method="post">

Name: <input type="text" name="name" placeholder="Username"><br>
Email: <input type="text" name="email" placeholder="E-mail"><br>
Contact No: <input type="text" name="number" placeholder="Contact No."><br>
Room Type: 
<input type="checkbox" name="rooms" value="Standard">Standard
<input type="checkbox" name="rooms" value="Deluxe">Deluxe<br>
Add-Ons: 
<input type="checkbox" name="additionals" value="Pillow">Pillow
<input type="checkbox" name="additionals" value="Blanket">Blanket
<input type="checkbox" name="additionals" value="Matress">Matress<br>
Check-In: <input type="date" name="check_in"><br>
Check-Out: <input type="date" name="check_out"><br>
<input type="submit" value="Add">
</form>

<br>
<a href="booking.php">Back to Main Page</a>
</body>
</html>
