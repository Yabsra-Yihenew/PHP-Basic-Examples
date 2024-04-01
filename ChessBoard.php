<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS style defining the dimensions of the table -->
    <style>
        table{
            width:500px; 
            height:500px;
        }
    </style>
    <!-- Meta tags for defining character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the HTML document -->
    <title>Document</title>
</head>
<body>
<!-- Table structure to display the chessboard -->
<table border="1" style="">
    
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
                echo "<td height=30px width=30px bgcolor=#FFFFFF> </td>";
            }
            else
            {
                // Black cell with background color #000000
                echo "<td height=30px width=30px bgcolor=#000000> </td>";
            }
        }
        echo "</tr>";
    }?>
    
</table>

</body>
</html>
