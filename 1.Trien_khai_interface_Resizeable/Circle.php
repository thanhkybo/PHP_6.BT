<?php


class Circle implements Resizeable
{
    public $radius;
    public $name;

    public function __construct($name,$radius)
    {
        $this->radius = $radius;
        $this->name = $name;
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
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    function resize()
    {
        $this->setRadius($this->getRadius() * rand(1, 100));
    }

    function acreage()
    {
        $s =  pi() * ($this->getRadius() ** 2);
        return $s;
    }
}