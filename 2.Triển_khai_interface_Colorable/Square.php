<?php

include_once ('Rectangle.php');

class Square extends Rectangle implements Colorable
{

    public function __construct($name, $width, $width)
    {
        parent::__construct($name, $width, $width);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }


    public function calculateArea(){
        return $this->width * $this->width;
    }
    public function calculatePerimeter(){
        return $this->height  * 4;
    }

    function howToColor()
    {
        echo "Color all four sides.";
    }
}