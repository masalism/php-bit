<?php
$dir = "../.." . $_SERVER['REQUEST_URI'];

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
