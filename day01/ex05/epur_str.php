#!/usr/bin/php
<?php
    $arr = trim($argv[1]);
    $i = 0;
    while($i < strlen($arr))
    {
        if($arr[$i] == ' ')
        {
            echo(' ');
            while($arr[$i] == ' ')
                $i++;
        }
        echo($arr[$i]);
        $i++;
    }
    echo("\n");
?>