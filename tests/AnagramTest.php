<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram_firstWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "B";
            $input2 = "B";

            //Act
            $result = $test_Anagram->makeAnagram($input, $input2);

            //Assert
            $this->assertEquals("B", $result);
        }

        function test_makeAnagram_specTwo()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "on";
            $input2 = "no";

            //Act
            $result = $test_Anagram->makeAnagram($input, $input2);

            //Assert
            $this->assertEquals("no", $result);
        }




    }


?>
