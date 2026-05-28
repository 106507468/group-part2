<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eoi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE eoi (
    EOInumber INT AUTO_INCREMENT PRIMARY KEY,
    job_reference VARCHAR(5),
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    dob DATE,
    gender VARCHAR(20),
    street_address VARCHAR(40),
    suburb VARCHAR(40),
    state VARCHAR(30),
    postcode VARCHAR(4),
    email VARCHAR(50),
    phone VARCHAR(12),
    /* skills goes here once i work it out
    */
    status ENUM('New', 'Current', 'Final') DEFAULT 'New'
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>