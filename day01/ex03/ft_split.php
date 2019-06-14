<?php
function ft_split($str)
{
    $arr = preg_split("/[\s]+/", $str);                 
    sort($arr);     /*sort dupa ascii fiecare lit ,daca prima lit e caps ea va fi prima ca output 
                            si dupa break compararea si dupa  lungime*/
return($arr);
}              

    /*print_r(ft_split("Marinella hakim          hgujgy      auak   A     auakb")); */
                          /* "/[\s,]+/" */          /* / = start or end of pattern string */
                                                    //[ ... ] = grouping of characters
                                                    //+ = one or more of the preceeding character or group
                                                    //\s = Any whitespace character (space, tab).
                                                    //, = the literal comma character */


?>