<?php
include_once("Colorable.php");
include_once ("Shape.php");
include_once('Rectangle.php');
include_once('Square.php');

$shape[0] = new Rectangle('Rectangle 01', 3, 5);
$shape[1] = new Square('Square1', 3,3);
foreach ($shape as $value) {
    echo $value->show(), "<br>";
    echo "CalculateArea: ", $value->calculateArea(), "<br>";
    echo "CalculatePerimeter: ", $value->calculatePerimeter(), "<br>";
    if ($value instanceof Colorable) {
        $value->howToColor();
    }
}