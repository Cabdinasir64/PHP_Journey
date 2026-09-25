<!DOCTYPE html>
<html>

<head>
    <title>Question 6</title>
</head>

<body>

    <?php
    $a = 24;
    $b = 99;

    $lcm = $b;

    while ($lcm % $a != 0) {
        $lcm = $lcm + $b;
    }

    echo "LCM of $a and $b = " . $lcm;
    ?>

</body>

</html>