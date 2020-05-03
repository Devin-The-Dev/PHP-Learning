<?php
    class BMW extends Car{
        public $company = "BMW";

        public function __construct($name, $doors, $color, $price) {
            $this->name = $name;
            $this->doors = $doors;
            $this->color = $color;
            $this->price = $price;
        }

        public function price() {
            echo "<h1>The price of this {$this->company} {$this->name} is &euro;{$this->price}.</h1>";
        }
    }
?>