<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>File Browser</title>
</head>

<body>
    <div class="container">
        <?php
        session_start();
        // Jei neprisijunges, grazinam i index.php
        if (!$_SESSION['logged_in']) {
            header("Location: index.php");
            exit;
        }

        // log out
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['logout'])) {
                session_start();
                unset($_SESSION['username']);
                unset($_SESSION['password']);
                unset($_SESSION['logged_in']);
                header("Location: index.php");
            }
        }

        // Failo ikelimas
        $errorMessage = '';

        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];
            $ext = strtolower(end(explode('.', $_FILES['file']['name'])));

            if ($file['size'] > 5 * 1024 * 1024) {
                $errorMessage = "You can not upload more than 5 mb files";
            } else if (!in_array($ext, ['png', 'jpg', 'svg', 'jpeg'])) {
                $errorMessage = "You can only upload images";
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], "./" . $_GET['path'] . $_FILES['file']['name']);
            }
        }

        // Failo istrinimas ir dir kurimas
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['delete'])) {
                $fileDelete = './' . $_GET['path'] . $_POST['delete'];
                if (is_file($fileDelete)) {
                    unlink($fileDelete);
                }
            } elseif (isset($_POST['create'])) {
                if ($_POST['create'] != "") {
                    $dirCreate = './' . $_GET['path'] . $_POST['create'];
                    if (!is_dir($dirCreate))
                        mkdir($dirCreate, 0777, true);
                }
            }
        }
         // failo parsisiuntimas
         if (isset($_POST['download'])) {
            print('Path to download: ' . './' . $_GET["path"] . $_POST['download']);
            $file = './' . $_GET["path"] . $_POST['download'];
            $fileToDownloadEscaped = str_replace("&nbsp;", " ", htmlentities($file, null, 'utf-8'));
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename=' . basename($fileToDownloadEscaped));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . filesize($fileToDownloadEscaped));
            flush();
            readfile($fileToDownloadEscaped);
            exit;
        }

        // Direktorijos spausdinimas
        $path = './' . $_GET["path"];
        $data = scandir($path);

        echo '<h2 class="mt-3">Directory: ' . str_replace('?path=', '/', $_SERVER['REQUEST_URI']) . "</h2>";

        ?>
        
    </div>
    <div class="container">
        <?php

        echo "<table class=\"table table-striped mt-5\"><thead class=\"thead-dark\"><tr><th>Type</th><th>Name<th>Action</th></th></thead>";
        echo "<tbody>";

        foreach ($data as $value) {
            $newValue = (is_dir($path . $value)
                ? '<a href="' . (isset($_GET['path'])
                    ?  $_SERVER['REQUEST_URI'] . $value . '/'
                    : $_SERVER['REQUEST_URI'] . '?path=' . $value . '/') . '">' . $value . '</a>'
                : $value);
            $type = is_dir($path . $value) ? "Directory" : "File";
            $options = is_dir($path . $value) ? null : 
            '<form action=" " method="POST">
                <input type="hidden" name="delete" value=' . $value . '>
                <button type="submit" class="btn btn-danger btn-sm mr-2">Delete</button>
            </form>
            <form action="" method="POST">
                <input type="hidden" name="download" value=' . $value . '>
                <button type="submit" class="btn btn-primary btn-sm">Download</button>
            </form>';

            if ($value != ".." && $value != '.') {
                echo "<tr>";
                echo "<td>$type</td>";
                echo "<td>$newValue</td>";
                echo "<td class=\"d-flex\">$options</td>";
                echo "</tr>";
            }
        }

        echo "</tbody>";
        echo "</table>";

        ?>
        
        <?php
        // "Grizimo" kodas
        $queryString = explode("/", $_SERVER['QUERY_STRING']);
        array_pop($queryString);
        if (count($queryString) == 1) {
            $urlString = explode("?", $_SERVER['REQUEST_URI']);
            array_pop($urlString);
            $newURL = implode("/", $urlString);
        } else {
            $urlString = explode("/", $_SERVER['REQUEST_URI']);
            array_pop($urlString);
            array_pop($urlString);
            $newURL = implode("/", $urlString) . "/";
        }
        ?>

        <a href="<?php print($newURL) ?>">
            <button class="btn btn-success">Grįžti</button>
        </a>

        <form class="form-group mt-3 border rounded w-50 bg-light" action="" method="post" enctype="multipart/form-data">
            <input class="form-control-file" type="file" name="file"><br>
            <button class="btn btn-warning">Įkelti</button>
            <h3><?php echo $errorMessage ?></h3>
        </form>

        <form class="w-50 my-3" action=" " method="POST">
            <input class="form-control mb-2" name="create" placeholder="Direktorijos pavadinimas">
            <button type="submit" class="btn btn-secondary">Sukurti direktoriją</button>
        </form>

        <form class="logout" action="code.php" method="POST">
            <input type="hidden" name="logout">
            <button type="submit" class="btn btn-danger btn-lg mt-2">Atsijungti</button>
        </form>
    </div>



</body>

</html>