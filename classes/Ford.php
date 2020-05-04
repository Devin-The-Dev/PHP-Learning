<?php
    class Ford extends Car{
        public $company = "Ford";

        public function __construct($name, $doors, $color, $price, Inventory $inventory) {
            $this->name = $name;
            $this->doors = $doors;
            $this->color = $color;
            $this->price = $price;
            $this->inventory = $inventory;
        }

        public function price() {
            echo "<h1>The price of this {$this->company} {$this->name} is &dollar;{$this->price}.</h1>";
            $this->store();
            echo "<br>";
            $this->buyer();
            echo "<br>";
            echo $this->inventory->carTotal($this->company, 4);
        }

        private function buyer() {
            echo "It was sold by John Doe.";
        }
    }
?>