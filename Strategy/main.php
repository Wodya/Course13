<?php
include "IPayment.php";
include "Order.php";
include "PaymentQiwi.php";
include "PaymentYandex.php";

$order1 = new Order(new PaymentQiwi());
$order1->MakeOrder(100,'Телефон 1');

$order2 = new Order(new PaymentYandex());
$order2->MakeOrder(200,'Телефон 2');
