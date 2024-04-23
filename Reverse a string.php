<!DOCTYPE html>
<html>
<body>

<!-- HTML form to accept user input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Enter a sentence: <input type="text" name="sentence">
  <input type="submit" value="Submit">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the sentence input from the form
    $sentence = $_POST['sentence'];
    
    // Output the reversed sentence
    echo "Reversed Sentence: " . strrev($sentence);
}
?> 
 
</body>
</html>
