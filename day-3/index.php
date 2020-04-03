<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $my_arr1 = array("A", "B", "C");
    $my_arr2 = array(1, 2, 4);

    echo $my_arr1[1];

    $my_arr3 = array(
        "Mantas" => "Mantas Masalis",
        "Darius" => "Darius Tulauskas",
        "A" => "B"
    );

    $my_arr4 = [
        ["A", "B", "C"],
        [1, 2, 3, 4]
    ];

    print_r($my_arr3);
    print_r($my_arr4);
    ?>
    
</body>

</html>