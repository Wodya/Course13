<?php


interface IPayment
{
    function Pay($sum, $phone) :void;
}