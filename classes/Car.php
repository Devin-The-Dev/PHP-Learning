<?php
    class Car extends Story{
        public $doors = 4;
        public $color = "black";
        // public static $city = "Queens, New York";
        
        public function statement() {
            echo "<h1>This {$this->company} {$this->name} has {$this->doors} doors and the color is {$this->color}.";
        }

        protected function store() {
            echo "Sold at Northern Blvd Dealership.";
        }

        public static function city() {
            return "Queens, New York";
        }
        
        public function printCompanyYears() {
            return $this->companyYears;
        }
    }
?>