<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS style defining the dimensions of the table and adding some cute styles -->
    <style>
        body {
            background-color: #f7f7f7; /* Light gray background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            width: 400px; 
            height: 400px;
            border-collapse: collapse;
            border-spacing: 0; /* Remove spacing between table cells */
        }

        td {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 20px;
            border: 1px solid #aaa; /* Light gray border for each cell */
        }

        .white-cell {
            background-color: #f0d9b5; /* Creamy color for white cells */
        }

        .black-cell {
            background-color: #6a4f4f; /* Dark brown color for black cells */
            color: #fff; /* White text color for better contrast */
        }
    </style>
    <!-- Meta tags for defining character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the HTML document -->
    <title>Cute Chessboard</title>
</head>
<body>
<!-- Table structure to display the chessboard -->
<table border="1">
    
    <?php 
    // PHP script to generate rows and columns for the chessboard
    for($i=1 ; $i<=8 ; $i++)
    {
        echo "<tr>";
        for($j=1 ; $j<=8; $j++)
        { 
            // Condition to determine if the cell should be black or white based on the sum of row and column indices
            if( ($i+$j)%2==0 )
            {
                // White cell with background color #FFFFFF
                echo "<td class='white-cell'> </td>";
            }
            else
            {
                // Black cell with background color #000000
                echo "<td class='black-cell'> </td>";
            }
        }
        echo "</tr>";
    }?>
    
</table>

</body>
</html>
