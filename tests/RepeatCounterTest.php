<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        // function test_countRepeats_sameWord()
        // {
        //     //Arrange
        //     $test_RepeatCounter = new RepeatCounter;
        //     $word = "dog";
        //     $string = "dog";
        //
        //     //Act
        //     $result = $test_RepeatCounter->countRepeats($word, $string);
        //
        //     //Assert
        //     $this->assertEquals("dog", $result);
        //
        // }

        function test_countRepeats_sameWordCount()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "water";
            $string = "water";

            //Act
            $result = $test_RepeatCounter->countRepeats($word, $string);

            //Assert
            $this->assertEquals(1, $result);

        }
    }


?>
