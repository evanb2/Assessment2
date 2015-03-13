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
  }
?>
