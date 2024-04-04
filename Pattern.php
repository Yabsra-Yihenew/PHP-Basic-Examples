<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Pattern</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .triangle-container {
            text-align: center;
            margin-top: 20px;
        }

        .triangle-row {
            display: block;
            margin-bottom: 10px;
        }

        .triangle-asterisk {
            color: blue; /* Set asterisk color to blue */
            font-size: 24px; /* Increase font size for better visibility */
        }
    </style>
</head>
<body>

<h2>Triangle Pattern</h2>

<div class="triangle-container">
    <?php
    $height = 5; // Height of the triangle

    // Loop through each row of the triangle
    for ($i = 1; $i <= $height; $i++) {
        echo '<div class="triangle-row">';
        // Printing spaces to create indentation
        for ($j = $height - $i; $j > 0; $j--) {
            echo "&nbsp;";
        }
        // Printing asterisks for each row
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo '<span class="triangle-asterisk">*</span>';
        }
        echo '</div>'; // Close the row
    }
    ?>
</div>

</body>
</html>
