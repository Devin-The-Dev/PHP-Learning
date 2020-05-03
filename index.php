<?php
    class Car{
        public $doors = 4;
        public function __construct($name, $doors = 4, $color = "black"){
            $this->doors = $doors;
            $this->color = $color;
            $this->name = $name;
        }
        
        public function printName() {
            echo $this->name;
        }

        public function statement() {
            echo "<h1>This car is a {$this->name} and it has {$this->doors} doors. The color of it is {$this->color}.</h1>";
        }
    }

    $ford = new Car("F-150");
    $WhiteFord = new Car("F-150", 4, "White");
    $BMW = new Car("M6", 4, "Space Gray");

    $ford->statement();
    $WhiteFord->statement();
    $BMW->statement();
    // echo "<pre>". var_dump($ford) . "</pre>";

    
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