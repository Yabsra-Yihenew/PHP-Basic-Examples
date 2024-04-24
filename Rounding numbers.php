<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter the number to be rounded: <input type="text" name="number" required>
    <button type="submit" name="submit">Round</button>
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number from the form
    $number = $_POST['number'];

    // Perform rounding and display the results
    echo "Rounded number: " . round($number);
}
?>

</body>
</html>
