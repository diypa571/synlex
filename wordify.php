<?php
// Diypa571
// Ha strängar som ord.. 
function createWordArray($string) {
  // Trimma space
  $string = trim($string);

  // Splitrar
  $words = explode(" ", $string);

  return $words;
}

// Example usage
$string = "Startrek Enterprie är bäst, eller vad tycker?";
$wordArray = createWordArray($string);

// Print the array of words
foreach ($wordArray as $word) {
  echo $word . "<br>";
}

?>
