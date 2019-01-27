<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Lesson_1</title>
</head>
<body>

<?php

class products {
    public $category = "канц.товары";
    public $name = "карандаш";
    public $price = "45";

    function __construct($category, $name, $price) {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->getInfoProduct();
    }

    function getInfoProduct () {
        echo "Товар категории".$this->category."называется".$this->name."и стоит".$this->price."рублей";
    }
}

new products(" Канцелярские товары ", " Карандаш ", " 30 "); 

class pencilsKindOf extends products {
    
}
?>
</body>
</html>