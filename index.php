<?php
// Cookies is how google keeps track of you
    $amazon_key = "AmazonProduct";
    $amazon_product = "Mac_Book_Air";
    setcookie($amazon_key, $amazon_product, time() + (86400 * 30), "/"); //This says the key and product will be stored for 30 days on any page
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
        if (isset($_COOKIE["AmazonProduct"])) {
            echo $_COOKIE["AmazonProduct"]; //This happens if cookie has been stored before
        } else {
            echo "Sorry, no cookies for this user"; //This happens if cookie wasn't stored before
        }
    ?>
</body>
</html>