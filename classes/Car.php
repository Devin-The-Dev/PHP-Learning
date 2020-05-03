<?php
    class car {
        public $doors = 4;
        public $color = "black";
        
        public function statement() {
            echo "<h1>This {$this->company} {$this->name} has {$this->doors} doors and the color is {$this->color}.";
        }
    }
?>