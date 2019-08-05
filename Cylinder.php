<?php
include_once './Circle.php';

class Cylinder extends Circle
{
public $height;
public function __construct($name, $radius, $color,$height)
{
    parent::__construct($name, $radius, $color);
    $this->height=$height;
}
public function caculatorVolume(){
    return parent::caculatorArea()*$this->height;
}
public function toString()
{
    return "Hinh $this->name co the tich la: ".$this->caculatorVolume()."<br/>";
}
}