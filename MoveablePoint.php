<?php
class MoveablePoint extends Point2D
{
    public $xSpeed;
    public $ySpeed;
    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
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
    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }
    public function getSpeed(){
        return "[".$this->xSpeed.",".$this->ySpeed."]";
    }
    public function toString()
    {
        return parent::Display().","."speed = ".$this->getSpeed();
    }
    public function move(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "<br>"."xSpeed = ".$this->x."<br>"."ySpeed = ".$this->y;
    }
}