<!DOCTYPE html>
<html>

<head>
    <title>Assignment2  Qeybtiisa 2aad</title>
</head>

<body>

    <?php
    $colors = array(
        "Light"  => array("Red" => "Light Red", "Green" => "Light Green", "Blue" => "Light Blue"),
        "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
        "Dark"   => array("Red" => "Dark Red", "Green" => "Dark Green", "Blue" => "Dark Blue")
    );

    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    echo "<tr bgcolor='#cccccc'>";
    echo "<th></th>";
    foreach ($colors["Light"] as $key => $val) {
        echo "<th>" . $key . "</th>";
    }
    echo "</tr>";

    foreach ($colors as $key => $value) {
        echo "<tr>";
        echo "<td bgcolor='#eeeeee'><strong>" . $key . "</strong></td>";
        foreach ($value as $val) {
            echo "<td>" . $val . "</td>";
        }
        echo "</tr>";
    }


    echo "</table>";
    ?>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Assignment 2 - Question 2</title>
</head>

<body>

    <?php
    $colors = array(
        "Light"  => array("Red" => "Light Red", "Green" => "Light Green", "Blue" => "Light Blue"),
        "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
        "Dark"   => array("Red" => "Dark Red", "Green" => "Dark Green", "Blue" => "Dark Blue")
    );

    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    echo "<tr bgcolor='#cccccc'>";
    echo "<th></th>";
    foreach ($colors["Light"] as $key => $val) {
        echo "<th>" . $key . "</th>";
    }
    echo "</tr>";

    foreach ($colors as $key => $value) {
        echo "<tr>";
        echo "<td bgcolor='#eeeeee'><strong>" . $key . "</strong></td>";
        foreach ($value as $val) {
            echo "<td>" . $val . "</td>";
        }
        echo "</tr>";
    }


    echo "</table>";
    ?>

</body>

</html>