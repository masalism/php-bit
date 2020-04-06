<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //  1
    echo "<br>";

    $indexArray = [1, 34, 5, 4, 3, 6, 7, 2, 5, 7, 3, 6];
    $asArray = [
        "Mantas" => 83,
        "Darius" => 72,
        "Indre" => 52,
        "Ignas" => 78
    ];

    for ($i = 0; $i < count($indexArray); $i++) {
        echo "$indexArray[$i]";
        if ($i < (count($indexArray) - 1)) {
            echo ", ";
        }
    }

    echo "<br>";

    for ($i = 0; $i < count($asArray); $i++) {
        echo array_values($asArray)[$i];
        if ($i < (count($asArray) - 1)) {
            echo ", ";
        }
    }

    echo "<br>";

    echo implode(', ', $indexArray);
    echo "<br>";
    echo implode(', ', array_values($asArray));
    echo "<br>";

    //  2

    for ($i = 0; $i < count($indexArray); $i+=2) {
        echo $indexArray[$i] . ' ';
    }
    echo "<br>";

    for ($i = 0; $i < count($asArray); $i+=2) {
        echo array_values($asArray)[$i] . ' ';
    }

    ?>
</body>

</html>