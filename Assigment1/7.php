<!DOCTYPE html>
<html>

<head>
    <title>Question 7</title>
</head>

<body>

    <?php
    $a = 24;
    $b = 99;

    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }

    echo "HCF of 24 and 99 = " . $a;
    ?>

</body>

</html>