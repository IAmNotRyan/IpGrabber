<?php
$servername = '';
$username = '';
$password = '';
$dbname = '';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//get info
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$time = date('H:i:s');
$date = date('Y-m-d');


//insert data to sql table
$sql = "INSERT INTO test (ip, Tijd, Datum)
VALUES ('$ip', '$time', '$date')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
