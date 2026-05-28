<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eoi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$creatTableSQL = "CREATE TABLE if not exists eoi (
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

if ($conn->query($createTableSQL) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$job_reference = $_POST['job_reference'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$street_address = $_POST['street_address'];
$suburb = $_POST['suburb'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$insertSQL = "INSERT INTO eoi (
  job_reference,
  first_name,
  last_name,
  dob,
  gender,
  street_address,
  suburb,
  state,
  postcode,
  email,
  phone
)

VALUES (

    '$job_reference',
    '$first_name',
    '$last_name',
    '$dob',
    '$gender',
    '$street_address',
    '$suburb',
    '$state',
    '$postcode',
    '$email',
    '$phone'

)";

if ($conn->query($insertSQL) === TRUE) {
    echo "Application submitted successfully<br>";
} else {
    die("Error inserting record: " . $conn->error);
};

$result = $conn->query("select * from eoi order by eoinumber desc limit 1");

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();

echo "<table border='1'>
  <tr><th>question</th><th>response</th></tr>

  <tr>
    <td>eoi number</td>
    <td>{$row['EOInumber']}</td>
  </tr>
  <tr>
    <td>reference number</td>
    <td>{$row['job_reference']}</td>
  </tr>
  <tr>
    <td>first name</td>
    <td>{$row['first_name']}</td>
  </tr>
  <tr>
    <td>last name</td>
    <td>{$row['last_name']}</td>
  </tr>
  <tr>
    <td>date of birth</td>
    <td>{$row['dob']}</td>
  </tr>

  </table>";
} else {
  echo "no applications found.";
}

$conn->close();
?>