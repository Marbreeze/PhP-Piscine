<?php
    function    ft_is_sort($tab)
    {
        $cp_tab = $tab;
        sort($cp_tab);
        $i = -1;
        while(++$i < count($tab))
        {
            // if(array_diff($tab,$cp_tab))
            if ($tab[$i] != $cp_tab[$i])
                return (0);
        }
        return (1);
    }
?>
