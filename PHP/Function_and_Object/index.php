<?php

// header
require_once "library.php";
require_once "smartphone.php";
require_once "samsung.php";

// using function from library.php
library_function_testing();


// set values to static properties
smartphone::$smartphone_popularity_2017 = 0.85;
smartphone::$taxation_rate = 0.25;

// accessing data from static properties
echo "Tax rate: ".smartphone::$taxation_rate."<br>";
echo "Popularity: ".smartphone::$smartphone_popularity_2017."<br>"."<br>";

// using static function
echo "Get tax rate using get_tax(): ".smartphone::get_tax()."<br>"."<br>";

$samsung = new samsung(540, 364, 520);
/*
echo "Device info:".
                    "model = ".$samsung->get_model().
                    ", Width= ". $samsung->get_width().
                    ", Height= ". $samsung->get_height()."<br><br>";*/

// print info
echo<<<_END
    Device info: model = {$samsung->get_model()}, Width= {$samsung->get_width()}, Height= {$samsung->get_height()} <br><br>
_END;

// print info
print_r($samsung);

