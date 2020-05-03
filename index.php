<?php
    require ("classes/Car.php");
    require ("classes/Ford.php");
    require ("classes/BMW.php");
    $car1 = new Ford("F-150", 4, "green", "25,000");
    $car1->statement();
    $car1->price();
    echo "<hr>";
    $car2 = new BMW("M6", 4, "space green", "80,000");
    $car2->statement();
    $car2->price();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>