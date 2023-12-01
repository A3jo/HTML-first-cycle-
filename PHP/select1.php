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

$sql = "SELECT  Name,Course FROM Student WHERE ID=4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Course"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>