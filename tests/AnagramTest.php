<?php
  require_once "src/Anagram.php";

  class AnagramTest extends PHPUnit_Framework_TestCase
  {
    //   function test_makeAnagram_singlesameword()
    //   {
    //       //Arrange
    //       $test_Anagram = new Anagram;
    //       $input = "nap";
    //       $comparisons ="nap";
      //
    //       //Act
    //       $result = $test_Anagram->makeAnagram($input, $comparisons);
      //
    //       //Assert
    //       $this->assertEquals("nap", $result);
    //   }
      //
    //   function test_makeAnagram_singleDifword()
    //   {
    //       //Arrange
    //       $test_Anagram = new Anagram;
    //       $input = "nap";
    //       $comparisons ="pan";
      //
    //       //Act
    //       $result = $test_Anagram->makeAnagram($input, $comparisons);
      //
    //       //Assert
    //       $this->assertEquals("pan", $result);
    //   }

    //   function test_makeAnagram_array()
    //   {
    //       //Arrange
    //       $test_Anagram = new Anagram;
    //       $input = "nap";
    //       $comparisons = array("nap");
      //
    //       //Act
    //       $result = $test_Anagram->makeAnagram($input, $comparisons);
      //
    //       //Assert
    //       $this->assertEquals(array("nap"), $result);
    //   }

      function test_makeAnagram_arraywrong()
      {
          //Arrange
          $test_Anagram = new Anagram;
          $input = "nap";
          $comparisons = array("nap", "portland", "dog", "pan", "pen", "apn");

          //Act
          $result = $test_Anagram->makeAnagram($input, $comparisons);

          //Assert
          $this->assertEquals(array("nap", "pan", "apn"), $result);
      }
  }




 ?>
