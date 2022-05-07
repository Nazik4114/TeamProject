<?php

//Алгоритм працює з будь яким розміром матриці, потрібно тільки змінити значення констант і розкоментувати або написати 
//відповідну матрицю.
define('m', 7);
define('n', 7);

// $matrix = array(
//     [1, 2, 3, 4],
//     [5, 6, 7, 8],
//     [9, 10,11,12],
//     [13,14,15,16],
//     );

// $matrix = array(
//     [1, 2, 3, 4,  5],
//     [6, 7, 8, 9, 10],
//     [11,12,13,14,15],
//     [16,17,18,19,20],
//     [21,22,23,24,25],
//     );

// $matrix = array(
//     [1, 2, 3, 4, 5, 6],
//     [7, 8, 9, 10,11,12],
//     [13,14,15,16,17,18],
//     [19,20,21,22,23,24],
//     [25,26,27,28,29,30],
//     [31,32,33,34,35,36],
//     );

$matrix = array(
    [1, 2, 3, 4, 5, 6, 7],
    [8, 9, 10,11,12,13,14],
    [15,16,17,18,19,20,21],
    [22,23,24,25,26,27,28],
    [29,30,31,32,33,34,35],
    [36,37,38,39,40,41,42],
    [43,44,45,46,47,48,49],
);
$mas=[];
$f=true;
$b=1;
$d=0;
$Ri=0; 
$Rj=0;
$Di=$b;
$Dj=m-1;
$Li=n-1;
$Lj=m-2;
$Ui=n-2;
$Uj=0;
$q=1;
$w=3;
while($f){
    //Right
if($f){
while($Rj<m-$d){
$mas[]=$matrix[$Ri][$Rj++];
}
if($Rj-3<m-$d)
{
$Ri=$q;
$Rj=0+$b;
}
else{
$f=false;
}
}
//Down
if($f){
while($Di<n-$d){
    $mas[]=$matrix[$Di++][$Dj];
}
if($b<n-$d){
$Di=$b+1;
$Dj-=1;
}
else{
    $f=false;
}
}
//Left
if($f){
while($Lj>=0+$d){
    $mas[]=$matrix[$Li][$Lj--];
}
if(m-3>0+$d){
$Li-=1;
$Lj=m-$w;
}
else{
    $f=false;
}
}

//Up
if($f)
{

while($Ui>0+$d){
    $mas[]=$matrix[$Ui--][$Uj];
}
if(n-3>0+$d){
$Ui=n-$w;
$Uj+=1;
}
else{
    $f=false;
}
}
$b++;
$d++;
$q++;
$w++;
}
$strMatrix="";
for ($i=0; $i < m; $i++) { 
    for ($j=0; $j < n; $j++) { 
        $strMatrix.=$matrix[$i][$j]." ";
    }
}
$strMas="";
for ($i=0; $i < m*n; $i++) { 
    $strMas.=$mas[$i]." ";
}
print_r("Було:");
echo PHP_EOL;
print_r($strMatrix);
echo PHP_EOL;
print_r("Стало:");
echo PHP_EOL;
print_r($strMas);

?>