<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eoi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE if not exists eoi (
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

  echo "
  <table>
  <tr>
    <th>Questionr</th>
    <th>Response</th>
  </tr>

  <tr>
    <td>EOI Number</td>
    <td>$EOInumber</td>
  </tr>
  
  <tr>
    <td>Reference number</td>
    <td>$job_reference</td>
  </tr>

  <tr>
    <td>First name</td>
    <td>$first_name</td>
  </tr>

  <tr>
    <td>Last name</td>
    <td>$last_name</td>
  </tr>

  <tr>
    <td>Date of Birth</td>
    <td>$dob</td>
  </tr>

  
  </table>
  ";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>