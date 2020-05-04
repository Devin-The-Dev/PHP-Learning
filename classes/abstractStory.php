<?php
    abstract class Story {
        public function storyTime() {
            echo "<h3>{$this->company} has been around for {$this->printCompanyYears()} years.</h3>";
        }

        abstract public function printCompanyYears();
    }
?>