<?php

/**
 * @author Daniel Pérez
 * @copyright Copyright(c) 2020 Daniel Pérez
 * @license https://www.gnu.org/licenses/gpl.txt
 */
/*
 * Este programa calcula la distancia Hamming entre dos cadenas.
 */

function distancia($a, $b)
{
    if (mb_strlen($a) != mb_strlen($b)){
        return false;
    }
        
    $acc = 0;
    for($i = 0; $i < mb_strlen($a); $i++) {
        if ($a[$i] != $b[$i]){
         $acc++;
    }
}
    return $acc;
}
