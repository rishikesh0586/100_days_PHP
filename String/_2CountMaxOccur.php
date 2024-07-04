<?php

function countCharOccurrences($str) {
  $charMap = [];
  for ($i = 0; $i < strlen($str); $i++) {
    $ch = $str[$i];
    if (isset($charMap[$ch])) {
      $charMap[$ch]++;
    } else {
      $charMap[$ch] = 1;
    }
  }
  return $charMap;
}

$str = "Hello, world! This is an example.";
$charMap = countCharOccurrences($str);

$maxChar = ' ';
$maxCount = 0;
$minChar = ' ';
$minCount = PHP_INT_MAX; // Initialize with maximum possible integer value

foreach ($charMap as $char => $count) {
  if ($count > $maxCount) {
    $maxChar = $char;
    $maxCount = $count;
  }
  if ($count < $minCount && $count > 0) { // Ignore characters with count 0 (not appearing)
    $minChar = $char;
    $minCount = $count;
  }
}

echo "Maximum occurring character: $maxChar ($maxCount times)\n";
echo "Minimum occurring character (excluding characters not appearing): $minChar ($minCount times)\n";

?>
