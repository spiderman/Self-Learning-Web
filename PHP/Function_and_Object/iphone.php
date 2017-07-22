<?php


class iphone extends smartphone
{
    public $model;

    function iphone($resolution, $width, $height)
    {
        $this->model = parent::$this->model = "Iphone";
        parent::__construct($resolution, $width, $height);
    }
}
