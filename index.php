<?php
    require ("classes/abstractStory.php");
    require ("classes/Inventory.php");
    require ("classes/Car.php");
    require ("classes/Ford.php");
    require ("classes/BMW.php");
    require ("classes/Text.php");
    $car1 = new Ford("F-150", 4, "green", "25,000", new Inventory);
    $car1->statement();
    $car1->price();
    $car1->storyTime();
    echo "<hr>";
    $car2 = new BMW("ML350", 4, "blue", "80,000", new Inventory);
    $car2->statement();
    $car2->price();
    $car2->storyTime();
    // $car1->store();
    echo "<hr>";
    // $car2 = new BMW("M6", 4, "space green", "80,000");
    // $car2->statement();
    // $car2->price();
    // echo "<hr>";
    // echo Car::$city;
    echo Car::city();
    $myName = new Text();
    $myName->reverse()->uppercase()->print();

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