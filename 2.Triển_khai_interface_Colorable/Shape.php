<?php


class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }

}