<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Lesson_1</title>
</head>
<body>

<?php

abstract class AbstractGoods {
    protected $category;
    protected function __construct($category) {
        $this->category = $category;
    }
    abstract function getCategory();
    abstract function getCost();
    abstract function getPurchasePrice();
    abstract function getProfit();
}

class AllGoods extends AbstractGoods {	
    protected $name;
    public $cost;
    protected $purchasePrice;
    public $profit;

    function __construct($category, $name, $purchasePrice, $cost) {
        parent::__construct($category);

        $this->name = $name;
        $this->purchasePrice = $purchasePrice;
        $this->sellPrice = $cost;
    }

    function getCategory() {
        return $this->category;
    }

    function getCost() {
        return $this->cost;
    }

    function getPurchasePrice() {
        return $purchasePrice = $this->purchasePrice;
    }

    function getProfit() {
        return $profit = ( $this->cost() - $this->purchasePrice );
    }

    function getShow() {
        $displays  = "Категория: ".$this->category;"<br>";
        $displays = "Название продукта: ".$this->name;"<br>";
        $displays = "Закупочная стоимость:".$this->purchasePrice." рублей";"<br>";
        $displays = "Стоимость товара:".$this->cost." рублей";"<br>";
        $displays = "Доход с продажи:".$this->getProfit()." рублей";"<br>";
        return $displays;
    } 

}

class PieceGoods extends AllGoods {
    protected $quantity;
    function __construct ($category, $name, $purchasePrice, $cost, $quantity) {
        parent::__construct($category, $name, $purchasePrice, $cost);
        $this->quantity = $quantity;
    }
    
    function getProfit() {
        return $profit = ( $this->cost * $this->quantity - $this->purchasePrice * $this->quantity );
    }
}


class DigitalGoods extends AllGoods {
    function __construct($category, $name, $purchasePrice, $cost) {
        parent::__construct($category, $name, $purchasePrice, $cost);
    }
    function getProfit() {
        return $profit = ( parent::cost / (1/2 * $cost );
    }
}

class WeightGoods extends AllGoods {
    protected $weight;
    function __construct ($category, $name, $purchasePrice, $cost, $weight) {
        parent::__construct($category, $name, $purchasePrice, $cost);
        $this->weight = $weight;
    }
    
    function getProfit() {
        return $profit = ( $this->cost * $this->weight - $this->purchasePrice * $this->weight );
    }
}








?>
</body>
</html>