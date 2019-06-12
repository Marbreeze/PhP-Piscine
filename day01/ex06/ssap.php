#!/usr/bin/php

<?php

    $n_arr = [];
    $i = 1;
    while($i < $argc)
    {
        $argv[$i] = trim($argv[$i]);
        $res = preg_split("/[\s]+/", $argv[$i]);
        $index = -1;
        while(++$index < count($res))
          array_push($n_arr, $res[$index]);
        $i++;
        // echo "res == ";
        // print_r($res);
        // echo "n_arr == ";
        // print_r($n_arr);

    }
    sort($n_arr);
    $i = 0;
    while($i < count($n_arr))
    {
        echo ($n_arr[$i]." ");
        $i++;
    }

?>
