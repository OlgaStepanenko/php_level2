<?php
include './class.products.php';

class ColourPencils extends Products {
    public $name = " Цветные карандаши ";
    public $numberOfColors = " 18 ";


    function __construct($category, $name, $price, $numberOfColors) {
        parent::__construct($category, $price);
        $this->name = $name;
        $this->numberOfColors = $numberOfColors;
        $this->getInfoColorPencils();
    }

    function getInfoColorPencils() {
        echo $this->name.", количество цветов в упаковке ".$this->numberOfColors;
    }
}

$object = new ColourPencils(" Канцелярские товары ", " Цветные карандаши", 40, 32);
?>