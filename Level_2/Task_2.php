<?php
define('m', 5);
define('n', 3);
$arr = [];
for($i = 0; $i < m; $i++){
    $arr[$i] = [];
}
for($i = 0; $i < m; $i++){
    for($o = 0; $o < n; $o++){
        $arr[$i][$o] = rand(1, 10);
        print_r($arr[$i][$o]." ");
    }
    print_r("<br>");
}
print_r("<br>");
$temp;
for($i = 0; $i < m; $i++){
    for($o = 0; $o < n; $o++){
        $temp = $arr[$i][$o];
        if($i < n && $o < m){
            $arr[$i][$o] = $arr[$o][$i];
        }
        $arr[$o][$i] = $temp;
    }
}
for($i = 0; $i < n; $i++){
    for($o = 0; $o < m; $o++){
        print_r($arr[$o][$i]." ");
    }
    print_r("<br>");
}
?>