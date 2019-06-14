#!/usr/bin/php
<?php
    if($argc != 2)
    {
        echo"Incorrect Parameters\n";
        exit;
    }
    $n_str = str_replace(" ","",$argv[1]);
    $int1 = intval($n_str);
    $oper = $n_str[strlen($int1)];
    $int2 = intval(substr($n_str, strlen($int1) + 1));
    if($oper == "+")
    {
        $res = $int1 + $int2;
        echo"$res\n";
    }
    elseif($oper == "-")
    {
        $res = $int1 - $int2;
        echo"$res \n";
    }
    elseif($oper == "%")
     {
        $res = $int1 % $int2;
        echo"$res\n";
     }
    elseif($oper == "/")
    {
        $res = $int1 / $int2;
        echo"$res\n";
    }
    elseif($oper == "*")
    {   $res = $int1 * $int2;
        echo"$res\n";
    }
    else
        echo"Syntax Error\n";
?>