<?php


class Circle
{
    public $radius;
    public $color;
    public $name;
    public function __construct($name,$radius,$color)
    {
        $this->radius=$radius;
        $this->color=$color;
        $this->name=$name;
    }


    public function getRadius()
    {
        return $this->radius;
    }


    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }
    public function caculatorArea(){
        return pi()* $this->radius * $this->radius;
    }
    public function toString(){

        return "Hinh $this->name co dien tich la:".$this->caculatorArea()."<br/>";
    }

}
