<!DOCTYPE html>
<html>

<head>
    <title>Assigment2 Qeybtiisa 1aad</title>
</head>

<body>

    <?php
    $numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

    $total = 0;
    $even_total = 0;
    $odd_total = 0;

    echo "<h3>All Elements in the Array:</h3>";
    echo "<pre>";
    print_r($numbers);
    echo "</pre><br>";

    foreach ($numbers as $num) {
        $total += $num;

        if ($num % 2 == 0) {
            $even_total += $num;
        } else {
            $odd_total += $num;
        }
    }

    echo "<strong>3) Total of all elements:</strong> " . $total . "<br>";
    echo "<strong>4) Total of even elements:</strong> " . $even_total . "<br>";
    echo "<strong>5) Total of odd elements:</strong> " . $odd_total . "<br><br>";


    $min_num = $numbers[0];
    $min_pos = 0;

    $max_num = $numbers[0];
    $max_pos = 0;

    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] < $min_num) {
            $min_num = $numbers[$i];
            $min_pos = $i;
        }

        if ($numbers[$i] > $max_num) {
            $max_num = $numbers[$i];
            $max_pos = $i;
        }
    }

    echo "<strong>6) Minimum element:</strong> " . $min_num . " at position (index): " . $min_pos . "<br>";
    echo "<strong>7) Maximum element:</strong> " . $max_num . " at position (index): " . $max_pos;

    ?>

</body>

</html>