<?php
    class BMW extends Car{
        public $company = "BMW";

        public function __construct($name, $doors, $color, $price, Inventory $inventory) {
            $this->name = $name;
            $this->doors = $doors;
            $this->color = $color;
            $this->price = $price;
            $this->inventory = $inventory;
        }

        public function price() {
            echo "<h1>The price of this {$this->company} {$this->name} is &euro;{$this->price}.</h1>";
            echo $this->inventory->carTotal($this->company, 9);
            echo $this->inventory->carsSold(9);
        }
    }
?>