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


        function test_countRepeats_differentWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "apple";
            $string = "apples";

            //Act
            $result = $test_RepeatCounter->countRepeats($word, $string);

            //Assert
            $this->assertEquals("No words in string match original word.", $result);

        }

        function test_countRepeats_countWordsInString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "cat";
            $string = "The cat in the hat was the wiliest cat of all the cats";

            //Act
            $result = $test_RepeatCounter->countRepeats($word, $string);

            //Assert
            $this->assertEquals(2, $result);

        }
    }


?>
