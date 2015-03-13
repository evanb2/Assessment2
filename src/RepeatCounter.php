<?php
  class RepeatCounter
  {
    function countRepeats($keyword, $bank)
    {
      if ($keyword == null || $bank == null) {
        return "please input a keyword and a wordbank";
      } else {
        $count = substr_count($bank, $keyword);
        return $keyword . ": " . $count;
      }

    }
  }
?>
