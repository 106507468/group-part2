<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE eoi (
    EOInumber INT AUTO_INCREMENT PRIMARY KEY,
    job_reference VARCHAR(20),
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    dob DATE,
    gender VARCHAR(10),
    street_address VARCHAR(100),
    suburb VARCHAR(50),
    state VARCHAR(20),
    postcode VARCHAR(10),
    email VARCHAR(100),
    phone VARCHAR(20),
    skill1 VARCHAR(100),
    skill2 VARCHAR(100),

    status ENUM('New', 'Current', 'Final') DEFAULT 'New'
)"

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>