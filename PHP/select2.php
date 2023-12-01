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

$sql = "SELECT  ID,Name,Course,Age FROM Student WHERE ID='$_POST[ID]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "-id: " . $row["ID"]. "<br>-Name: " . $row["Name"]. "<br>-course:" . $row["Course"]."<br>-age: " . $row["Age"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>