<?php

$input_num = "1123415901018"; // example this is the input number so dont count on this line

// My basic array
$zero_to_nine = array("Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine");
$ten_to_ninety = array("10" => "Ten", "11" => "Eleven", "12" => "Twelve", "13" => "Thirteen", "14" => "Fourteen", "15" => "Fifteen", "16" => "Sixteen", "17" => "seventeen", "18" => "Eighteen", "19" => "Nineteen", "20" => "Twenty", "30" => "Thirty", "40" => "Forty",
    "50" => "Fifty", "60" => "Sixty", "70" => "Seventy", "80" => "Eighty", "90" => "Ninety");
$base_num = array("4" => "Thousand", "7" => "Million", "10" => "Billion", "13" => "Trillion", "15" => "Quadrillion", "18" => "Quintillion");

// convert input number to array
$input_num = array_map('intval', str_split($input_num));


for ($ind = 0, $ktong = count($input_num); $ind < count($input_num); $ind++, $ktong--) {

    // skip zero
    if ($input_num[$ind] == 0) continue;


    // output only to kton 1 4 7 9 ... n+3
    if ($ktong % 3 == 1) // i មានមួយខ្ទង់ (0 - 9)
        echo $zero_to_nine[$input_num[$ind]]." ";

    //
    if ($ktong % 3 - 2 == 0 || $ktong % 3 == 2) // i មានពីរខ្ទង់ (10 - 99)
    {
        if ($input_num[$ind] == 1) {
            echo $ten_to_ninety["1" . $input_num[$ind + 1]]."-";
            $ind += 1;
            $ktong -= 1;

        }
        else
            echo $ten_to_ninety["$input_num[$ind]0"] . " ";
    }


    if ($ktong % 3 == 0)
        echo $zero_to_nine[$input_num[$ind]] . "-Hundred ";

    if (array_key_exists($ktong, $base_num))
        echo $base_num[$ktong]." ";
}
