<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            padding: 20px;
            text-align: center;
        }
        
        h1 {
            color: #007bff;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .result {
            font-size: 20px;
            margin-top: 20px;
        }

        .numbers {
            font-size: 18px;
            color: #007bff;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Find Minimum and Maximum Values</h1>
    
    <?php
    $numbers = array(0, 150, 30, 20, -8, -200); // List of numbers
    $min_value = min($numbers); // Calculate minimum value
    $max_value = max($numbers); // Calculate maximum value

    echo "<p class='numbers'>Given Numbers: " . implode(", ", $numbers) . "</p>"; // Display the given numbers
    echo "<p class='result'>Minimum Value: $min_value</p>"; // Display minimum value
    echo "<p class='result'>Maximum Value: $max_value</p>"; // Display maximum value
    ?>
</div>

</body>
</html>
