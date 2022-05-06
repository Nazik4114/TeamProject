<?php
define('COUNT_NUMBERS', 20);
define('START_NUMBER', -5);
define('FINISH_NUMBER', 30);

$numbers = [];
echo "\$numbers = [ ";
for ($i=0; $i < COUNT_NUMBERS; $i++) {
  $numbers[] = random_int(START_NUMBER,FINISH_NUMBER);
  echo $numbers[$i].", ";
}
echo "]".PHP_EOL;

echo "Результат:".PHP_EOL;
$pos_array_positive = 0;
for ($i=0; $i < COUNT($numbers); $i++) {
  if ($numbers[$i] >= 0) {
    $tmp = $numbers[$i];
    $numbers[$i] = $numbers[$pos_array_positive];
    $numbers[$pos_array_positive++] = $tmp;
  }
  echo $numbers[$i]." ";
}
