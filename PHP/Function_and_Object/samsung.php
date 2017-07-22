<?php


class samsung extends smartphone
{
    public function __construct($resolution, $width, $height)
    {
        $this->model = "Samsung"; // property inherit from parent
        parent::__construct($resolution, $width, $height);

        // to access parent's function
        // parent::get_height();
    }
}