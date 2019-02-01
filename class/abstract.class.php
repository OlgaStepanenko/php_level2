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

class DigitalGoods extends AbstractGoods {	
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

//class PieceGoods extends PackagedGoods {
    //function __construct($category, $artNum, $name, $purchasePrice, $sellPrice, $discount) {
        //parent::__construct($category, $artNum, $name, $purchasePrice, $sellPrice, $discount);
    //}
    //function setSellPrice(){
      //  return $this->sellPrice = ( parent::sellPrice / 2 );
    //}
//}







?>
</body>
</html>