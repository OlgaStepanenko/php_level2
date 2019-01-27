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

    function set ($category, $name, $price) {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
    }

    function getInfoProduct () {
        echo "Товар категории".$this->category."называется".$this->name."и стоит".$this->price."рублей";
    }
}

$pencil = new products; 
$pencil->set(" Канцелярские товары ", " Карандаш ", " 30 ");
$pencil->getInfoProduct();


?>
</body>
</html>