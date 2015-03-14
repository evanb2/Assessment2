<?php
  require_once "src/RepeatCounter.php";

  class RepeatCounterTest extends PHPUnit_Framework_TestCase
  {
    function testNullInput()
    //Testing if both inputs are NULL
    {
      //Arrange
      $test_null_input = new RepeatCounter;
      $input_keyword = null;
      $input_bank = null;

      //Act
      $result = $test_null_input->countRepeats($input_keyword, $input_bank);

      //Assert
      $this->assertEquals("please input a keyword and a wordbank", $result);
    }

    function testNullBank()
    //Testing if just the $bank input is NULL
    {
      //Arrange
      $test_null_bank = new RepeatCounter;
      $input_keyword = "hi";
      $input_bank = null;

      //Act
      $result = $test_null_bank->countRepeats($input_keyword, $input_bank);

      //Assert
      $this->assertEquals("please input a keyword and a wordbank", $result);
    }

    function testNoCount()
    //Testing for a count of 0
    {
      //Arrange
      $test_no_count = new RepeatCounter;
      $input_keyword = "hi";
      $input_bank = "you";

      //Act
      $result = $test_no_count->countRepeats($input_keyword, $input_bank);

      //Assert
      $this->assertEquals("'hi' appeared in your wordbank 0 times.", $result);
    }

    function testCountOne()
    //Testing for a count of 1
    {
      //Arrange
      $test_count_one = new RepeatCounter;
      $input_keyword = "hi";
      $input_bank = "hi you";

      //Act
      $result = $test_count_one->countRepeats($input_keyword, $input_bank);

      //Assert
      $this->assertEquals("'hi' appeared in your wordbank 1 times.", $result);
    }

    function testCountMultiple()
    //Testing for count > 1 in $bank
    {
      //Arrange
      $test_count_one = new RepeatCounter;
      $input_keyword = "hi";
      $input_bank = "hi you hi";

      //Act
      $result = $test_count_one->countRepeats($input_keyword, $input_bank);

      //Assert
      $this->assertEquals("'hi' appeared in your wordbank 2 times.", $result);
    }

    function testKeywordCaps()
    //Testing for caps in $keyword
    {
      //Arrange
      $test_count_one = new RepeatCounter;
      $input_keyword = "HI";
      $input_bank = "hi you hi";

      //Act
      $result = $test_count_one->countRepeats($input_keyword, $input_bank);

      //Assert
      $this->assertEquals("'hi' appeared in your wordbank 2 times.", $result);
    }

    function testBankCaps()
    //Testing for caps in $bank
    {
      //Arrange
      $test_count_one = new RepeatCounter;
      $input_keyword = "Hi";
      $input_bank = "Hi you Hi";

      //Act
      $result = $test_count_one->countRepeats($input_keyword, $input_bank);

      //Assert
      $this->assertEquals("'hi' appeared in your wordbank 2 times.", $result);
    }

  }
?>
