<?php

require_once 'app/Mage.php';

Mage::app();

$product = new TutsPlus_Demo_Model_Product;
$product->sayHello();

$customer = new Mage_Customer_Model_Session;

echo get_class($customer);

$customer2 = Mage::getModel("customer/session");  // same as 10 string but with Factory pattern

echo "<br />".get_class($customer2);