<?php
  class RepeatCounter
  {
    function countRepeats($keyword, $bank)
    {
      //removes caps in $keyword
      $keyword_lower = strtolower($keyword);
      $bank_lower = strtolower($bank);

      if ($keyword == null || $bank == null) {
        return "please input a keyword and a wordbank";
      } else {
        //finds $keyword in $bank, adds to $count
        $count = substr_count($bank_lower, $keyword_lower);
        return $keyword_lower . ": " . $count;
      }

    }
  }
?>
