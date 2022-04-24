<?php

function my_sort_int_tab(&$tab)
{
   $compteur = count($tab);
   for ($i = 0; $i < $compteur; $i++)
   {
       for ($a = 0; $a < $compteur; $a++)
       {
                    if ($tab[$i] < $tab[$a])
                    {
                            $tmp = $tab[$i];
                            $tab[$i] = $tab[$a];
                            $tab[$a] = $tmp;
                }
            }
    }
}
