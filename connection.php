<?php
// Connect to database
$conn = mysqli_connect('localhost','root', '', 'sample');
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['username'];
$Password = $_POST['password'];

$sql = "INSERT INTO register (name,password)
VALUES ('$name', '$Password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>