<?php

class Anagram
{
    function makeAnagram($input_anagram)
    {
        $input_array_of_words = explode(", ", $input_anagram);
        $output_makeanagram = array();
        foreach ($input_array_of_words as $word) {
            array_push($output_makeanagram, strtolower($word));
        }
        return implode(", ", $output_makeanagram);
    }
}




?>
