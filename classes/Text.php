<?php
    class Text {
        public $text = "Devin Udy";
        public function __contruct($text) {
            $this->text = $text;

            return $this;
        }

        public function uppercase() {
            $this->text = strtoupper($this->text);
            return $this;
        }
        
        public function reverse() {
            $this->text = strrev($this->text);
            return $this;
        }

        public function print() {
            echo "<h1>My name is {$this->text}.</h1>";
        }
    }
?>