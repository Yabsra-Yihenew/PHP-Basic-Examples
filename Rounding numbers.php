<!DOCTYPE html>
<html>
<head>
    <title>Rounding Numbers</title>
    <style>
        /* CSS styles for the page layout and elements */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #007bff;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 10px;
            width: 60%;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Heading -->
    <h1>Round a Number</h1>
    <!-- Description -->
    <p>Enter a number below and click "Round" to round it.</p>

    <!-- Form for entering the number -->
    <form method="post">
        <input type="text" name="number" placeholder="Enter the number" required>
        <br>
        <button type="submit" name="submit">Round</button>
    </form>

    <?php
    // PHP code to handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from the form
        $number = $_POST['number'];
        // Round the number and display the result
        echo "<p>Rounded number: " . round($number) . "</p>";
    }
    ?>
</div>

</body>
</html>
