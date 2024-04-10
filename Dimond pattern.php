<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Diamond Pattern</title>
<style>
  table {
    border-collapse: collapse;
    margin: auto;
  }
  td {
    width: 20px;
    height: 20px;
    text-align: center;
  }
  .empty {
    background-color: white;
  }
</style>
</head>
<body>

<table border="1">
  <?php
  $size = 5;
  for ($i = 1; $i <= $size; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= $size - $i; $j++) {
          echo "<td class='empty'></td>";
      }
      for ($k = 1; $k <= 2 * $i - 1; $k++) {
          echo "<td>*</td>";
      }
      for ($j = 1; $j <= $size - $i; $j++) {
          echo "<td class='empty'></td>";
      }
      echo "</tr>";
  }
  ?>
  <?php
  for ($i = $size - 1; $i >= 1; $i--) {
      echo "<tr>";
      for ($j = 1; $j <= $size - $i; $j++) {
          echo "<td class='empty'></td>";
      }
      for ($k = 1; $k <= 2 * $i - 1; $k++) {
          echo "<td>*</td>";
      }
      for ($j = 1; $j <= $size - $i; $j++) {
          echo "<td class='empty'></td>";
      }
      echo "</tr>";
  }
  ?>
</table>

</body>
</html>
