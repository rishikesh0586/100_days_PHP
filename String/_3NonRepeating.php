<?php

function countCharOccurrences($str) {
  $charMap = [];
  for ($i = 0; $i < strlen($str); $i++) {
    $ch = $str[$i];
    $charMap[$ch] = (isset($charMap[$ch]) ? $charMap[$ch] + 1 : 1);
  }
  return $charMap;
}

$str = "Hello, world!";
$charMap = countCharOccurrences($str);

$firstNonRepeating = ' ';
$firstRepeating = ' ';

foreach ($charMap as $char => $count) {
  if ($count === 1) {
    $firstNonRepeating = $char;
    break; // Exit loop if non-repeating found
  } else if ($count > 1 && $firstRepeating === ' ') {
    $firstRepeating = $char;
  }
}

echo "First non-repeating character: " . ($firstNonRepeating === ' ' ? "Not found" : $firstNonRepeating) . "\n";
echo "First repeating character: " . ($firstRepeating === ' ' ? "Not found" : $firstRepeating) . "\n";

?>
