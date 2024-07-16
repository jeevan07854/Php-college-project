<!-- Write a PHP program that asks for a person's age and citizenship status. If the person is
both 18 or older and a citizen, display "You are eligible to vote"; otherwise, display "You
are not eligible to vote." -->


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

    if (is_numeric($age) && $age >= 18 && $citizen == 'yes') {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
    }
} else {
?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Age: <input type="text" name="age"><br>
        Are you a citizen? (yes/no): <input type="text" name="citizen"><br>
        <input type="submit" value="Check Eligibility">
    </form>
<?php
}
?>

</body>
</html>
