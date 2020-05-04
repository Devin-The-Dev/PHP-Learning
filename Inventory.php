<?php
    class Inventory {
        public function carTotal($company, $numberOfCars = 1){
            $companies = [
                "BMW" => 240,
                "Ford" => 177
            ];
            $totalAfter = $companies[$company] - $numberOfCars;
            return "Total of cars left after purchase: {$totalAfter}";
        }
    }
?>