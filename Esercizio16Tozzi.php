<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function stampaTabella($m, $n) {
        echo "<table style='border: 1px solid black; border-collapse: collapse;'>";
        for ($i = 0; $i < $m; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $n; $j++) {
                echo "<td style='border: 1px solid black; padding: 10px;'>($i,$j)</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    stampaTabella(2, 3);
    ?>

</body>
</html>