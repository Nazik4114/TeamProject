<?php
define("SUM", 12);
$nums = [];
echo 'Array: ';
for ($i = 0; $i < rand(5, 15); $i++) {
    //$nums[$i] = $i+1;

    $nums[$i] = rand(1,10);
    echo $nums[$i].', ';

}
echo PHP_EOL;

$first = 0;
$last = 0;
$tempsum = 0;
for ($i = 0; $i < count($nums); $i++) {
    $tempsum = 0;
    $first = 0;
    $last = 0;
    for ($j = $i; $j < count($nums); $j++) {
        $tempsum+=$nums[$j];
        if($tempsum==constant("SUM"))
        {
            $first=$i+1;
            $last=$j+1;
            echo "Beginning: ".$first."   End: ".$last;
            exit();
        }
    }
}

?>
