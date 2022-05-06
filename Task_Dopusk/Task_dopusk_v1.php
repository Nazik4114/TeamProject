<?php
$min = 10;
$max = 99;
$mass[] = rand($min, $max);
$mass[] = rand($min, $max);
$mass[] = rand($min, $max);
$mass[] = rand($min, $max);
foreach($mass as $value)
  echo "$value ";
if ($mass[0]<$mass[1] && $mass[1]<$mass[2] && $mass[2]<$mass[3])
  echo PHP_EOL."Масив зі строго зростаючою!";
else echo PHP_EOL."Масив не зі строго зростаючою!";