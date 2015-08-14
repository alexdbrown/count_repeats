<?php
    class RepeatCounter
    {
        function countRepeats ($word, $string)
        {
            $lc_word = strtolower($word);
            $lc_string = strtolower($string);
            $string_of_words = explode(" ", $lc_string);
            $repeats = array();

            if (!in_array($lc_word, $string_of_words)) {
                 return "No words in string match original word.";
            } else {
                foreach ($string_of_words as $individual_word) {
                    if ($lc_word == $individual_word) {
                     array_push($repeats, $individual_word);
                    }
                }
            }
            return count($repeats);
        }
    }

?>
