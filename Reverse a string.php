<!DOCTYPE html>
<html>
<head>
  <style>
    /* CSS Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 400px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    input[type="text"] {
      width: calc(100% - 20px);
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #2ecc71; /* Green button color */
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #27ae60; /* Darker button color on hover */
    }
    .result {
      margin-top: 20px;
      padding: 10px;
      border-radius: 4px;
      background-color: #f0f0f0;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<div class="container">
  <!-- HTML Form -->
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <!-- Text Input -->
    <input type="text" name="sentence" placeholder="Enter a sentence">
    <!-- Submit Button -->
    <input type="submit" value="Submit">
  </form>

  <?php
  // PHP Code: Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve and process form data
      $sentence = $_POST['sentence'];
      // Display result
      echo "<div class='result'>Reversed Sentence: " . strrev($sentence) . "</div>";
  }
  ?> 
</div>

</body>
</html>
