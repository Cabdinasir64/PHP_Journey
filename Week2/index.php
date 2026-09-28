<!DOCTYPE html>
<html>

<head>
    <title>Week2 Practice</title>
</head>

<body>

    <?php
    $magacyo = ["Cali", "Faarax", "Xaliimo"];

    $arday = [
        "magac" => "Maxamed",
        "da" => 20,
        "magaalo" => "Muqdisho"
    ];

    echo "<pre>";
    print_r($magacyo);
    print_r($arday);
    echo "</pre>";

    var_dump($magacyo);
    echo "<br><br>";
    var_dump($arday);
    echo "<br><br>";

    for ($i = 0; $i < 3; $i++) {
        echo $magacyo[$i] . "<br>";
    }

    echo "<br>";

    foreach ($arday as $fure => $qiimo) {
        echo $fure . ": " . $qiimo . "<br>";
    }

    echo "<br>";

    $w = 1;
    while ($w <= 5) {
        echo $w . "<br>";
        $w++;
    }

    echo "<br>";

    $d = 1;
    do {
        echo $d . "<br>";
        $d++;
    } while ($d <= 5);
    ?>

</body>

</html>