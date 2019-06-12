#!/usr/bin/php
<?php
    function    ft_is_sort($tab)
    {
        $cp_tab = $tab;
        sort($cp_tab);
        $i = -1;
        while(++$i < count($tab))
        {
            if(array_diff($tab,$cp_tab))
                return (1);
        }
        return (0);
    }
?>
