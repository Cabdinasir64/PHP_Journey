<!DOCTYPE html>
<html>

<head>
    <title>Odd and Even</title>
</head>

<body>
    <?php

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 === 0) {
            echo "$i,";
        }
    }
    echo "<br>";
    for ($i = 7; $i <= 35; $i++) {
        if ($i % 2 != 0) {
            echo "$i,";
        }
    }



    ?>


</body>

</html>