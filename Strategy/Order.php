<?php

/**
 * Class InternetShop
 * IPayment $Payment
 */
class Order
{
    private $Payment;
    public function __construct($Payment)
    {
        $this->Payment = $Payment;
    }
    public function MakeOrder(float $sum, string $phone) : void
    {
        echo "Оформление заказа. Сумма {$sum}. <BR>";

        $this->Payment->Pay($sum, $phone);
    }

}