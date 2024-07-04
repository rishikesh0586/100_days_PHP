<?php

$str = "Hello, world!";
$charMap = [];

for ($i = 0; $i < strlen($str); $i++) {
  $ch = $str[$i];
  if (isset($charMap[$ch])) {
    $charMap[$ch]++;
  } else {
    $charMap[$ch] = 1;
  }
}

print_r($charMap);

?>
