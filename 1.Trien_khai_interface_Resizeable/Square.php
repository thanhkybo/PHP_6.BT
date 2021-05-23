<?php


class Square implements Resizeable
{
    private $x;

    public function __construct($x)
    {
        $this->x = $x;
    }

    function resize()
    {
        $this->setX($this->getX() * ran(1, 100));
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    function acreage()
    {
        $s = $this->getX() ** 2;
        return $s;
    }
}