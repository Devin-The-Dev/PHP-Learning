<?php
    // Get
    if(isset($_GET['username'])) {
        echo "<h1>username: {$_GET['username']}</h1>";
        echo "<h1>lastname: {$_GET['lastname']}</h1>";
        echo "<h1>age: {$_GET['age']}</h1>";
    }
    // Post
    if(isset($_POST['username'])) {
        echo $_POST['username'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">Send</button>
    </form>
</body>
</html>