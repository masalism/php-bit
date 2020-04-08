<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // 0. Local variables
        echo "<br>";
        $myVar = 4;
        function assignx () {
            $myVar = 0;
            print "\$myVar inside function is $myVar <br />";
        }

        assignx();

        print "\$myVar outside of function is $myVar. <br />";

        // 1. Function parameters
        function multiply($var) {
            $var = $var * 10;
            return $var;
        }

        $retval = multiply(10);
        echo "Return value is $retval <br>";

        // 2. Global variables
        $someVar = 15;

        function addIt () {
            GLOBAL $someVar;
            $someVar++;

            echo "SomeVar is $someVar <br>";
        }

        addIt();
        echo "SomeVar is $someVar <br>";

        // 3. Static variables
        function keetrack() {
            STATIC $count = 0;
            $count++;
            print $count;
            print "<br>";
        }
        keetrack();
        keetrack();
        keetrack();
    ?>
</body>
</html>