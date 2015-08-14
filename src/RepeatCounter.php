<?php
 class RepeatCounter
 {
     function countRepeats ($word, $string)
     {
        // $string_of_words = explode($string);
        $count = 1;

        //  foreach ($string_of_words as $individual_word) {
             if ($word == $string) {
                 $count += ($string);
             } else {
                 return "No words in string match original word.";
             }
        //  }

        return $count;

        //
        //  if ($word == $string) {
        //     array_push($count, $string);
        // }
        //
        // $result= 0
        //
        // foreach ($)
        //
        // $repeats = count(in_array($count));
        //     return $result;

     }
 }

?>
