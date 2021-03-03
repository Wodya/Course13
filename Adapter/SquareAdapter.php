<?php
include 'ISquare.php';

class SquareAdapter implements ISquare
{
    private $SquareAreaLib;
    public function __construct(SquareAreaLib $SquareAreaLib)
    {
        $this->SquareAreaLib = $SquareAreaLib;
    }

    function squareArea(float $sideSquare)
    {
        return $this->SquareAreaLib->getSquareArea(M_SQRT2 * $sideSquare);
    }
}