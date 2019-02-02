<?php

include "trait.php";

class someClass {
    protected static $_instance;

        private function __construct() {
        }
    
        private $name;
        use MyTrait;

        private function __clone() {
        }

        private function __wakeup() {
        }
}

?>