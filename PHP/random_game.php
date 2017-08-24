<?php

// generate random number for each player
$generate_result = array(
    'player_1' => getRandom(1,5),
    'player_2' => getRandom(1,5),
    'player_3' => getRandom(1,5),
);


// summary your array
print_r($generate_result);

print "<br>";

summary_winner($generate_result);




// summary
function summary_winner($input)
{
    $count_player = count($input);
    $winner = get_who_win($input);
    $count_winner = count($winner);

    // if all player got the same card or num
    if ($count_player == $count_winner)
        print "No one win";

    // if at least 1 player got diff card
    // ex: 10 players. 9 Players got "number 1" and 1 player got "number 5" => 9 players win
    elseif (is_array($winner))
        foreach ($winner as $key => $value)
            print "Winner is: $key, value = $value &emsp;";
    else
        print"Winner is: $winner";

}

// bcuz the requirement is about testing your
// problem solving skill, then I write my own
// finding max number here
function get_who_win($input_array)
{
    $temp_highest_key = "";
    $temp_highest = 0;
    $temp_equal = array();

    foreach ($input_array as $key => $value) {

        // if previous num is smaller than newer value then,
        // highest = new value
        // array clear and add the newer one
        if ($temp_highest < $value) {

            $temp_highest_key = $key;
            $temp_highest = $value;
            $temp_equal = array($key => $value);
        }
        // equal each other
        // then add it into array
        elseif ($temp_highest == $value)
            $temp_equal += array($key => $value);
    }


    // return
    /*if winner only one*/
    if (count($temp_equal) == 1)
        return "$temp_highest_key, value = $temp_highest";
   /* "More than one winner haha";*/
    return $temp_equal; /*if more than 1  winner*/
}


// actually, func name or any names that is
// long should use underscore instead of
// this Java Style...
function getRandom($min, $max) {
    return rand($min, $max);
    // or return rand(rand(1,9), rand(1,9));
}