<?php
class Anagram {

      function makeAnagram($input_word, $comparisons)
      {
          $word_to_compare  = str_split($input_word);
          $comparingword = str_split($comparisons);

          if ($word_to_compare == $comparingword){
              return $comparisons;
          }
        //   $sorted_word_compare = sort($word_to_compare, SORT_FLAG_CASE);
        //   $comparisons_split = array();
          //
        //   foreach($comparisons as $comparison)
        //   {
        //       $split_comparison = str_split($comparison);
        //       $sorted_split = sort($split_comparison, SORT_FLAG_CASE);
        //       array_push($comparisons_split, $sorted_split);
        //   }


      }
}

?>
