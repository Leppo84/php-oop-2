<?php
include __DIR__ . '/Product.php';
include __DIR__ . '/Food.php';
include __DIR__ . '/Toy.php';
include __DIR__ . '/Accessory.php';

//     public function __construct($prodName, $artId,$stockQuantity, $priceUnit, $sellingPrice, $volume, $weight)

function addTocart ($artID, $num){
   $artID -> setrequestedQuantity($num)
}



totalPrice = artIdPrice1 + artIdPriceN + shippingPrice;

artIdPrice = requestedQuantity * priceUnit

 if (userCity == 'GothamCity') { shippingPrice = 10 + ($volume * 0.1) + ($weight * 0.2)}
 else {shippingPrice = 50;
}
