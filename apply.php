
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="application form for job openings">
        <meta name="keywords" content="jobs, apply, form">
        <meta name="author" content="Dharma Harris, WWW(World Wide Women)">
        <title>Apply Page</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            legend{
                font-weight: bold;
            }
        </style>
    </head>
    <?php include 'header.inc'; ?>
    <body>
        <div id="page">
            <form method="POST" action="process_eoi.php" id="form-container" novalidate>
                <fieldset>
                    <legend>Reference No.</legend>
                    <p><label for="reference">Job Reference Number</label>
                    <input type="text" id="reference" name="reference" required></p>
                </fieldset>
                <fieldset>
                    <legend>About Applicant</legend>
                    <p><label for="firstname">First name</label>
                    <input type="text" id="firstname" name="firstname" required></p>
                    <p><label for="lastname">Last name</label>
                    <input type="text" id="lastname" name="lastname" required></p>
                    <label for="date">Date of Birth</label>
                    <input type="text" id="dob" placeholder="dd/mm/yyyy" name="dob"><br>
                </fieldset>
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="prefernottosay" name="gender" value="prefernottosay">
                    <label for="prefernottosay">Prefer not to say</label><br>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label>
                </fieldset>
                <fieldset>
                    <legend>Address</legend>
                    <p><label for="streetaddress">Street Address</label>
                    <input type="text" id="streetaddress" name="streetaddress" required></p>
                    <p><label for="suburb">Suburb/Town</label>
                    <input type="text" id="suburb" name="suburb" required>
                    <label for="state">State</label>
                    <select name="state" id="state" required>
                        <option value="">Select</option>
                        <option value="vic">VIC</option>
                        <option value="nsw">NSW</option>
                        <option value="qld">QLD</option>
                        <option value="nt">NT</option>
                        <option value="wa">WA</option>
                        <option value="sa">SA</option>
                        <option value="tas">TAS</option>
                        <option value="act">ACT</option>
                    </select></p>
                    <label for="postcode">Postcode</label>
                    <input type="text" id="postcode" name="postcode" pattern="\d{4}" size="4">
                </fieldset>
                <fieldset>
                    <legend>Contact Info.</legend>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="example@email.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}" required>
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" pattern="[0-9]{8,12}" required>
                </fieldset>
                <fieldset>
                    <legend>Work Skills</legend>
                    <div id="column1">
                        <label for="Communication"><input type="checkbox" id="Communication" name="Communication" value="Communication">Communication Skills</label><br>
                        <label for="teamwork"><input type="checkbox" id="teamwork" name="teamwork" value="teamwork">Teamwork</label><br>
                        <label for="problem"><input type="checkbox" id="problem" name="problem" value="problem">Problem Solving</label><br>
                        <label for="timemanage"><input type="checkbox" id="timemanage" name="timemanage" value="timemanage">Time Management</label><br>
                        <label for="organisation"><input type="checkbox" id="organisation" name="organisation" value="organisation">Organisation</label><br>
                    </div>
                    <div id="column2">
                        <label for="adaptability"><input type="checkbox" id="adaptability" name="adaptability" value="adaptability">Adaptability</label><br>
                        <label for="detailoriented"><input type="checkbox" id="detailoriented" name="detailoriented" value="detailoriented">Detail-Oriented</label><br>
                        <label for="reliability"><input type="checkbox" id="reliability" name="reliability" value="reliability">Reliability</label><br>
                        <label for="customerservice"><input type="checkbox" id="customerservice" name="customerservice" value="customerservice">Customer Service Skills</label><br>
                        <label for="computerskills"><input type="checkbox" id="computerskills" name="computerskills" value="computerskills">Basic Computer Skills</label><br>
                    </div><br><br>
                    <label for="otherskills" style="font-weight: bold;">Other Skills</label><br>
                    <textarea id="otherskills" name="otherskills" rows="4" cols="50"></textarea>
                </fieldset>
                <input id="button" type="submit" value="Submit"/>
                <input id="button" type="reset" value="Reset Form"/>
            </form>
        </div>
        <?php include 'footer.inc'; ?>
    </body>
</html>