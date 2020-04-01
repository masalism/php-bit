<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>KMI</title>

</head>

<body>
    <header class="header">
        <h1 class="h1">KMI Skaičiuoklė</h1>
    </header>

    <main class="mai">
        <form action="index.php" method="POST">
            <label for="kg">Iveskite savo svorį</label>
            <input type="number" name="kg">
            <label for="ugis">Iveskite savo ugį</label>
            <input type="number" step="0.01" name="ugis">
            <input type="submit" value="Įveskite duomenis">
        </form>
        <div>
            <p class="isvada">
                <?php
                $svoris = $_POST["kg"];
                $ugis = $_POST["ugis"];

                $kmi = $svoris / pow($ugis, 2);

                $isvada = "";

                if ($kmi < 18.5) {
                    $isvada = "Gal tau laikas suvalgyti kebabą?";
                } else if ($kmi < 25) {
                    $isvada = "Tu esi tiesiog nuostabus";
                } else if ($kmi < 30) {
                    $isvada = "Gal tau laikas nevalgyti po 6?";
                } else {
                    $isvada = "Storas kiaulė";
                }

                echo $isvada;
                ?>
            </p>
        </div>


    </main>
</body>

</html>