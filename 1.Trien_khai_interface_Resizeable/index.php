<?php

include "Resizeable.php";
include "Square.php";
include "Circle.php";
include "Rectangle.php";
$circle = new Circle("hình tròn", 3);
echo "S hình tròn ban đầu:", $circle->acreage(), "<br>";
$circle->resize();
echo "S hình tròn sau khi random:", $circle->acreage(), "<br>";
$recrangle = new Rectangle(4, 6);
echo "S hình chữ nhật ban đầu: ", $recrangle->acreage(), "<br>";
$recrangle->resize();
echo "S hình chữ nhật sau khi random: ", $recrangle->acreage(), "<br>";
$square = new Square(5);
echo "S hình vuông: ", $square->acreage(), "<br>";
$square->resize();
echo "S hình vuông sau khi random: ", $square->acreage(), "<br>";