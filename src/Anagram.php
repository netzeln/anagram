<?php
class Anagram {

      function makeAnagram($input_word, $comparisons)
      {

          $word_to_compare  = str_split(strtolower($input_word));
          sort($word_to_compare, SORT_STRING | SORT_FLAG_CASE);
          $comparingwords = $comparisons;
          $comparingwords_split_sorted = array();
          $matching_keys = array();
// var_dump($word_to_compare);


          foreach($comparingwords as $comparingword)
          {
              strtolower($comparingword);
              $split_comparingword = str_split(strtolower($comparingword));
              sort($split_comparingword, SORT_STRING | SORT_FLAG_CASE);

              array_push($comparingwords_split_sorted, $split_comparingword);
          }


          foreach($comparingwords_split_sorted as $key=>$cword_split_sorted)
          {
              if ($word_to_compare == $cword_split_sorted)
              {
                  array_push($matching_keys, $comparisons[$key]);


              }
          }

              return $matching_keys;
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

?>
