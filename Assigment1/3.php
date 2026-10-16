<!DOCTYPE html>
<html>

<head>
    <title>Question 3</title>
</head>

<body>

    <?php
    for ($i = 2; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    for ($i = 35; $i >= 7; $i--) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
    ?>

</body>

</html>