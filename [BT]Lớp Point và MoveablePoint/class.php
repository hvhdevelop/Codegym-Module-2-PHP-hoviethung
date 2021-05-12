<?php
class Point
{
    private $x;
    private $y;
    public function __construct($x = 0.0, $y = 0.0)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        return array($this->x, $this->y);
    }
    public function toString()
    {
        return "($this->x,$this->y)";
    }
}
class MoveablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;
    public function __construct($xSpeed = 0.0, $ySpeed = 0.0, $x = 0.0, $y = 0.0)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        return array($this->xSpeed, $this->ySpeed);
    }
    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function toString()
    {
        return parent::toString() . "speed=($this->xSpeed,$this->ySpeed)";
    }
    public function move()
    {
        parent::setX(parent::getX() + $this->xSpeed);
        parent::setY(parent::getY() + $this->ySpeed);
        return $this;
    }
}