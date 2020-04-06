<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .lentele {
            display: flex;
            justify-content: space-between;
        }

        .stulpelis {
            display: flex;
            flex-direction: column;
        }
    </style>
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

    ?>

    <div class="lentele">
        <?php

        for ($i = 1; $i <= 10; $i++) {
            echo "<div class=\"stulpelis\">";
            for ($j = 1; $j <= 10; $j++) {
                echo "<p>$i * $j = " .  $i * $j . "</p>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>