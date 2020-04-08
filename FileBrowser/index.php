<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $path = './' . $_GET["path"];
    $data = scandir($path);

    echo '<h2>Directory: ' . str_replace('?path=', '', $_SERVER['REQUEST_URI']) . "</h2>";

    echo "<table style=\"width: 100%\" border=\"1\"><thead><tr><th>Type</th><th>Name<th>Action</th></th></thead>";
    echo "<tbody>";

    foreach ($data as $value) {
        $newValue = (is_dir($path . $value) 
        ? '<a href="' . (isset($_GET['path']) 
            ? $_SERVER['REQUEST_URI'] . $value . '/' 
            : $_SERVER['REQUEST_URI'] . '?path=' . $value . '/' ) . '">' . $value . '</a>' 
        : $value);
        $type = is_dir($path . $value) ? "Directory" : "File";
        $options = is_dir($path . $value) ? null : '<button>Delete</button><button>Download</button>';

        if ($value != ".." && $value != '.') {
            echo "<tr>";
            echo "<td>$type</td>";
            echo "<td>$newValue</td>";
            echo "<td>$options</td>";
            echo "</tr>";
        }
    }

    echo "</tbody>";
    echo "</table>";

    
        // if (is_dir($path . $value)) {
        //     // $options = null;
        //     if (isset($GET['path'])) {
        //         $newValue = '<a href="' . $_SERVER['REQUEST_URI'] . $value . '/' . '">' . $value . '</a>';
        //     } else {
        //         $newValue = '<a href="' . $_SERVER['REQUEST_URI'] . '?path=' . $value . '/' . '">' . $value . '</a>';
        //     }
        // } else {
        //     $newValue = $value;
        //     // $options = "<button>Delete</button><button>Download</button>";
        // }

    // foreach ($files as $value) {
    //     $type;
    //     $newValue;

    //     if (is_dir($value)) {
    //         $type = "Directory";
    //         $newValue = "<a href=\"$dir/$value\">$value</a>";
    //     } else if (is_file($value)) {
    //         $type = "File";
    //         $newValue = $value;
    //     }

    //     if ($value == "." || $value == "..") {
    //         $value = null;
    //     } else {
    //         print("<tr>
    //                    <td>$type</td>
    //                    <td>$newValue</td> 
    //                    <td></td> 
    //                </tr>");
    //     }

    ?>



</body>

</html>