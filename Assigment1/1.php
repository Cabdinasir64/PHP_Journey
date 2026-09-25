<!DOCTYPE html>
<html>

<head>
    <title>Question 1</title>
</head>

<body>

    <?php
    $num1 = 15;
    $num2 = 25;
    $num3 = 10;

    if ($num1 >= $num2 && $num1 >= $num3) {
        $greatest = $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        $greatest = $num2;
    } else {
        $greatest = $num3;
    }

    if ($num1 <= $num2 && $num1 <= $num3) {
        $smallest = $num1;
    } elseif ($num2 <= $num1 && $num2 <= $num3) {
        $smallest = $num2;
    } else {
        $smallest = $num3;
    }

    echo "The greatest number is: " . $greatest . "<br>";
    echo "The smallest number is: " . $smallest;
    ?>

</body>

</html>