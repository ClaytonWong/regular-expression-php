<?php
  $pattern = "/\d/"; // Patten to match is digits

  $text1 = "1.0123";
  $text2 = "hello";

  // Check $text1 for digits
  $matches = preg_match_all($pattern, $text1);
  echo $matches . " matches were found for text1." . "<br>";
  
  // Check $text2 for digits
  $matches = preg_match_all($pattern, $text2);
  echo $matches . " matches were found for text2." . "<br>";
?>