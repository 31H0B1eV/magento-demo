<?php

require_once 'app/Mage.php';

Mage::app();

//$product = Mage::getModel("demo/product");
//$product->sayHello();
//
//$helper = Mage::helper("demo/customer");
//$helper->sayHi();

$category = Mage::getModel("catalog/category")->load(1);
var_dump($category->getChildren());