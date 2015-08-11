<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagram_firstWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "Banana";

            //Act
            $result = $test_Anagram->makeAnagram($input);

            //Assert
            $this->assertEquals("banana", $result);
        }
    }

        


?>
