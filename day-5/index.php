<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<br>";
    // 0. Function declaration (w/ default parameters)
    function htmlLinePrinter($v1 = "Foo", $v2 = "Bar")
    {
        print($v1 . $v2 . '<br>');
    }
    // 0> function call
    htmlLinePrinter("ABC", "XYZ");
    htmlLinePrinter("ABC"); // pozitional binding
    htmlLinePrinter();

    // 1. Pure function
    function add($first, $second)
    {
        return $first + $second;
    }
    $result = add(55, 55);
    print($result);

    // 2. Impure functions: see example 0

    // 3. Functions calling other functions: see example 0

    // 4. Recursion
    function factorial($number)
    {
        if ($number <= 1) {
            return 1; // base case
        } else {
            return $number * factorial($number - 1);
        }
    }

    // Driver Code 
    $number = 5;
    $fact = factorial($number);
    print('<br>' . $fact . '<br>');

    // 5. Annonymous functions

    print(' 5. anonymous functions <br>');
    $a = array(1, 2, 3, 4, 5);
    $mapped_a = array_map(function ($x) {
        return $x * $x;
    }, $a);
    // we can also use call_user_func('function_name', [params])
    print_r($mapped_a);

    print('<br>-----------------------------------<br>');
    ?>
</body>

</html>