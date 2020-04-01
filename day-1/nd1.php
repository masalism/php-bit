<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1>Mantas</h1>";

    $foo = "Mantas";
    echo <<<EOT
    Hello $foo.<br>
    Goodbye!
    EOT;

    $my_str1 = "Mantas";
    $my_str2 = "My name is $my_str1!";
    print($my_str2);

    ?>

    <?php
        $kintamasis = "Mantas";
        print($kintamsis);

        print('<p>' . $kintamasis . '</p>');

        //escape equences
        print("<p style=\"color: red\">" .  $kintamasis . '</p>');
    ?>
</body>

</html>