<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
    text-align: center;
  }
  p {
    color: #333;
    font-size: 18px;
    margin-bottom: 20px;
  }
  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    display: inline-block;
  }
  input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px;
  }
  input[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  input[type="submit"]:hover {
    background-color: #0056b3;
  }
  .result {
    margin-top: 20px;
    font-size: 24px;
    color: #007bff;
  }
</style>
</head>
<body>

<p>This PHP script calculates the square root of a number entered by the user:</p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Enter a number: <input type="text" name="number">
  <input type="submit" value="Calculate">
</form>

<div class="result">
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
</div>

</body>
</html>
