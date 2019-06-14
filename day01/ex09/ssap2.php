#!/usr/bin/php
<?php
     function get_order($c)
     {
         $i = 0;
         $order = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789";
         while($i < strlen($order))
         {
            if ($order[$i] == $c)
            {
                $r = $i;
                if($order[$i] >= 'a' && $order[$i] <= 'z')
                    $r--; //daca vezi litera g fa minus si va fi G mare; pt ca case insesitive
                return($i);   //position in the string
            }
            $i++;
         }
         return (ord($c) + 500); //ascii cod of symbol character$#@ automatic va fi la sfirsit de strig dar anume avem nevoie de acii daca al 2lea lement din al 2lea word tot are vriun symbol;
     }
     function ft_strcmp($str1, $str2)
     {
         $i = 0;
         while ($str1[$i] && $str2[$i]) // comp each element
         {
             if (get_order($str1[$i]) > get_order($str2[$i])) //comparing pos of each str[i] daca primul mai mare ca al doilea ,schimmba si automat primul va fi mai mic decat al 2-lea;
                 return(1); //change places
             elseif((get_order($str1[$i]) < get_order($str2[$i])))
                 return(2);    //dont change places
             $i++;
         }
         if($str2[$i] == '\0') //that means that is 
             return 1;
         return(2);
     }

    function ft_sort($words) // words este acelasi n_arr;
    {
        $i = 0;
        $n = count($words);
        $j = 0;
        while($i < $n)
        {
            $j = 0;  //index la primul lup o sa avem n cicluri ,dupa fiecare data cind termini cicliu pina nu sa sorta definitiv fal j = 0;
            while($j < $n - 1) //se duce pina la sf de lup dar nu i'a ultimul cuvint pt ca penultimul automat compara cu ultimul 
            {
                if(ft_strcmp($words[$j], $words[$j + 1]) == 1)
                {
                    $temp = $words[$j];
                    $words[$j] = $words[$j + 1];
                    $words[$j + 1] = $temp;
                }
                $j++;
            }
            $i++;
        }
        return ($words);
    }

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
    }
    $n_arr = ft_sort($n_arr);
    $i = 0;
    //foreach($sorted as $word)
       // echo $word."\n";
    while($i < count($n_arr))
    {
        echo ($n_arr[$i]."\n");
        $i++;
    }
?>
