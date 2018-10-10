<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="name">
    <span class="error">* <?php echo $nameMis;?></span>
    <br></br>
    <input type="text" name="email">
    <span class="error">* <?php echo $emailMis;?></span>
    <br></br>
    <input type="text" name="website">
    <span class="error">*<?php echo $websiteMis;?></span>
    <br></br>
    <textarea name="comment" rows="4" cols="40"></textarea>
    <br></br>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderMis;?></span>
    <input type="submit" name="submit" value="Submit">
</form>
<?php

$nameMis = $emailMis = $genderMis = $websiteMis = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameMis = "Name is required";
    }   else {
        $name = test_input ($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $emailMis = "Email is required";
    }   else {
        $email = test_input ($_POST["email"]);
    }
    if (empty($_POST["website"])) {
        $website = "";
    }   else {
        $website = test_input ($_POST["website"]);
    }
    if (empty($_POST["comment"])) {
        $comment = "";
    }   else {
        $comment = test_input ($_POST["comment"]);
    }
    if (empty($_POST["gender"])) {
        $genderMis = "Gender is required";
    }   else {
        $gender = test_input ($_POST["gender"]);
    }
}

function test_input ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>