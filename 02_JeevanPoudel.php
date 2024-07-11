
<!-- 02.  Create a PHP program that converts temperatures from Celsius to Fahrenheit. Ask the
user for a temperature in Celsius and use a conditional statement to check if it's below
freezing (below 0°C) or not. Provide an appropriate message. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>PHP program that converts temperatures from Celsius to Fahrenheit</h1>

    <form action="#" method="post">

    <input type="number" placeholder="Enter Temperature in Deg Cel" name="temp" id="temp">
    <input type="submit" value="Submit">
    </form>
    <?php 
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $temp = $_POST['temp'];
    
    //  °F = (°C × 9/5) + 32
    
    $F =($temp * 9/5) + 32 ;
    echo($F);
}
    ?>
</body>
</html>