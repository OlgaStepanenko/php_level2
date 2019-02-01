<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Lesson_1</title>
</head>
<body>

<?php

abstract class AbstractGoods {
    private $category;
    protected function __construct($category) {
        $this->category = $category;
    }
    abstract function getCategory();
    abstract function getCost();
    abstract function getPurchasePrice();
    abstract function getProfit();
}

class DigitalGoods extends AbstractGoods {	
    private $name;
    public $cost;
    private $purchasePrice;



?>
</body>
</html>