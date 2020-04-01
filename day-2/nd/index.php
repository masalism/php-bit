<!DOCTYPE html>
<html>

<head>
    <title>Hello World</title>
</head>

<body>
    <?php
    // print_r($_SERVER);
    // print('<br>');
    // print_r($_GET);
    ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        $name = $_REQUEST['lname'];
    if ($_SERVER["REQUEST_METHOD"] == "GET")
        $name = $_GET['lname'];
    ?>

    <a href="form.php">
        <button>Go to forms POST example!</button>
    </a>
    <br>
    <a href="form2.php">
        <button>Go to forms GET example!</button>
    </a>

    <p>
        <?php
        if (empty($name))
            echo "Name is empty";
        else
            echo $name;
        ?>
    </p>
</body>

</html>