<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <?php

    // Vienmatis masyvas;
    $vienArray = array(5, 68, 4, 2, 8, 3, "Mantas", "Darius");
    print_r($vienArray);

    print('<br>');
    echo $vienArray[1];
    print('<br>');
    $vienArray[3] = 100;
    array_push($vienArray, "Greta");
    echo count($vienArray);
    print('<br>');
    array_splice($vienArray, 5, 1000);
    echo array_sum($vienArray);
    print('<br>');
    print_r($vienArray);
    print('<br>');
    print('<br>');

    // Asociatyvus masyvas

    $asArray = array(
        "Mantas" => 82,
        "Darius" => 73,
        "Indre" => 52,
        "Ignas" => 67,
        "Ruta" => 150
    );

    print_r(array_values($asArray));
    print('<br>');
    print_r(array_keys($asArray));
    print('<br>');
    echo "Lengviausias svoris: " . min(array_values($asArray));
    print('<br>');
    echo "Didziausias svoris: " . max(array_values($asArray));
    print('<br>');

    sort($asArray);
    print_r($asArray);
    print('<br>');
    $visasSvoris = array_sum($asArray);

    if ($visasSvoris > 500) {
        echo "Zmones liftu kilti negali, bendras svoris $visasSvoris ";
    } else {
        echo "Zmones liftu kilti gali bendras svoris $visasSvoris";
    }
    print('<br>');

    // Daugiamatis

    $dArray = array(
        array("1,3,5,7,4,3,7"),
        array("4,6,3,6,9,2,6")
    );

    $asociatyvus = [
        "Jonas" => "Jonaz",
        "Petras" => "Petraitis",
        "Vardenis" => "Pavardenis"
    ];

    function dropValueOut($value)
    {
        if ($value == "Jonaz") {
            return true;
        } else {
            return false;
        }
    }

    print_r(array_filter($asociatyvus, "dropValueOut", ARRAY_FILTER_USE_BOTH));


    ?>
</body>

</html>