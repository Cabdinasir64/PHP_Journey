<!DOCTYPE html>
<html>

<head>
    <title>largest and smallest</title>
</head>

<body>
    <?php

    $num1 = 5;
    $num2 = 3;
    $num3 = 9;

    if ($num1 > $num2 && $num1 > $num3) {
        $largest = $num1;
    } elseif ($num2 > $num1 && $num2 > $num3) {
        $largest = $num2;
    } else {
        $largest = $num3;

    }

    if ($num1 < $num2 && $num1 < $num3) {
        $smallest = $num1;
    } elseif ($num2 < $num1 && $num2 < $num3) {
        $smallest = $num2;
    } else {
        $smallest = $num3;
    }

    echo "Largest numbers is $largest". "<br>";
    echo "Smallest numbers is $smallest";




    ?>


</body>

</html>