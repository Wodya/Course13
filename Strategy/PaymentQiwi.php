<?php


class PaymentQiwi implements IPayment
{

    function Pay($sum, $phone): void
    {
        echo "Оплата Qiwi. Сумма {$sum}, телефон {$phone}<BR>";
    }
}