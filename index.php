<?php
    $cars = [
        [
            "Model" => "F-150",
            "Make" => "Ford",
            "Wheels" => 4,
            "Doors" => 4
        ], 
        [
            "Model" => "Benz",
            "Make" => "Mercedes",
            "Wheels" => 4,
            "Doors" => 4
        ], 
        [
            "Model" => "Navigator",
            "Make" => "Lincoln",
            "Wheels" => 4,
            "Doors" => 4
        ], 
        [
            "Model" => "BRZ",
            "Make" => "Subaru",
            "Wheels" => 4,
            "Doors" => 2
        ]
    ];
    $cars[0]["Doors"] = 2;    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo $cars[2]["Wheels"];?>
    </p>
    <p>
        <?php echo $cars[0]["Doors"];?>
    </p>
</body>
</html>