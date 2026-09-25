<!DOCTYPE html>
<html>

<head>
    <title>Question 4</title>
</head>

<body>

    <?php
    for ($i = 50; $i >= 2; $i--) {
        if ($i % 2 == 0 && $i % 5 == 0) {
            echo $i . " ";
        }
    }
    ?>

</body>

</html>