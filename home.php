<?php
include_once 'Circle.php';
include_once 'Cylinder.php';
$circle=new Circle('Circle1',3,'green');

echo $circle->toString();
$cylinder=new Cylinder('name',5,'blue',4);
echo $cylinder->toString();