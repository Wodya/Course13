<?php


class PaymentYandex implements IPayment
{

    function Pay($sum, $phone): void
    {
        echo "Оплата Яндекс. Сумма {$sum}, телефон {$phone}<BR>";
    }
}