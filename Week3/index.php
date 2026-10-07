<!DOCTYPE html>
<html>

<head>
    <title>Week3</title>
</head>

<body>

    <?php
    // Two dimensional array of students with their ID, name, and score
    $students = array(
        array(1, "John Doe", 85),
        array(2, "Jane Smith", 92),
    );
    foreach ($students as $student) {

        echo "ID: " . $student[0] . "<br>";
    };

    echo "<br>";


    // checking is Array true or false
    if (is_array($students)) {
        echo "This is an array";
    } else {
        echo "This is not an array";
    }

    echo "<br>";

    // checking is specific value is in the array or not
    if (in_array(8, $students[0])) {
        echo "Value found in the array";
    } else {
        echo "Value not found in the array";
    }

    echo "<br>";

    // count the number of elements in the array
    echo "The size of array is " . count($students) . "<br>";

    

    ?>

</body>

</html>