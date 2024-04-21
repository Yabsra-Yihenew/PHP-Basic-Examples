<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        
        p {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
$min_value = min(0, 150, 30, 20, -8, -200);
$max_value = max(0, 150, 30, 20, -8, -200);
?>

<p>Minimum Value: <?php echo $min_value; ?></p>
<p>Maximum Value: <?php echo $max_value; ?></p>

</body>
</html>
