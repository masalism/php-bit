<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // while
    $i = 0;
    while ($i <= 10) {
        print($i . " ");
        $i++;
    }

    // for
    for ($i = 0; $i < 10; $i++) {
        print($i . " ");
    }

    // do while
    $i = 0;
    do {
        print ($i . " ");
        $i++;
    } while ($i <= 10);

    //forms

    ?>

    <form action="index.php" method="POST">
        <label for="lname">Last name:</label><br>
        <input type="text" id="fname" name="lname" value="Doe"><hr>
        <input type="submit" value="Submit with POST">
    </form>
</body>

</html>