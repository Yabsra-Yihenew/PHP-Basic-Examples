<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Enter a number: <input type="text" name="number">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    if (is_numeric($number)) {
        echo "Square root of $number is: " . sqrt($number);
    } else {
        echo "Please enter a valid number!";
    }
}
?>

</body>
</html>
