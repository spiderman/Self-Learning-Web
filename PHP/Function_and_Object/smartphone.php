<?php


class smartphone
{
    public static $smartphone_popularity_2017 = 0.80;
    public static $taxation_rate = 0.2;

    protected $model;
    protected $resolution;
    protected $width, $height;

    public function __construct($resolution, $width, $height)
    {
        $this->resolution = $resolution;
        $this->width = $width;
        $this->height = $height;
    }

    public function __destruct()
    {
        // echo "This object is going to be deleted";
    }


    static function get_tax() // ប្រើ static function...() not function static...()
    {
        return self::$taxation_rate;
    }

    function get_model()
    {
        return $this->model;
    }

    function get_height()
    {
        return $this->height;
    }

    function get_width()
    {
        return $this->width;
    }
}