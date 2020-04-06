<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="daugyba.php" method="POST">
        <input type="number" name="num" placeholder="Iveskite viena skaiciu">
        <input type="submit" value="Skaiciuoti">
    </form>
    <br>
    <?php

    $num = $_POST['num'];

    for ($i = 1; $i <= $num; $i++) {
        echo "$num * $i = " . $num * $i . "<br>";
    }

    for ($i = 1; $i <=10; $i++) {
        for ($j = 1; $j <=10; $j++) {
            echo "$i * $j = " .  $i * $j . "<br>";
        }
    }
    
    ?>
</body>
</html>