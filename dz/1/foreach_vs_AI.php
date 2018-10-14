<?php

const ARRAY_LENGTH = 5000;
$arr = null;

for ($i = 0; $i < ARRAY_LENGTH; $i++) {
    $arr[$i] = "test $i";
}

$start = microtime(true);

foreach($arr as $key => $item) {
    $temp = $item;
}

$end = microtime(true);

$time = $end - $start;
echo 'Время работы foreach: ' . round($time, 5) . " секунд </br>";
echo 'Использованно памяти (в байтах): ' . memory_get_usage();

echo "<hr>"; /* -------------------------------------------------------------------------------------------------- */

$start = microtime(true);

$obj = new ArrayObject($arr);
$iter = $obj->getIterator();

while($iter->valid()) {
    $temp = $iter;
    $iter->next();
}

$end = microtime(true);

$time = $end - $start;
echo 'Время работы ArrayIterator: ' . round($time, 5) . " секунд </br>";
echo 'Использованно памяти (в байтах): ' . memory_get_usage();