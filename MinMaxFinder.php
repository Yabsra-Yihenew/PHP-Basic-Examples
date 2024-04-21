<!DOCTYPE html>
<html>
<head>
    <style>
        /* Styling for the body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light background color */
            color: #333; /* Dark text color */
            padding: 20px; /* Add some padding */
            text-align: center; /* Center-align text */
        }
        
        /* Styling for the main heading */
        h1 {
            color: #007bff; /* Blue color */
        }

        /* Styling for the container */
        .container {
            max-width: 600px; /* Limit the width */
            margin: 0 auto; /* Center the container */
            background-color: #ffffff; /* White background */
            border-radius: 10px; /* Rounded corners */
            padding: 20px; /* Add padding */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow */
        }

        /* Styling for result messages */
        .result {
            font-size: 20px; /* Larger font size */
            margin-top: 20px; /* Add top margin */
        }

        /* Styling for the list of numbers */
        .numbers {
            font-size: 18px; /* Font size */
            color: #007bff; /* Blue color */
            margin-bottom: 10px; /* Add bottom margin */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Find Minimum and Maximum Values</h1>
    
    <?php
    // List of numbers
    $numbers = array(0, 150, 30, 20, -8, -200);
    
    // Calculate minimum value
    $min_value = min($numbers);
    
    // Calculate maximum value
    $max_value = max($numbers);

    // Display the given numbers
    echo "<p class='numbers'>Given Numbers: " . implode(", ", $numbers) . "</p>";

    // Display minimum value
    echo "<p class='result'>Minimum Value: $min_value</p>";
    
    // Display maximum value
    echo "<p class='result'>Maximum Value: $max_value</p>";
    ?>
</div>

</body>
</html>
