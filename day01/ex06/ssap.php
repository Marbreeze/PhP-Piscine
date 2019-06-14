#!/usr/bin/php
<?php
	$argv[1] = trim($argv[1]);
    $n_arr = preg_split("/[\s]+/", $argv[1]);;
    $i = 2;
    while($i < $argc)
    {
        $argv[$i] = trim($argv[$i]);
        $res = preg_split("/[\s]+/", $argv[$i]);
        $index = -1;
        while(++$index < count($res))
          array_push($n_arr, $res[$index]);
        $i++;
    }
    sort($n_arr);
    $i = 0;
    while($i < count($n_arr))
    {
        echo ($n_arr[$i]."\n");
        $i++;
    }

?>
