<!DOCTYPE html>
<html>
<head>
<style>
  /* Styles for the body */
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
    text-align: center;
  }
  /* Styles for paragraphs */
  p {
    color: #333;
    font-size: 18px;
    margin-bottom: 20px;
  }
  /* Styles for the form */
  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    display: inline-block;
  }
  /* Styles for text input */
  input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px;
  }
  /* Styles for submit button */
  input[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  /* Hover effect for submit button */
  input[type="submit"]:hover {
    background-color: #0056b3;
  }
  /* Styles for result */
  .result {
    margin-top: 20px;
    font-size: 24px;
    color: #007bff;
  }
</style>
</head>
<body>

<!-- Description -->
<p>This PHP script calculates the square root of a number entered by the user:</p>

<!-- Form for user input -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Enter a number: <input type="text" name="number">
  <input type="submit" value="Calculate">
</form>

<!-- Result display area -->
<div class="result">
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number entered by the user
    $number = $_POST['number'];

    // Check if the input is a valid number
    if (is_numeric($number)) {
        // Calculate and display the square root of the number
        echo "Square root of $number is: " . sqrt($number);
    } else {
        // Display an error message if the input is not a valid number
        echo "Please enter a valid number!";
    }
}
?>
</div>

</body>
</html>
