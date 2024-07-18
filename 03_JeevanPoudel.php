<!DOCTYPE html>
<html>
<head>
    <title>Eligibility Check</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST['age'];
    $citizen = $_POST['citizen'];

    if ($age >= 18 && $citizen == 'yes') {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
    }
} else {
?>
    <form method="post" action="#">
        Age: <input type="text" name="age"><br>
        Are you a citizen? (yes/no): <input type="text" name="citizen"><br>
        <input type="submit" value="Check Eligibility">
    </form>
<?php
}
?>

</body>
</html>
