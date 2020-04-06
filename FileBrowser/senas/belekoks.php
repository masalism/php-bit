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
    <h1>
        <?php
        echo $_SERVER['REQUEST_URI'];
        ?>
    </h1>
    <table>
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        <?php
        $dir = '../FileBrowser';

        $files = scandir($dir);

        foreach ($files as $value) {
            $type;
            $newValue;

            if (is_dir($value)) {
                $type = "Directory";
                $newValue = "<a href=\"$dir/$value\">$value</a>";
            } else if (is_file($value)) {
                $type = "File";
                $newValue = $value;
            }

            echo "<br> $isDir";
            if ($value == "." || $value == "..") {
                $value = null;
            } else {
                print("<tr>
                    <td>$type</td>
                    <td>$newValue</td> 
                    <td></td> 
                </tr>");
            }
        }

        ?>
    </table>


</body>

</html>