<?php
include './class.products.php';

class colourPencils extends products {
    public $name = " Цветные карандаши ";
    public $numberOfColors = " 18 ";


    function __consrtuct($category, $name, $price, $numberOfColors) {
        perent::__consrtuct($category, $price);
        //$this->category = $category;
        $this->name = $name;
        //$this->price = $price;
        $this->numberOfColors = $numberOfColors;
    }

    function getInfoColorPencils() {
        echo $this->name.", количество цветов в упаковке".$this->numberOfColors;
    }
}

$object = new colourPencils(" Канцелярские товары ", " Цветные карандаши", 40, 32);
$object->getInfoColorPencils();
