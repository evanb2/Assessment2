<?php
  require_once "src/RepeatCounter.php";

  class RepeatCounterTest extends PHPUnit_Framework_TestCase
  {
    function testNullInput()
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
    {
      //Arrange
      $test_no_count = new RepeatCounter;
      $input_keyword = "hi";
      $input_bank = "you";

      //Act
      $result = $test_no_count->countRepeats($input_keyword, $input_bank);

      //Assert
      $this->assertEquals("hi: 0", $result);
    }

  }
?>
