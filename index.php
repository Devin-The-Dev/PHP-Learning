<?php
    require("classes/cars/name.php");
    require("classes/user/name.php");
    use App\Cars\Name as carName;
    use App\User\Name as userName;

    $carName = new carName("Ford");
    $userName = new userName("Devin");

    echo $carName->name;
    echo $userName->name;
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