<!DOCTYPE html>
<html>
<head>
    <title>Coffee Ordering System</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $coffee_choice = $_POST['coffee'];

    switch ($coffee_choice) {
        case 'Espresso':
            $price = 300;
            echo "The price of an Espresso is $" . $price;
            break;
        case 'Latte':
            $price = 400;
            echo "The price of a Latte is $" . $price;
            break;
        case 'Cappuccino':
            $price = 450;
            echo "The price of a Cappuccino is $" . $price;
            break;
        case 'Mocha':
            $price = 500;
            echo "The price of a Mocha is $" . $price;
            break;
        default:
            echo "Invalid option selected. Please choose a valid coffee.";
            break;
    }
} else {
?>
    <form method="post" action="#">
        <label for="coffee">Choose your coffee:</label>
        <select name="coffee" id="coffee">
            <option value="Espresso">Espresso</option>
            <option value="Latte">Latte</option>
            <option value="Cappuccino">Cappuccino</option>
            <option value="Mocha">Mocha</option>
        </select><br><br>
        <input type="submit" value="Order Coffee">
    </form>
<?php
}
?>

</body>
</html>
