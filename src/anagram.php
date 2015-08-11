<?php

class Anagram
{
    function makeAnagram($input_anagram, $input_list)
    {
        $output = "";
        $split_anagram = str_split($input_anagram);
        $split_list = str_split($input_list);
        sort($split_anagram);
        sort($split_list);

        if ($split_anagram === $split_list) {
            $output = $input_list;
        }
        return $output;
    }


}

?>
