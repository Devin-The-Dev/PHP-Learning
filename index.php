<?php
    $name = "Bill";
    // if ($name == "Devin") {
    //     echo "Hi Devin";
    // } elseif ($name == "Susy") {
    //     echo "Hi Susy!";
    // } else {
    //     echo "Hi Stranger!";
    // }

    switch ($name) {
        case "Devin":
            echo "Hi Devin";
            break;
        case "Joe":
            echo "Hi Joe";
            break;
        case "Susy":
            echo "Hi Susy";
            break;
        default:
            echo "Hi Stranger!";
    }
    $age = 16;
    switch ($age) {
        case $age >= 21: 
            echo "You're old enough to drink and smoke";
        break;
        case $age >= 18:
            echo "You're not old enough to only smoke";
        break;
        default:
            echo "You're not old enough to drink and smoke";
    }
    $total = 101;
    if ($total > 50 && $total < 100) {
        echo "You get a free soda";
    } elseif ($total > 100) {
        echo "You get a free t-bone steak and soda";
    } else {
        echo "Your total is {$total}";
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

</body>
</html>