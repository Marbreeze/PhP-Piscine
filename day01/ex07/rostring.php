#!/usr/bin/php
<?php
    $argv[1] = trim($argv[1]);
    $arr = preg_split("/[\s]+/", $argv[1]);
    $i = 1;
    while($i < count($arr))
    {
        echo($arr[$i].' ');
        $i++;
    
    }
    echo($arr[0]);

?>