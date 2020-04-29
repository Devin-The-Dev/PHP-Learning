<?php
    $name = "Devin";
    // comment out
    
    # comment out
    
    /*
    comment out
    */
    $car = "Ford F-150";
    const plane = "Jet";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<h1>My name is {$name}</h1>"?>
    <?php echo $name?>
    <?php echo "<h1>My name is " .$name. "</h1>"?>
    <?php echo $car;?>
    <?php echo plane;?>
</body>
</html>