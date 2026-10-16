<!DOCTYPE html>
<html>

<head>
    <title>Assignment2 Qeybtiisa 3aad</title>
</head>

<body>

    <?php
    $students = array(
        "CA221" => array(
            "Name"    => "Mohamed Ahmed Ali",
            "Phone"   => "0648440403",
            "Address" => "Laba Dhagax, Wardhiigley"
        ),
        "CA207" => array(
            "Name"    => "Ahmed Abdi Jama",
            "Phone"   => "0647223201",
            "Address" => "Taleex, Hodan"
        ),
        "CA202" => array(
            "Name"    => "Amina Nur Adan",
            "Phone"   => "0646990276",
            "Address" => "Macmacaanka, Dharkeynley"
        )
    );

    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    echo "<tr bgcolor='#cccccc'>";
    echo "<th></th>";
    foreach ($students["CA221"] as $key => $val) {
        echo "<th>" . $key . "</th>";
    }
    echo "</tr>";

    foreach ($students as $classid => $student_info) {
        echo "<tr>";
        echo "<td bgcolor='#eeeeee'><strong>" . $classid . "</strong></td>";
        foreach ($student_info as $val) {
            echo "<td>" . $val . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>

</html>