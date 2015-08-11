<?php

class Anagram
{
    function makeAnagram($input_anagram, $input_list)
    {
        $output = "";
        if($input_anagram === $input_list) {
            $output = $input_list;
        }
        return $output;
    }
}

?>
