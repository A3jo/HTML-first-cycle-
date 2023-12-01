<?php
$servername = "localhost";
$username = "23mca008";
$password = "2086";
$dbname = "23mca008";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Student (Name, Course, Age)
VALUES ('Unni', 'MCA', '23')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>