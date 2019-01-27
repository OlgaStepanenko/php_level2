<?php
include "class.products.php";

class colourPencils extends products {
    public $numberOfColors = " 0 ";

    function __consrtuct($category, $name, $price, $numberOfColors) {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->numberOfColors = $numberOfColors;
    }

    function getInfoProduct() {
        echo $this->name."количество цветов в упаковке".$this->numberOfColors;
    }
}

$object = new colourPencils(" Канцелярские товары ", " Карандаши ", 40, 32);
$object->getInfoProduct();
