<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: apply.php");
    exit();
}

if (!isset($_POST['reference'], $_POST['firstname'], $_POST['lastname'], $_POST['postcode'], $_POST['email'], $_POST['phone'])) {
    die("Missing form data");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecosolutions";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$createTableSQL = "CREATE TABLE if not exists eoi (
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

    communication VARCHAR(3),
    teamwork VARCHAR(3),
    problem VARCHAR(3),
    timemanage VARCHAR(3),
    organisation VARCHAR(3),
    adaptability VARCHAR(3),
    detailoriented VARCHAR(3),
    reliability VARCHAR(3),
    customerservice VARCHAR(3),
    computerskills VARCHAR(3),

    otherskills TEXT,

    status ENUM('New', 'Current', 'Final') DEFAULT 'New'
)";

if (!$conn->query($createTableSQL)) {
    die("Table creation failed: " . $conn->error);
}


$errors = [];


if (!preg_match("/^[A-Za-z0-9]{5}$/", $_POST['reference'])) {
    $errors[] = "Invalid job reference";
}
if (!preg_match("/^[A-Za-z]{1,20}$/", $_POST['firstname'])) {
    $errors[] = "Invalid first name";
}
if (!preg_match("/^[A-Za-z]{1,20}$/", $_POST['lastname'])) {
    $errors[] = "Invalid last name";
}
if (!preg_match("/^\d{4}$/", $_POST['postcode'])) {
    $errors[] = "Invalid postcode";
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email";
}
if (!preg_match("/^[0-9]{8,12}$/", $_POST['phone'])) {
    $errors[] = "Invalid phone number";
}

if (!empty($errors)) {
  echo "<h2>Form Errors</h2>";
  echo "<ul>";

  foreach ($errors as $error) {
    echo "<li>$error</li>";
  }
  echo "</ul>";
  exit();
}

function sanitise($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$reference = sanitise($_POST['reference']);
$firstname = sanitise($_POST['firstname']);
$lastname = sanitise($_POST['lastname']);
$dob = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['dob'])));
$gender = sanitise($_POST['gender']);
$streetaddress = sanitise($_POST['streetaddress']);
$suburb = sanitise($_POST['suburb']);
$state = sanitise($_POST['state']);
$postcode = sanitise($_POST['postcode']);
$email = sanitise($_POST['email']);
$phone = sanitise($_POST['phone']);
$otherskills = sanitise($_POST['otherskills']);


$communication = isset($_POST['communication']) ? "Yes" : "No";
$teamwork = isset($_POST['teamwork']) ? "Yes" : "No";
$problem = isset($_POST['problem']) ? "Yes" : "No";
$timemanage = isset($_POST['timemanage']) ? "Yes" : "No";
$organisation = isset($_POST['organisation']) ? "Yes" : "No";
$adaptability = isset($_POST['adaptability']) ? "Yes" : "No";
$detailoriented = isset($_POST['detailoriented']) ? "Yes" : "No";
$reliability = isset($_POST['reliability']) ? "Yes" : "No";
$customerservice = isset($_POST['customerservice']) ? "Yes" : "No";
$computerskills = isset($_POST['computerskills']) ? "Yes" : "No";


$sql = "INSERT INTO eoi (
job_reference, first_name, last_name, dob, gender,
street_address, suburb, state, postcode,
email, phone,
communication, teamwork, problem, timemanage, organisation,
adaptability, detailoriented, reliability, customerservice, computerskills,
otherskills
)
VALUES (
'$reference', '$firstname', '$lastname', '$dob', '$gender',
'$streetaddress', '$suburb', '$state', '$postcode',
'$email', '$phone',
'$communication', '$teamwork', '$problem', '$timemanage', '$organisation',
'$adaptability', '$detailoriented', '$reliability', '$customerservice', '$computerskills',
'$otherskills'
)";

if ($conn->query($sql) === TRUE) {
    $id = $conn->insert_id;

    echo "<h2>Application Submitted Successfully</h2>";
    echo "<p>Your EOI Number is: <strong>$id</strong></p>";
    echo "<p>Press <a href="index.php">here</a> to return</p>"
} else {
  die ("SQL Error: " . $conn->error);
}

$conn->close();

?>