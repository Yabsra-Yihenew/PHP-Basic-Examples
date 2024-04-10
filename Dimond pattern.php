<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Diamond Pattern</title>
<style>
  /* CSS styling for the table */
  table {
    border-collapse: collapse;
    margin: auto;
  }
  
  /* CSS styling for table cells */
  td {
    width: 20px;
    height: 20px;
    text-align: center;
  }
  
  /* CSS styling for empty cells */
  .empty {
    background-color: white;
  }
</style>
</head>
<body>

<table border="1">
  <?php
  $size = 5; // Size of the diamond (number of rows)
  
  // Loop to create the upper half of the diamond
  for ($i = 1; $i <= $size; $i++) {
      echo "<tr>";
      
      // Adding empty cells before the asterisks
      for ($j = 1; $j <= $size - $i; $j++) {
          echo "<td class='empty'></td>";
      }
      
      // Adding asterisks
      for ($k = 1; $k <= 2 * $i - 1; $k++) {
          echo "<td>*</td>";
      }
      
      // Adding empty cells after the asterisks
      for ($j = 1; $j <= $size - $i; $j++) {
          echo "<td class='empty'></td>";
      }
      
      echo "</tr>";
  }
  ?>
  
  <?php
  // Loop to create the lower half of the diamond
  for ($i = $size - 1; $i >= 1; $i--) {
      echo "<tr>";
      
      // Adding empty cells before the asterisks
      for ($j = 1; $j <= $size - $i; $j++) {
          echo "<td class='empty'></td>";
      }
      
      // Adding asterisks
      for ($k = 1; $k <= 2 * $i - 1; $k++) {
          echo "<td>*</td>";
      }
      
      // Adding empty cells after the asterisks
      for ($j = 1; $j <= $size - $i; $j++) {
          echo "<td class='empty'></td>";
      }
      
      echo "</tr>";
  }
  ?>
</table>

</body>
  </html>
