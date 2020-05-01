<?php
    session_start();
    $_SESSION["amazon_key"] = "Mac Book Air";
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION["amazon_key"])) {
            echo $_SESSION["amazon_key"]; //This happens if cookie has been stored before
        } else {
            echo "Sorry, no cookies for this user"; //This happens if cookie wasn't stored before
        }
    ?>

    <pre>
        <?php echo var_dump($_SESSION)?>
    </pre>
</body>
</html>