<?php
$min = 10;
$max = 99;
$count1 = 3;
$count2 = 5;

for ($i=0; $i<$count1; $i++) {
  $a[] = rand($min, $max);
  echo $a[$i]." ";
}
echo PHP_EOL;
for ($i=0; $i<$count2; $i++) {
  $b[] = rand($min, $max);
  echo $b[$i] . " ";
}
echo PHP_EOL;
$c = array_merge($a,$b);
$c = array_unique($c);
echo "Результат: ".implode(" ", $c).PHP_EOL;
echo "К-сть ел-тів: ".count($c)." Сума ел-тів: ".array_sum($c);



