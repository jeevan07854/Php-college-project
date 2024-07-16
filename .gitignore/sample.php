<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Radio Button for Multiple Selections</title>
</head>
<body>
    <h2>Single Radio Button for Multiple Selections</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p>Select your favorite programming languages:</p>
        <input type="radio" id="java" name="languages[]" value="Java">
        <label for="java">Java</label><br>
        <input type="radio" id="python" name="languages[]" value="Python">
        <label for="python">Python</label><br>
        <input type="radio" id="javascript" name="languages[]" value="JavaScript">
        <label for="javascript">JavaScript</label><br>
        <input type="radio" id="php" name="languages[]" value="PHP">
        <label for="php">PHP</label><br><br>
        
        <button type="submit">Submit</button>
    </form>

    <?php
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if any languages were selected
        if (!empty($_POST['languages'])) {
            echo "<p>Your selected languages:</p>";
            echo "<ul>";
            // Loop through each selected language
            foreach ($_POST['languages'] as $language) {
                echo "<li>$language</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Please select at least one language.</p>";
        }
    }
    ?>
</body>
</html>
