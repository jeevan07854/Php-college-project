
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

    <form method="post">

    <input type="number" placeholder="°C" for="temp" name="temp" id="temp">
    <input type="submit" value="Submit">
    </form>
    <?php 
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $temp = $_POST['temp'];
    
    //  °F = (°C × 9/5) + 32
    
    $F =($temp * 9/5) + 32 ;
    echo"<P> $temp = $F  </P>";

//    Condition for displaying message about freazing temperature
    if($temp > 0){
        echo "<P> The Temperature is bellow freazing i.e. $F </P>";
    }
    else{
        echo "<P> The Temperature is freazing i.e. $F </P>";

    }
}
    ?>
</body>
</html>