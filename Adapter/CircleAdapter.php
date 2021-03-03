<?php
include 'ICircle.php';

class CircleAdapter implements ICircle
{
    private $CircleAreaLib;
    public function __construct(CircleAreaLib $CircleAreaLib)
    {
        $this->CircleAreaLib = $CircleAreaLib;
    }

    function circleArea(float $circumference)
    {
        return $this->CircleAreaLib->getCircleArea($circumference / M_PI);
    }
}