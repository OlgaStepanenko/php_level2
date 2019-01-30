<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Lesson_1</title>
</head>
<body>

<?php

class Products {
    public $category = "канцелятские товары";
    public $price = "45";

    function __construct($category, $price) {
        $this->category = $category;
        $this->price = $price;
        $this->getInfoProduct();
    }

    function getInfoProduct () {
        echo "Товары категории".$this->category."продаются по цене от ".$this->price."рублей"."<br>";
    }
}

new Products(" Канцелярские товары ", " 30 "); 

?>
</body>
</html>