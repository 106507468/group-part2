<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="About our team page">
    <meta name="keywords" content="team, about us, ecosolutions">
    <meta name="author" content="WWW">
    <title>About Us Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        h1 { font-size: 25px; }
    </style>
</head>
<body>

<?php include 'header.inc'; ?>
<?php include 'settings.php'; ?>

<h1 style="color: green; text-align: center;">About Our Team</h1>

<section>
    <h2>Group Details</h2>
    <ul class="info">
        <li><strong>Group Name:</strong> WWW (Worldwide Women)</li>
        <li><strong>Class:</strong>
            <ul>
                <li>Day: Friday</li>
                <li>Time: 2:30pm</li>
            </ul>
        </li>
    </ul>
</section>

<h2>Team Contributions</h2>
<dl class="contributions">
<?php
$result = $conn->query("SELECT * FROM about ORDER BY id ASC");
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<dt>' . htmlspecialchars($row['name']) . ' <span class="student-id">Student ID: ' . htmlspecialchars($row['student_id']) . '</span></dt>';
        echo '<dd>Worked on <strong>' . htmlspecialchars($row['pages_worked_on']) . '</strong></dd>';
        echo '<dd>Contribution: ' . htmlspecialchars($row['contribution']) . '</dd>';
        echo '<dd>Quote: "' . htmlspecialchars($row['quote']) . '"</dd>';
    }
} else {
?>
    <dt>Dharma <span class="student-id">Student ID: 106507468</span></dt>
    <dd>Worked on <strong>index.html (shared) and apply.html</strong></dd>
    <dd>Quote: "Per aspra ad astra (Through hardship to the stars)"</dd>

    <dt>Mehak <span class="student-id">Student ID: 106396417</span></dt>
    <dd>Worked on <strong>about.html, index.html, and the shared navigation menu</strong></dd>
    <dd>Quote: "Every human has a gem hidden within, but the fog of doubt weakens it."</dd>

    <dt>Sreetoma <span class="student-id">Student ID: 106601739</span></dt>
    <dd>Worked on <strong>Index.html, footer across the pages</strong></dd>
    <dd>Quote: "If no one responds to your call, then go your own way alone"</dd>
<?php } ?>
</dl>

<h2>Our Team</h2>
<figure class="photo">
    <img src="images/groupphoto.png" alt="Group photo">
    <figcaption>Our amazing team 🌿</figcaption>
</figure>

<table class="tableab">
    <caption>Team Fun Facts</caption>
    <tr class="trab">
        <th class="thab">Name</th>
        <th class="thab">Dream Job</th>
        <th class="thab">Pet</th>
        <th class="thab">Hometown</th>
    </tr>
    <tr class="trab">
        <td class="tdab">Dharma</td>
        <td class="tdab">Game designer/developer</td>
        <td class="tdab">5 cats - May, Bruce, Ollie, Lexi and Summer</td>
        <td class="tdab">Melbourne</td>
    </tr>
    <tr class="trab">
        <td class="tdab">Sreetoma</td>
        <td class="tdab">Architectural engineer</td>
        <td class="tdab">Archie (golden retriever x poodle)</td>
        <td class="tdab">Kolkata</td>
    </tr>
    <tr class="trab">
        <td class="tdab">Mehak</td>
        <td class="tdab">Software engineer</td>
        <td class="tdab">Mocha (Shih Tzu)</td>
        <td class="tdab">Delhi</td>
    </tr>
</table>

<h2>Special mention</h2>
<section class="pets">
    <img src="images/cat1.png" alt="cat1">
    <img src="images/cat2.png" alt="cat 2">
    <img src="images/cat3.png" alt="cat 3">
    <img src="images/cat4.png" alt="cat 4">
    <img src="images/cat5.png" alt="cat 5">
    <img src="images/Archie.png" alt="Archie">
    <img src="images/Mocha.jpg" alt="Mocha">
</section>

<?php include 'footer.inc'; ?>

</body>
</html>