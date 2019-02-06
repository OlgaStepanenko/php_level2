<?php
include './class.products.php';

class Pen extends Products {
    public $name = " Ручки ";
    public $сolor = " синие ";


    function __construct($category, $name, $price, $сolor) {
        parent::__construct($category, $price);
        $this->name = $name;
        $this->сolor = $сolor;
    }

    function getInfoColorPen() {
        echo $this->name.", цвет чернил ".$this->сolor;
    }
}

$object = new Pen(" Канцелярские товары ", " Ручки", 60, "красные");
$object->getInfoColorPen();
