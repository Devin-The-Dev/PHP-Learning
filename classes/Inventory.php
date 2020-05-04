<?php
    interface InventoryInterface {
        public function carsSold($numberOfCars); //Interfaces are rules set for classes. We need a paramenter in order for interfaces to work. Otherwise, the class will run an error.
    }
    class Inventory implements InventoryInterface { // We extend the rule to this class
        public function carTotal($company, $numberOfCars = 1){
            $companies = [
                "BMW" => 240,
                "Ford" => 177
            ];
            $totalAfter = $companies[$company] - $numberOfCars;
            return "Total of cars left after purchase: {$totalAfter}";
        }
        public function carsSold($numberOfCars) {
            echo "<h2>Today we sold {$numberOfCars} cars.</h2>";
        }
    }
?>