
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" style="cellpadding = 3px">
    
    <?php for($i=1 ; $i<=12 ; $i++)
    {?>
    <tr>
        <?php 
        for($j=1 ; $j<=12; $j++)
        {?>
            <td> 
                <?php 
                echo $i*$j ; ?>
            </td>
        <?php 
        } ?>
    </tr>

    <?php
    }?>

    </table>
</body>
</html>
