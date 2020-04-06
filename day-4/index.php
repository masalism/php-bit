<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *:not(pre) {
            font-family: "Gotham A", "Gotham B", Helvetica, Arial, sans-serif;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <?php
    // VIENMATIS MASYVAS //

    $indexedArray = ["Mantas", "Darius", "Indre", "Ignas"];

    echo "<br>";
    print(count($indexedArray) . '<br>');
    print(sizeof($indexedArray) . '<br>');

    for ($i = 0; $i < count($indexedArray); $i++) {
        print($indexedArray[$i] . '<br>');
    }

    // Surasti pagal savybe
    for ($i = 0; $i < count($indexedArray); $i++) {
        if ($indexedArray[$i] == "Ignas") {
            print("Ignas vardas yra<br>");
            break;
        }
    }

    print_r($indexedArray);

    for ($i = 0; $i < count($indexedArray); $i++) {
        for ($j = 0; $j < count($indexedArray) - $i - 1; $j++) {
            if (strcmp($indexedArray[$j], $indexedArray[$j + 1]) > 0) {
                $tmp = $indexedArray[$j];
                $indexedArray[$j] = $indexedArray[$j + 1];
                $indexedArray[$j + 1] = $tmp;
            }
        }
    }

    print_r($indexedArray);
    ?>
</body>

</html>