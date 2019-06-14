#!/usr/bin/php
<?php
    if($argc !=4)
    {
        echo"Incorect Parameters\n";
        exit(0);
    }
     $int1 = (intval(trim($argv[1])));
     $oper = trim($argv[2]);
    $int2 = (intval(trim($argv[3])));

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
?>