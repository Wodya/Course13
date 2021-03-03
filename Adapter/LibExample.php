<?php
include 'CircleAdapter.php';
include 'CircleAreaLib.php';
include 'SquareAdapter.php';
include 'SquareAreaLib.php';

$radius = 10;
echo (new CircleAdapter(new CircleAreaLib()))->circleArea(2*M_PI*$radius) . "<BR>";

$side = 9;
echo (new SquareAdapter(new SquareAreaLib()))->squareArea($side);
